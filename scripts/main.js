jQuery(function ($) {
    const $menus = $('.menu li span');

    function updateActive(sectionName = null) {
        const availableHashes = $menus
            .map(function (i, a) {
                return $(a).data('href')
            })
            .toArray();

        if (!availableHashes.includes(sectionName)) {
            return updateActive(availableHashes[0]);
        }

        const $section = $(sectionName);

        $('.section').not($section).removeClass('active');
        $section.addClass('active');

        const link = $(`.menu li span[data-href='${sectionName}']`);
        const li = link.parent('li');
        $('.menu li').not(li).removeClass('active');
        $(li).addClass('active');
    }


    $menus.on('click touchstart', function (e) {
        e.preventDefault();
        const url = $(e.target).data('href');
        updateActive(url);
        return false;
    });

    $('.btn-action').on('click touchstart', function (e) {
        e.preventDefault();
        updateActive('#contact');
    });

    // update on init
    updateActive();
});

jQuery(function ($) {

    function showMessage(message, cssClass) {
        const $result = $("#form-result");

        $result.text(message)
            .addClass(cssClass)
            .show();
    }

    // Quadratic Bezier curve function
    function bezier(p0, p1, p2, t) {
        return (1 - t) * (1 - t) * p0 + 2 * (1 - t) * t * p1 + t * t * p2;
    }

    function animateSubmit(callback) {
        const form = document.getElementById("contact-form");
        html2canvas(form).then(function (canvas) {
            const canvasContainer = document.createElement('div');
            canvasContainer.style.position = 'absolute';
            canvasContainer.style.top = '0';
            canvasContainer.style.left = '0';
            document.body.appendChild(canvasContainer);

            canvasContainer.appendChild(canvas);

            // Overlay canvas on top of form
            const rect = form.getBoundingClientRect();
            canvas.style.position = 'fixed';
            canvas.style.top = `${rect.top}px`;
            canvas.style.left = `${rect.left}px`;

            // Animate shrinking and movement with Bezier curve
            let progress = 0;  // From 0 to 1 for Bezier curve
            const animateOut = setInterval(function () {
                progress += 0.025;
                const scale = 1 - 0.95 * progress;  // Shrink from 100% to 5%
                const positionX = bezier(0, -2, 4, progress) * canvas.width;
                const positionY = bezier(0, 4, 1, progress) * canvas.height;  // Adjusted Bezier curve for a U-shape trajectory
                canvas.style.transform = `scale(${scale}) translate(${positionX}px, ${positionY}px)`;

                // Fade out as it reaches the top right
                if (progress >= 0.95) {
                    canvas.style.opacity = 1 - (progress - 0.95) * 20;
                }

                if (progress >= 1) {
                    clearInterval(animateOut);
                    document.body.removeChild(canvasContainer);
                    callback();
                }
            }, 20);
        });
    }


    $('#contact-form form').on('submit', function (event) {
        event.preventDefault();

        const form = event.target;
        const data = new FormData(form);

        const $result = $("#form-result");
        $result
            .text('')
            .removeClass('text-success text-danger')
            .hide();

        animateSubmit(function () {
            fetch(event.target.action, {
                method: form.method, body: data, headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    showMessage("Thanks for your submission!", 'text-success');
                    form.reset();
                } else {
                    response.json().then(data => {
                        if (Object.hasOwn(data, 'errors')) {
                            showMessage(data["errors"].map(error => error["message"]).join(", "), 'text-danger');
                        } else {
                            showMessage("Oops! There was a problem submitting your form", 'text-danger');
                        }
                    })
                }
            }).catch((error) => {
                console.log(error);
                showMessage("Oops! There was a problem submitting your form", 'text-danger');
            });
        });
    });
});
