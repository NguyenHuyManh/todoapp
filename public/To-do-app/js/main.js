$(document).ready(function() {
    // Show info user login
    $('.user-info-name').click(function() {
        $('.dropdown-menu-user-info').toggle();
        $('.user-info-name i').toggleClass('down-icon');
    });

    // Add / remove class active icon bar menu responsive
    $('.nav-bar-btn').click(function() {
        $('.nav-bar-btn i').addClass('active');
    });

    $('.nav-bar-mobile__close').click(function() {
        $('.nav-bar-btn i').removeClass('active');
    });

    $('.nav-overlay').click(function() {
        $('.nav-bar-btn i').removeClass('active');
    });

});