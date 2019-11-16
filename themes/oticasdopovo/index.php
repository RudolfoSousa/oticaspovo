<?php get_header(); ?>
	
	<?php get_template_part('includes/navbar'); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  	<!-- contents of the loop -->

	<?php endwhile; endif; ?>

<?php get_footer(); ?>