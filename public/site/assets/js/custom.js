/**
 * Navbar's Js
 *
 */
$(function() {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 600) {
            $('.navbar').addClass('bg-gradient');
        } else {
            $('.navbar').removeClass('bg-gradient');
        }
    });
});