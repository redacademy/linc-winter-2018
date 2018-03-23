(function($) {

    $(document).ready(function () {



            // Hide all bio paragraphs except first paragraph
            $('.member-profile-inner .bio-excerpt p:not(:first-child)').hide();
            // Trim first paragraph
            var CEO_bio_excerpt = $('.member-profile-inner .bio-excerpt:first p');
            var bio_excerpt = $('.member-profile-inner .bio-excerpt:not(:first) p');

            var minimize_char_count_CEO = 80;   
            var minimize_char_count = 45;

            bio_excerpt.each(function(){    
                var text = $(this).text();        
                if(text.length > minimize_char_count ) {
                    $(this).html(text.slice(0,minimize_char_count )+ '<span>... </span>'
                    + '<span style="display:none;">'
                    + text.slice(minimize_char_count , text.length)
                    + '</span>'
                    );
                }
            });
            
            CEO_bio_excerpt.each(function(){    
                var CEO_text = $(this).text();        
                if(CEO_text.length > minimize_char_count ) {
                    $(this).html(CEO_text.slice(0,minimize_char_count_CEO )+ '<span>... </span>'
                    + '<span style="display:none;">'
                    + CEO_text.slice(minimize_char_count_CEO , CEO_text.length)
                    + '</span>'
                    );
                }
            });

            // Show/hide full bio
            $('.arrow-show-less').hide();
            $('.arrow-show-more').on('click', function(event) {
                console.log('show bio');
                // Hide ellipses
                $(this).parent().siblings('.bio-excerpt').children().children().hide();
                // Show full bio
                $(this).parent().siblings('.bio-excerpt').children().siblings().show();
                $(this).parent().siblings('.bio-excerpt').children().children().next().show();
                // Keep headshot from moving (too much)
                $(this).parent().parent().siblings('.headshot').css({"align-self":"flex-start", "margin-top":"0.65rem"});

                $(this).hide();
                $(this).siblings('.arrow-show-less').show();
            })
            $('.arrow-show-less').on('click', function(event) {
                // Show ellipses
                $(this).parent().siblings('.bio-excerpt').children().children().show();
                // Hide full bio
                $(this).parent().siblings('.bio-excerpt').children().children().next().hide();
                $('.member-profile-inner .bio-excerpt p:not(:first-child)').hide();
                // Place headshot back
                $(this).parent().parent().siblings('.headshot').css({"align-self":"center", "margin-top":"0"});
                
                $(this).hide();
                $(this).siblings('.arrow-show-more').show();
            })

            // $(window).on('resize', function () { 
            //     if (document.body.clientWidth < 650) {

            //     }
            //  });
        // } // end window on load
    });
    
})( jQuery );
