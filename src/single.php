<?php 
get_header();



get_sidebar();
wp_link_pages();


if ( have_posts() ) : 
    while ( have_posts() ) :
        the_title( "<h1>", "</h1>"); 
        the_post();
        the_content();
        the_author();
        the_date();
    endwhile;
else :
    _e('Sorry, no posts matched your criteria.');
endif;

?>
<a><?php previous_post_link(); ?>Voltar</a><br />
<a><?php next_post_link(); ?>Prox</a>
<?php

comment_form();
get_footer();