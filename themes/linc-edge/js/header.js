(function($) {

    $(document).ready(function () {
        console.log('jsss file linked');
        var $hamburger = $('.hamburger');
        $hamburger.on('click', function(event) {
            $hamburger.toggleClass('is-active');
            event.preventDefault();
            $('.menu-navigation .menu').toggleClass('is-active');
        });
      
        /* Hide mobile menu if window expands to desktop*/
        $(window).on('resize', function () { 
            if (document.body.clientWidth > 650) {
                $hamburger.removeClass('is-active');
                $('.menu-navigation .menu').removeClass('is-active');
            }
         })
        // $('.menu-navigation #primary-menu').on('blur', function(){
        //     $(this).hide({duration:300});
        // });
    });
    
})( jQuery );
