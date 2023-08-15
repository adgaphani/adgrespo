jQuery(function ($) {
    function animateFlip($section) {
        if (window.flipInterval) {
            clearInterval(window.flipInterval);
        }

        const $flipContainer = $section.find('.flip-container');
        const loop = $flipContainer.data('flip-loop') !== false;
        const $children = $flipContainer.find('> *');

        let id = 0;
        let count = $children.length;

        function animateFlipShow() {
            const $child = $($children[id]);
            $children.stop().hide(0);
            $child.stop().fadeIn(1500);

            if (!loop && id + 1 >= count) {
                return false;
            }

            $($child).delay(2000).fadeOut(1500);
            id = (id + 1) % count;
        }

        $children.stop().hide();
        animateFlipShow();
        window.flipInterval = setInterval(function () {
            if (animateFlipShow() === false) {
                return clearInterval(window.flipInterval);
            }
        }, 1500 + 2000 + 1500);
    }

    function updateActive() {
        const availableHashes = $('.menu li a')
            .map(function (i, a) {
                return a.hash
            })
            .toArray();

        let sectionName = window.location.hash;
        if (!availableHashes.includes(sectionName)) {
            return window.location.href = availableHashes[0];
        }

        const $section = $(sectionName);


        $('.section').not($section).removeClass('active');
        $section.addClass('active');

        $section.find('.flip-container > *').stop().hide(0);
        animateFlip($section);

        const link = $(`.menu li a[href='${sectionName}']`);
        const li = link.parent('li');
        $('.menu li').not(li).removeClass('active');
        $(li).addClass('active');

    }

    $(window).on('hashchange', function () {
        updateActive();
    });
    // update on init
    updateActive();
})
