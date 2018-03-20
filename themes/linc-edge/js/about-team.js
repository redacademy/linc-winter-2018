(function($) {

    $(document).ready(function () {

        console.log('about-team-js');
        window.onload = function() {

            // Hide all bio paragraphs except first paragraph
            $('.member-profile-inner .bio-excerpt p:not(:first-child)').hide();
            // Trim first paragraph
            var CEO_bio_excerpt = $('.member-profile-inner .bio-excerpt:first p');
            var bio_excerpt = $('.member-profile-inner .bio-excerpt:not(:first) p');
            // CEO excerpt char count
            var minimize_char_count_CEO = 80;   
            var minimize_char_count = 45;
   

            bio_excerpt.each(function(){    
                var text = $(this).text();        
                if(text.length > minimize_char_count ) {
                    text = text.slice(0,minimize_char_count )+ '... ';
                    $(this).text(text);
                    $(this).css("color", "red");
                }
            });
            
            var CEO_text = CEO_bio_excerpt.text();
            if (CEO_text.length > minimize_char_count_CEO ) {
                CEO_text = CEO_text.slice(0,minimize_char_count_CEO )+ '... ';
                $(CEO_bio_excerpt).text(CEO_text);
                $(CEO_bio_excerpt).css("color", "skyblue");
            }

            // Hide excerpt on collapse-o-matic click
            var $toggle_bio = $('.expand-bio');
            $toggle_bio.on('click', function(event) {
                console.log('hide excerpt')
            });
        }
    });
    
})( jQuery );
