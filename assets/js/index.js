// show navbar on scroll down

// Collapse the navbar when page is scrolled
$(window).scroll(function() {

    if ($('.hidden-nav').offset().top > 1) {
        $('.hidden-nav').addClass('navbar-show');
    } else {
        $('.hidden-nav').removeClass('navbar-show');
    }
});