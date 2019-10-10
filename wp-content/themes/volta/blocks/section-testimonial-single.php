<?php

$post_object = get_field('testimonial');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>

	<section class="banner">
		<?php if ( has_thumbnail() ) {
			echo the_thumbnail(array(200,200));
		} ?>
		<?php the_title(); ?>
		<?php the_field('title__position'); ?>
		<?php the_field('company'); ?>
	</section>
	
<?php wp_reset_postdata(); 
endif; ?>