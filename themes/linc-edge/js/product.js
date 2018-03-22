(function($) {

    $(document).ready(function(){


        if($('.carousel').length){
            $('.carousel').flickity({
                // options
                cellAlign: 'left',
                contain: true
              });
        }
        


        $("#button-feature").click(function(){
            $(".features-content-container").css("display", "block");
            $(".benefits-content-container").css("display", "none");

        });
    });
    $(document).ready(function(){
        $("#button-benefit").click(function(){
            if ($(window).width()<=650 ){
            $("#benefit-mobile").css("display","block");
            $("#benefit-desktop").css("display", "none");
            $(".features-content-container").css("display", "none");
            $('.carousel-2').flickity({
                cellAlign: 'left',
                contain: true
              });
            } else{
            $("#benefit-mobile").css("display","none");
            $("#benefit-desktop").css("display", "block");
            $(".features-content-container").css("display", "none");
         
                
            }
        });
    });
    
    $(window).load(function() {
        $(".button-feature").addClass("button-active");
      });

      $(document).ready(function(){
        $("#button-benefit").click(function(){
        $(".button-benefit").addClass("button-active");
        $(".button-feature").removeClass("button-active");


      });
    });

    $(document).ready(function(){
        $("#button-feature").click(function(){
        $(".button-feature").addClass("button-active");
        $(".button-benefit").removeClass("button-active");


      });

    $(window).on('resize', function () {
        if (document.body.clientWidth > 650) {
            $('.features-content-container').css('display','block');
            $('#benefit-desktop').css('display','flex');
            $('#benefit-mobile').css('display','none');
        }
    });

    $(window).on('resize', function () {
        if (document.body.clientWidth < 650) {
            $('.features-content-container').css('display','block');
            $('#benefit-desktop').css('display','none');

        }
    });
    
    });
    



    })( jQuery );
