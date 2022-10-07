<?php get_header();  ?>

<main id="primary" class="front-page-main"> 
		
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		
		the_post();
		the_content(); 
        
	} // end while
} // end if
?> 
</main> 

<?php get_footer(); ?> 