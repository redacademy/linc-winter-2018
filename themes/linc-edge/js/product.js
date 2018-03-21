(function($) {

    $(document).ready(function(){
        $("#button-feature").click(function(){
            $(".features-content-container").css("display", "block");
            $(".benefits-content-container").css("display", "none");
        });
    });
    $(document).ready(function(){
        $("#button-benefit").click(function(){
            $(".benefits-content-container").css("display", "block");
            $(".features-content-container").css("display", "none");
        });
    });

    })( jQuery );
