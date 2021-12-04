<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>

    <section id="page">
        <div class="title_pages">
            <?php the_title(); ?>
        </div>
        <div class="container_pages">
            <?php
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
            ?>
        </div>
    </section>

<?php
get_footer();
?>