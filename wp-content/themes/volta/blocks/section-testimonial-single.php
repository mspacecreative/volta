<?php

$post_object = get_field('testimonial');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>

	<section class="banner">
		<?php the_title($post->ID); ?>
		<?php the_field('title__position'); ?>
		<?php the_field('company'); ?>
	</section>
	
<?php wp_reset_postdata(); 
endif; ?>