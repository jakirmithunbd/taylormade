
(function($){
    var ua = window.navigator.userAgent;
    var isIE = /MSIE|Trident/.test(ua);

    if ( !isIE ) {
        //IE specific code goes here
        "use strict";
    }

      /*** Sidr Menu */
    $('.navbar-toggle').sidr({
        name: 'sidr-main',
        side: 'right',
        source: '#sidr',
        displace: false,
        renaming: false
    });

    /*** Enable Masonry */
    var $container = $('.masonry-container');
    if($container.length){
        $container.imagesLoaded( function () {
                $container.masonry({
                    columnWidth: '.item',
                itemSelector: '.item'
                });
            // ensure resize happens with max-width, #803
            var msnry = $container.data('masonry');
            msnry.needsResizeLayout = function() {
              return true;
            };
        });
    }

$("document").on("click",function(e) { $.sidr('close','sidr-main'); });

    $('.closeMenu').on('click', function(){
        $.sidr('close', 'sidr-main');
    });

    /*** Sticky header */
    $(window).scroll(function() {

        if ($(window).scrollTop() > 0) {
          $(".header").addClass("sticky");
        } 
        else {
          $(".header").removeClass("sticky");
        }
    });

    /*** Header height = gutter height */
    function headersetGutterHeight(){
        var footer = document.querySelector('.header'),
            gutter = document.querySelector('.header_gutter');
            gutter.style.height = footer.offsetHeight + 'px';
    }

    window.onload = headersetGutterHeight;
    window.onresize = headersetGutterHeight;

     // Mobile package Silder
    $(".sliders").slick({
        dots: true,
        infinite: true,
        draggable: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        // arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
    });

     // Testimonial Silder
    $(".testimonial-slider").slick({
        // dots: true,
        infinite: true,
        draggable: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
    });

    $('#search-icon').on('click', function(e){
        e.preventDefault();
        $('#search-box').toggleClass('Show-search');
    });

    // filter for mobile
    $('#work_mobile_filter').on('change', function(){
        $('#project-list').mixItUp('filter', this.value);
    });

    
})(jQuery);