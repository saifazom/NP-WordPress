
let header = document.getElementById('header');
let myButton = document.querySelector('.s-primary-menu-btn');
let primaryMenu = document.querySelector('.s-primary-menu');

!function ($) {
    // =-=-= 
    // Mobile Menu
    // =-=-=
    jQuery(myButton).click(function(){
        $(header).toggleClass("open");
        $(myButton).toggleClass("open");
        $(primaryMenu).slideToggle('fast');
    });


    // =-=-= 
    // Sicky Header 
    // =-=-=
    jQuery(window).scroll(function(){
        if ($(window).scrollTop() >= 67) {
           $('.o-panel--heaher').addClass('fixed');
        }
        else {
           $('.o-panel--heaher').removeClass('fixed');
        }
     });






}(window.jQuery);
