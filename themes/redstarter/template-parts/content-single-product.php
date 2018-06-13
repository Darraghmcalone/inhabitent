<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		

		<div class="product-img"><?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</div>

		
	<div class="product-content">
		<?php the_title( '<h1 class="product-entry-title">', '</h1>' ); ?>
		<?php the_content(); ?>
			
	<div class='social-buttons'>
		<button type="button" class='social-button'>
		<i class='fab fa-facebook'></i>
			Like
		</button>
		<button type="button" class='social-button'>
			<i class='fab fa-twitter'></i>
			Tweet
			</button>
		<button type="button" class='social-button'>
			<i class='fab fa-pinterest'></i>
			Pin
		</button>
	</div>


			
		</div>
		<div class='product-price'> <?php echo CFS()->get( 'price' ); ?></div>

		
		
	
		</div><!-- .entry-meta -->
	
	</header><!-- .entry-header -->

	
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
