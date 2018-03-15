(function($) {

    $(document).ready(function () {
        console.log('jsss file linked');
        var $hamburger = $('.hamburger');
        $hamburger.on('click', function(event) {
            $hamburger.toggleClass('is-active');
            event.preventDefault();
            $('.menu-navigation .menu').toggleClass('is-active');
            // $('.menu-navigation #primary-menu').focus();
        });
      
        // $('.menu-navigation #primary-menu').on('blur', function(){
        //     $(this).hide({duration:300});
        // });
    });
    
})( jQuery );
