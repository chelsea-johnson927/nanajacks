<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nanojacks
 */

get_header();
?>

	<main id="primary" class="page-main">  
		<div class="container"> 
			<div class="row"> 
				<div class="col-sm-12">
					<?php  

					if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						the_content(); 
			
						} // end while
						} // end if
					?> 
			</div>
			</div>
		</div>
	</main><!-- #main -->

<?php

get_footer();
