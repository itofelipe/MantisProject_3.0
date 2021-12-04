<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

    <section id="page">
        <div class="title_pages">
            <h1 class="page-title">Oops! That page can&rsquo;t be found.</h1>
        </div>
        <div class="container_pages">
            <div class="error-404">
                <div class="page-content">
                    <h4>It looks like nothing was found at this location. Maybe try a search?</h4>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>