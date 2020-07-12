<?php 
define( 'WP_USE_THEMES', false );
get_header();
wp_link_pages();

if(have_posts()): 
    
    while(have_posts()): 
    ?>
        <div>
        <?php 
        the_title("<h1>", "</h1>");
        the_author();
        the_post();
        the_content();
        ?>
        </div>
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
 <?php 
    endwhile;
else:
    _e('Sorry, no posts matched your criteria.');
endif;

_e("Ola mundo");

get_sidebar();
get_footer();