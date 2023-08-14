
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

    $(window).on('hashchange', function () {
        updateActive();
    });

    // update on init
    updateActive();
})


function animateParagraphs($section) {
    const firstPara = $section.find('#S' + $section.attr('id').charAt($section.attr('id').length - 1) + 'P1');
    const secondPara = $section.find('#S' + $section.attr('id').charAt($section.attr('id').length - 1) + 'P2');
    const thirdPara = $section.find('.S' + $section.attr('id').charAt($section.attr('id').length - 1) + 'P3');

    if (firstPara.length && secondPara.length && thirdPara.length) {
        setTimeout(function () {
            firstPara.fadeIn(1500).delay(2000).fadeOut(1500);
            secondPara.delay(3500).fadeIn(1500).delay(2000).fadeOut(1500);
            thirdPara.delay(4500).fadeIn(1500);
        }, 2000);
    }
}

function updateActive() {
    const sectionName = window.location.hash || '#home';
    const $section = $(sectionName);

    $('.section').not($section).removeClass('active').find('p').hide();
    $section.addClass('active');
    animateParagraphs($section);
}

let currentSectionIndex = 0; // Initialize with the first section

function updateActiveSection(scrollDirection) {
    const totalSections = $('.section').length;
    if (scrollDirection === 'down') {
        currentSectionIndex = (currentSectionIndex + 1) % totalSections;
    } else if (scrollDirection === 'up') {
        currentSectionIndex = (currentSectionIndex - 1 + totalSections) % totalSections;
    }

    const $sectionToShow = $('.section').eq(currentSectionIndex);
    $('html, body').animate({
        scrollTop: $sectionToShow.offset().top
    }, 1000);
    updateActive(); // Update active section based on new position
}

let lastScrollTop = 0;
$(window).on('scroll', function () {
    const st = $(this).scrollTop();
    if (st > lastScrollTop) {
        // Scroll down
        updateActiveSection('down');
    } else {
        // Scroll up
        updateActiveSection('up');
    }
    lastScrollTop = st;
});


let currentText = 1; // Initialize with 1
function animateFlip() {
    const textToShow = "#text-" + currentText;
    const textToHide = "#text-" + (3 - currentText);

    $(textToShow).fadeIn(1000, function () {
        setTimeout(function () {
            $(textToShow).fadeOut(1500, function () {
                currentText = 3 - currentText; // Toggle between 1 and 2
                animateFlip();
            });
        }, 1000); // Delay before fading out
    });
}

$(document).ready(function () {
    updateActive();
    animateFlip();
});
