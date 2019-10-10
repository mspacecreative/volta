<?php 
$loop = new WP_Query( array( 
	'post_type' => 'testimonials',
	'posts_per_page' => 1
	)
);
if ( $loop->have_posts() ) :
    while ( $loop->have_posts() ) : $loop->the_post();
    
    $post_object = get_field('testimonial');
    
    if( $post_object ): 
    
    	$post = $post_object;
    	setup_postdata( $post );
    	$object_id = $post_object->ID;
    	echo the_title();
    	echo the_content();
    	echo the_field( 'company', $object_id );
    	?>
    	
    <?php wp_reset_postdata(); 
    endif; ?>
    
   	<?php endwhile;
endif; wp_reset_postdata(); ?>