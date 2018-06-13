<?php /*Template Name: Home Page*/ ?>


<?php get_header(); ?>
	<div id="primary" class="content-area">
		<section class="home-hero">
            <img class="big-logo" src="<?php echo get_stylesheet_directory_uri()?>/images/logos/inhabitent-logo-full.svg" >
           
			<div class="home-logo"></div>
		</section>
			
				
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //default loop ?>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<section class="shop-section">
            <h2>Shop Stuff</h2>
            <div class="shop-categories-wrapper">
                <?php 
                    $terms = get_terms( 
                        array(
                        'taxonomy' => 'product-type',
                        'products_per_page' => 4,
                        'hide_empty' => false
                        ) 
                    );

                    foreach($terms as $term) {
                        echo '<div class="shop"><img class="product" src="wp-content/themes/redstarter/images/product-photos/product-type-icons/' . strtolower($term->name) . '.svg" alt="' . $term->name . '"><p>' . $term->description . '</p><a href="../product-type/' . strtolower($term->name) . '" class="shop-category-button">' . $term->name . ' Stuff</a></div>';
                      }
                    ?>        
            </div><!-- shop-categories-wrapper -->
        </section>


</div>

<h2>Inhabitent Journal</h2>

<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'order' => 'ASC',); 
	$posts = new WP_Query( $args ); 

?>

   	<ul class="journal">
<?php if ( $posts->have_posts() ) : ?>


   <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

<li class="list">
	<div class="picture"><?php the_post_thumbnail('medium_large'); ?> </div>
	<h3 class="post-title"><?php the_title(); ?></h3>
    
        
    </div>
     <a href="<?php the_permalink(); ?>" class="button">Read entry</a>
  		
  </li>


   <?php endwhile; ?>

   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>

<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</ul>


<section class="adventure-section">
            <h2>Latest Adventures</h2>
            <div class="adventure-wrapper">
                 <div class="canoe">
                 	<h2>Getting Back to Nature in a Canoe<h2>
                 		
                 		<button>Read More</button>
                 </div>
                 <div class="beach">
                 	<h2>A Night with Friends at the Beach<h2>
                 		<img src="">
                 		<button>Read More</button>
                 </div>
                 <div class="mountain">
                 	<h2>Taking in the View at Big Mountain<h2>
                 		<img src="">
                 		<button>Read More</button>
                 </div>
                 <div class="stars">
                 	<h2>Star-Gazing at the Night Sky<h2>
                 		<img src="">
                 		<button>Read More</button>
                 </div>
            </div><!-- shop-categories-wrapper -->
        </section>

<?php get_footer(); ?>