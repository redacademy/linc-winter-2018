jQuery(document).ready(function($){

    // ---------- Display go-to-top-button ----------
    // when distance from top = 250px fade button in/out
    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('#back-to-top-btn').fadeIn(300);
        } else {
            $('#back-to-top-btn').fadeOut(300);
        }
    });

    //On click, scroll to the top of the document t = 1000ms
    $('#back-to-top-btn').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
 
});