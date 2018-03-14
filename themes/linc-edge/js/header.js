(function($) {

    $(document).ready(function () {
        console.log('jsss file linked');
        var $hamburger = $(".hamburger");
        $hamburger.on("click", function() {
          $hamburger.toggleClass("is-active");
          // Do something else, like open/close menu
        });
    });
    
})( jQuery );
    