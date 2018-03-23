(function($) {

    $(document).ready(function () {
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
        });

        // Center sub-menus below parent
        $('.menu .sub-menu').each(function() {
            $(this).css({
               'left' : '50%',
               'margin-left' : $(this).width() / 2 * - 1 + 'px'
            });
        });

    });
    
})( jQuery );
