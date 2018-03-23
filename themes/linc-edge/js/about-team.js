(function($) {

    $(document).ready(function () {
        // ----------------------- MOBILE -----------------------
        // Hide all bio paragraphs
        $('.member-profile-inner .bio-excerpt-mobile p').hide();
        // Show/hide full bio mobile
        $('.arrow-show-less-mobile').hide();
        $('.arrow-show-more-mobile').on('click', function() {
            // Show full bio
            $(this).parent().siblings('.bio-excerpt-mobile').children("p").show({duration:300});

            $(this).hide();
            $(this).siblings('.arrow-show-less-mobile').show();
        })
        $('.arrow-show-less-mobile').on('click', function() {
            // Hide full bio
            $(this).parent().siblings('.bio-excerpt-mobile').children("p").hide({duration:300});
            
            $(this).hide();
            $(this).siblings('.arrow-show-more-mobile').show();
        })

        // ----------------------- DESKTOP -----------------------
        // Hide all bio paragraphs except first paragraph
        $('.member-profile-inner .bio-excerpt-desktop p:not(:first-child)').hide();
        // Trim first paragraph
        var bio_excerpt = $('.member-profile-inner .bio-excerpt-desktop:not(:first) p');
        var CEO_bio_excerpt = $('.member-profile-inner .bio-excerpt-desktop:first p');

        var minimize_char_count = 45;
        var minimize_char_count_CEO = 80;   

        bio_excerpt.each(function(){    
            var text = $(this).text();        
            if(text.length > minimize_char_count ) {
                $(this).html(text.slice(0,minimize_char_count )+ '<span class="elip">... </span>'
                + '<span class="trimmed-text" style="display:none;">'
                + text.slice(minimize_char_count , text.length)
                + '</span>'
                );
            }
        });
        
        CEO_bio_excerpt.each(function(){    
            var CEO_text = $(this).text();        
            if(CEO_text.length > minimize_char_count ) {
                $(this).html(CEO_text.slice(0,minimize_char_count_CEO )+ '<span class="elip">... </span>'
                + '<span class="trimmed-text" style="display:none;">'
                + CEO_text.slice(minimize_char_count_CEO , CEO_text.length)
                + '</span>'
                );
            }
        });

        // Show/hide full bio desktop
        $('.arrow-show-less-desktop').hide();
        $('.arrow-show-more-desktop').on('click', function() {
            // Hide ellipses
            $(this).parent().siblings('.bio-excerpt-desktop').children("p").children(".elip").hide();
            // Show full bio
            $(this).parent().siblings('.bio-excerpt-desktop').children("p").show();
            $(this).parent().siblings('.bio-excerpt-desktop').children("p").children(".trimmed-text").show();
            // Keep headshot from moving (too much)
            // $(this).parent().parent().siblings('.headshot').css({"align-self":"flex-start", "margin-top":"0.6rem"});

            $(this).hide();
            $(this).siblings('.arrow-show-less-desktop').show();
        })
        $('.arrow-show-less-desktop').on('click', function() {
            // Show ellipses
            $(this).parent().siblings('.bio-excerpt-desktop').children("p").children(".elip").show();
            // Hide full bio
            $(this).parent().siblings('.bio-excerpt-desktop').children("p").children(".trimmed-text").hide();
            $(this).parent().siblings('.bio-excerpt-desktop').children("p:not(:first-child)").hide();
            // Place headshot back
            $(this).parent().parent().siblings('.headshot').css({"align-self":"center", "margin-top":"0"});
            
            $(this).hide();
            $(this).siblings('.arrow-show-more-desktop').show();
        })

    });
    
})( jQuery );
