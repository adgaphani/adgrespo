
jQuery(function ($) {
    /* menu click actions */

    function animateParagraphs($section) {
        // Find the paragraphs in the active section
        const paragraphs = $section.find('p');

        if (paragraphs.length >= 3) {
            // First paragraph fades in, stays for 0.5 sec, and fades out
            $(paragraphs[0]).fadeIn().delay(500).fadeOut(function() {
                // Second paragraph fades in, stays for 0.5 sec, and fades out
                $(paragraphs[1]).fadeIn().delay(500).fadeOut(function() {
                    // Third paragraph fades in and stays there
                    $(paragraphs[2]).fadeIn();
                });
            });
        }
    }

    function updateActive() {
        const sectionName = window.location.hash || '#home';
        const $section = $(sectionName);

        $('.section').not($section).removeClass('active').find('p').hide();
        $section.addClass('active');

        animateParagraphs($section);

        const link = $(`.menu li a[href='${sectionName}']`);
        const li = link.parent('li');
        $('.menu li').not(li).removeClass('active');
        $(li).addClass('active');
    }

    $(window).on('hashchange', function (e) {
        updateActive();
    });

    // update on init
    updateActive();
})
