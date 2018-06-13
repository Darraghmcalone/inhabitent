<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<section class="flex-grid">
					
					
						
							<div class="flex-grid-1">
								<h3>Contact Info</h3>
								<p>
								<i class="fa fa-envelope"></i>
								<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
							</p>
								<p>
								<i class="fa fa-phone"></i>
								<a href="75757999933">07564032301</a>
								</p>
								<p>
								 <span>
								 	<i class="fab fa-facebook-square"></i></span>
								<span>
									<i class="fab fa-twitter"></i>  
								</span>
								<span> 
									<i class="fab fa-google-plus-square"></i>
								</span>
								</p>
						</div>	

					<div class="flex-grid-2"><h3>Business Hours</h3>

						<p>
							<span class="days">Monday-Friday:	
							</span>
							9am to 5pm
						</p>
						<p>
							<span class="days">Saturday:
							</span>
							10am to 2pm
						</p>
						<p>
							<span class="days">Sunday:
							</span>
							Closed
						</p>

					</div>

					<div class="flex-grid-3">
					<img class="home-logo" src="<?php echo get_stylesheet_directory_uri()?>/images/logos/inhabitent-logo-full.svg" >
				
					
					</div>
					
					</section>
					<p class="copyright">COPYRIGHT © 2017 INHABITENT</p>

					<div class="wordpress"><a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a></div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
