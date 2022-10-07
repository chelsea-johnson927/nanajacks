<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nanojacks
 */

?>

	<footer id="colophon" class="site-footer"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-sm-12"> 
				<div class="footer-widget-area">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div><!-- #secondary --> 
				</div>
		</div>  
	</div>  
	<div class="site-info"><p id="theme-info">Nanajacks theme <span class="sep"> | </span> created and developed by synthcube developement team </p></div><!-- .site-info --> 
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
