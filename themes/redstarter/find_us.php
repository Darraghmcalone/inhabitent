<?php /*Template Name: Contact Template */
/**
 * 
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div class="find-us-article">
    <div class="find-us">
        <h1>FIND US</h1>
                <iframe
                width="600"
                height="450"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDjA4Eebws3UHnF5fo_UqhRqflkFuxEMGQ&q=1490+W+Broadway,+Vancouver,+BC,+Canada
                " allowfullscreen>
                </iframe>


        <div id="primary" class="content-area">
            <main id="find-content" class="site-main" role="main">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php echo the_content(); ?>
                <?php endwhile; ?>

            </main>
        </div>
    </div>

    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>

























