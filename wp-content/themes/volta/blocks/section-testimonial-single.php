<?php

$post_object = get_field('testimonial');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post );
	echo the_title();
	echo the_content();
	?>
	
<?php wp_reset_postdata(); 
endif; ?>