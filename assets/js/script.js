// @codekit-prepend "transition.js", "carousel.js", "collapse.js", "dropdown.js", "modal.js", "tab.js", "vendor/owl.carousel.min.js"

(function(){

    $("#SlideShow").owlCarousel({
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        items:1
    });

}());
