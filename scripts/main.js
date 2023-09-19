jQuery(function ($) {
    const $menus = $('.menu li span');


    function animateFlip($section) {
        if (window.flipInterval) {
            clearInterval(window.flipInterval);
        }

        const $flipContainer = $section.find('.flip-container');
        const loop = $flipContainer.data('flip-loop') === true;
        const $children = $flipContainer.find('> *');

        let id = 0;
        let count = $children.length;

        function animateFlipShow() {
            const $child = $($children[id]);
            $children.stop().hide(0);
            $child.stop().fadeIn(1300);

            if (!loop && id + 1 >= count) {
                return false;
            }

            $($child).delay(1800).fadeOut(1300);
            id = (id + 1) % count;
        }

        $children.stop().hide();
        animateFlipShow();
        window.flipInterval = setInterval(function () {
            if (animateFlipShow() === false) {
                return clearInterval(window.flipInterval);
            }
        }, 1300 + 1800 + 1300);
    }

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

        $section.find('.flip-container > *').stop().hide(0);
        animateFlip($section);

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


// Quadratic Bezier curve function
function bezier(p0, p1, p2, t) {
    return (1 - t) * (1 - t) * p0 + 2 * (1 - t) * t * p1 + t * t * p2;
}

function animateSubmit() {
    const form = document.getElementById("contact-form");

    return html2canvas(form).then(function (canvas) {
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
        window.animateOut = setInterval(function () {
            progress += 0.020;
            const scale = 1 - 0.95 * progress;  // Shrink from 100% to 5%
            const positionX = bezier(0, 1, 4, progress) * canvas.width;
            const positionY = bezier(0, -2, -2, progress) * canvas.height;  // Adjusted Bezier curve for a U-shape trajectory
            canvas.style.transform = `scale(${scale}) translate(${positionX}px, ${positionY}px)`;

            // Fade out as it reaches the top right
            if (progress >= 0.95) {
                canvas.style.opacity = 1 - (progress - 0.95) * 30;
            }

            if (progress >= 1) {
                clearInterval(window.animateOut);
                document.body.removeChild(canvasContainer);
            }
        }, 20);
    });
}

jQuery(function ($) {
    const $result = $("#form-result");
    const $resultText = $result.find('span');

    function showMessage(success, error = null) {
        const message = success
            ? "We received your message. Our finest will get in touch with you shortly."
            : "Oops! Our gears seem to have jammed up. Please give it another whirl or reach out directly. Our finest are on it.";
        const cssClass = success
            ? 'bg-success'
            : 'bg-danger';

        $resultText.text(message);
        $result.addClass(cssClass).show();

        if (error) {
            console.error(error);
        }
    }

    function hideMessage() {
        $resultText.text('');
        $result.removeClass('bg-success bg-danger').hide();
    }

    $('#closeButton').on('click touchstart', function (e) {
        e.preventDefault();
        hideMessage();
    })

    grecaptcha.ready(function () {
        $('#contact-form form').on('submit', function (event) {
            event.preventDefault();
            hideMessage();

            const form = event.target;
            const data = new FormData(form);

            $('#contact-form form input, #contact-form form textarea, #contact-form form button').prop("disabled", true);

            Promise.all([
                grecaptcha.execute('6LeDxzkoAAAAAJeJ3MYg9OfbPAOLBGmj5qg7FzzF', {action: 'submit'}),
                animateSubmit(),
            ]).then(function (response) {
                const token = response[0];
                console.log(data.values());
                data.append('g-recaptcha-response', token);

                return fetch(event.target.action, {
                    method: form.method,
                    body: data,
                    headers: {
                        'Accept': 'application/json'
                    }
                }).then(response => {
                    $('#contact-form form input, #contact-form form textarea, #contact-form form button').prop("disabled", true);
                    if (response.ok) {
                        showMessage(true);
                        form.reset();
                    } else {
                        response.json().then(data => {
                            showMessage(false, data);
                        })
                    }
                });
            }).catch((error) => {
                $('#contact-form form input, #contact-form form textarea, #contact-form form button').prop("disabled", true);
                showMessage(false, error);
            });
        });
    });
});
