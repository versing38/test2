(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    $(window).load(function(){
      $('.title').css({ 'top': 90+'px', 'opacity': 1 });
      $('.text').css({ 'opacity': 1 });
      $('.more').css({ 'opacity': 1, 'bottom': 90+'px' });
    });
    $('#header-carousel').on('slid.bs.carousel', function () {
      $('.title').css({ 'top': 90+'px', 'opacity': 1 });
      $('.text').css({ 'opacity': 1 });
      $('.more').css({ 'opacity': 1, 'bottom': 90+'px' });
    });
    $('#header-carousel').on('slide.bs.carousel', function () {
      $('.title').css({ 'top': 0+'px', 'opacity': 0 });
      $('.text').css({ 'opacity': 0 });
      $('.more').css({ 'opacity': 0, 'bottom': 0+'px' });
    });
    function carouselFix() {
      $(".carousel.slide").carousel("pause");
      $('.carousel.slide .item').removeClass('active');
      $('.carousel.slide').find('.item:first').addClass('active');
    }
    $(document).ready(function() {      
      carouselFix();
    });


    $(window).load(function(){
      $('.title').css({ 'top': 90+'px', 'opacity': 1 });
      $('.text').css({ 'opacity': 1 });
      $('.more').css({ 'opacity': 1, 'bottom': 90+'px' });
    });
    $('#header-carousels').on('slid.bs.carousel', function () {
      $('.title').css({ 'top': 90+'px', 'opacity': 1 });
      $('.text').css({ 'opacity': 1 });
      $('.more').css({ 'opacity': 1, 'bottom': 90+'px' });
    });
    $('#header-carousels').on('slide.bs.carousel', function () {
      $('.title').css({ 'top': 0+'px', 'opacity': 0 });
      $('.text').css({ 'opacity': 0 });
      $('.more').css({ 'opacity': 0, 'bottom': 0+'px' });
    });
    function carouselFix() {
      $(".carousel.slide").carousel("pause");
      $('.carousel.slide .item').removeClass('active');
      $('.carousel.slide').find('.item:first').addClass('active');
    }
    $(document).ready(function() {      
      carouselFix();
    });

    // Initialize and Configure Scroll Reveal Animation
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 200);
    sr.reveal('.sr-button', {
        duration: 1000,
        delay: 200
    });
    sr.reveal('.sr-contact', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 300);

    // Initialize and Configure Magnific Popup Lightbox Plugin
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });





})(jQuery); // End of use strict
function popup(popupid){
    if (popupid == '#layer-apropos') {
      $('.pagepop').addClass('scaleDemi');
      $('.pagepop').addClass('blur');
    }
    else if(popupid == '#layer-livre')
    {
      $('.pagelivre').addClass('scaleDemi');
      $('.pagelivre').addClass('blur');
    }
    else
    {
      $('.page').addClass('scaleDemi');
      $('.page').css('height', '10px');
      $('.page').addClass('blur');
    }
    
    $(popupid).removeClass('mask');
    $(popupid).transition({opacity:1,scale: [1]});
    $(popupid).removeClass('blur');
}
function Closepopup(popupid){
    if (popupid == '#layer-apropos') {
      $('.pagepop').removeClass('scaleDemi');
      $('.pagepop').removeClass('blur');
    }
    else if(popupid == '#layer-livre')
    {
      $('.pagelivre').removeClass('scaleDemi');
      $('.pagelivre').removeClass('blur');
    }
    else
    {
      $('.page').removeClass('scaleDemi');
      $('.page').removeClass('blur');
    }
      
    $(popupid).addClass('mask');
    $(popupid).transition({opacity:1,scale: [1]});
    $(popupid).addClass('blur');
}

