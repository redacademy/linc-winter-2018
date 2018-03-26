(function($) {

    $(document).ready(function () {
        
        // Hamburger menu animation
        var $hamburger = $('.hamburger');
        $hamburger.on('click', function(event) {
            $hamburger.toggleClass('is-active');
            event.preventDefault();
            $('.menu-navigation .menu').toggleClass('is-active');
        });
      
        // Hide active mobile menu if window expands to desktop //
        // Show 'About' sub-menu 'Company' if window shrinks to mobile //
        var resizeTimer;
        $(window).on('resize', function () { 

            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {

                if (document.body.clientWidth > 650) {
                    $hamburger.removeClass('is-active');
                    $('.menu-navigation .menu').removeClass('is-active');  
                } else {
                    $('.menu-item-159').show();
                }

                submenuCenter();
              
            }, 250);
          
        });

        // Hide "About" sub-menu "Company" //
        $('.menu-item-159').hide();
        // Center sub-menus below parent. Overwritten by !important CSS on mobile //
        function submenuCenter(){
            console.log('submenuCenter');
            $('.menu .sub-menu').each(function() {
                $(this).css({
                    'left' : '50%',
                    'margin-left' : $(this).width() / 2 * - 1 + 'px'
                });
            });
        }
        submenuCenter();

    });
    
})( jQuery );
