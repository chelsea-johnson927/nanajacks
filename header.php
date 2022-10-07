<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nanojacks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nanojacks' ); ?></a>

	<header id="masthead" class="site-header"> 
		<div class="container-fluid"> 
			<div id="top-bar-row" class="row"> 
				<div class="col-sm-12"> 
					<div class="top-bar"><?php dynamic_sidebar('topbar'); ?></div> 
				</div> 
			</div> 

			<div id="bottom-bar-row" class="row"> 
						<div class="col-sm-12 col-lg-4"><button id="navBttn" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="lines"></span></button><div class="logo-wrap"><?php the_custom_logo(); ?></div></div> 

							<div id="nav-wrap" class="col-sm-12 col-lg-8">
								<nav id="site-navigation" class="main-navigation">
									
											<?php
											wp_nav_menu(
												array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
												)
												);
												?> 
								</nav><!-- #site-navigation -->    
							</div> 
					</div>  
			 
			<?php  
			
			$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
			
			if ( is_front_page() ){ 
				
				
				?>
						<div id="banner-row" class="row" style="background-image:url('<?php echo esc_url( get_header_image() ); ?>');">  
							<div id="banner-image" class="col-lg-6" style="background-image:url('<?php echo $featured_img_url ?>');"></div> 
								<div id="banner-content" class="col-md-4 offset-lg-5">  
								<h1 class="site-title"><?php echo get_bloginfo( 'name' ); ?></h1> 
								<p class="site-description"><?php echo  get_bloginfo( 'description' ); ?></p>

								</div>
						</div> 

			<?php }else{ ?>

				<div class="page-banner-row banner-page-image" class="row" style="background-image:url('<?php echo $featured_img_url ?>');">  
					<div class="col-sm-12 page-content"><div class="cover"><p class="page-title"><?php echo esc_html( get_the_title($post->ID) ); ?></p></div>
					</div> 
				
				</div>
			<?php } ?>
			</div>
	</header><!-- #masthead -->
