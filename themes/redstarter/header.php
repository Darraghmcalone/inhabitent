<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?>
		<div id="page" class="hfeed site"></div>
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="inhab-head">
				
					<div class="logo">
		
							<a href="<?php echo get_option("siteurl"); ?>" alt="site logo"/>
						
							

				<img class="tent" src="<?php if(is_front_page () ||is_page_template( '_about-us.php' ) ) { 
                    echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent-white.svg';


                 }else{
                     echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent.svg';} ?>">
						
						</a>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					</div>


					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					
				<!-- .site-branding -->

				


                 <section class="menu-container container-for-all 
                <?php  
                if(is_front_page() || is_page_template('_about-us.php')){

                    echo 'white-header';
                }else{
                    echo 'green-header';
                }

            ?>">
 

					<button class="menu-toggle " aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				<div class="header-search" >
					<?php get_search_form(); ?>
				</div>
				
				 
			 
				</nav><!-- #site-navigation -->

				</section>
		

			</header><!-- #masthead -->

			<div id="content" class="site-content">
