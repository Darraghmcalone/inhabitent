<?php 
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	
	<div id="primary-journal" class="content-area">
		
			
	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'order' => 'ASC',); 
	$posts = new WP_Query( $args ); 

?>

   	<header class="journal-posts">
<?php if ( $posts->have_posts() ) : ?>

	

   <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
   	<h2 class="post-title"><?php the_title(); ?></h2>

<div class="picture"><?php the_post_thumbnail('large'); ?> </div>
   	

	<div class="metadata"><?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?></div>

	<p class="journal-content">
		<?php the_excerpt()?>
	</p>

   <a href="<?php the_permalink(); ?>" class="journal-button">Read entry</a>
  		
  </div>
</header>

   <?php endwhile; ?>

   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>

<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>


	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</section>
</div>

<?php get_footer(); ?>
