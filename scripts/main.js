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
    const form = document.getElementById("contact-form");

    function showMessage(message, cssClass) {
        const $result = $("#form-result");

        $result.text(message)
            .addClass(cssClass)
            .show();
    }

    async function handleSubmit(event) {
        event.preventDefault();
        const $result = $("#form-result");
        const data = new FormData(event.target);

        $result
            .text('')
            .removeClass('text-success text-danger')
            .hide();

        fetch(event.target.action, {
            method: form.method,
            body: data,
            headers: {
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
        }).catch(error => {
            showMessage("Oops! There was a problem submitting your form", 'text-danger');
        });
    }

    form.addEventListener("submit", handleSubmit)
});
