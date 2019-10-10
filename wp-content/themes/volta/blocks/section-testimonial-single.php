<?php

$post_object = get_field('testimonial');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 
	echo the_content();
	echo the_field('commpany');
	?>
	
<?php wp_reset_postdata(); 
endif; ?>