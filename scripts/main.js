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
        const availableHashes = $('.menu li span')
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

    $('.menu li span').on('click touchstart',function (e) {
        e.preventDefault();
        const url = $(e.target).data('href');
        console.log(url);
        updateActive(url);
        return false;
    });

    // update on init
    updateActive();
})
