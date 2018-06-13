<?php /*Template Name: About Us Template */

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<section class="about">
			<div class="about-image">
				<h1> ABOUT <h1>
			</div>
		</section>
		<div class="about-info">
			<h2>Our Story</h2>
               <?php echo CFS()->get('our_story'); ?>
               <h2>Our Team</h2>
               <?php echo CFS()->get('our_team'); ?>
           </div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

