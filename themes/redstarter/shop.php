<?php /* Template Name: Shop Template */ 
get_header(); ?>
      
<section class="shop-menu">
        
            <div class="shop-menu-wrapper">
              <h1>Shop Stuff</h1>
           <?php 
           $query_args = array( 
                          'taxonomy' => 'product-type',
                          'hide_empty' => false
                          );
                      

                 $product_types = get_terms( $query_args );
            ?>

            <?php if ( !empty( $product_types ) ) : ?>
            <ul class="shop-stuff">
            <?php foreach ( $product_types as $product_type ): ?>
              <li class="<?php "product-type-".$product_type->slug ?>">
                <p> <a href=" <?php echo get_term_link( $product_type ); ?> " class="btn"><?php echo $product_type->name; ?></a> </p> 
              </li>
            <?php endforeach; ?>
            </ul>
          <?php endif; ?>      
            </div><!-- shop-categories-wrapper -->
        </section>



<section class="shop-section">
            <div class="shop-categories-wrapper">
               <?php
                   $args = array( 
                           'post_type' => 'product', 
                           'order' => 'ASC',
                           'posts_per_page' => 16   
                       );
                   $product_posts = get_posts( $args ); // returns an array of posts
                ?>
                <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                   <div class="single-product-wrapper">
                           <div class="product-image-wrapper">
                               <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                       </div>
                       <div class="product-text-wrapper">
                           <span><?php the_title()." ............. ";?></span> 
                            <span>
                              
                             </span>
                        </div>
                    </div><!-- .single-product-wrapper-->
                <?php endforeach; wp_reset_postdata(); ?>
            </div><!-- shop-categories-wrapper -->
        </section>





<?php get_footer(); ?>