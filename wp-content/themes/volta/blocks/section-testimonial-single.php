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
    	if ( has_thumbnail() ) {
    		echo the_thumbnail( array(200,200) );
    	}
    	echo the_title();
    	echo the_field( 'company', $object_id );
    	echo the_field( 'title__position', $object_id );
    	echo the_content();
    	?>
    	
    <?php wp_reset_postdata(); 
    endif; ?>
    
   	<?php endwhile;
endif; wp_reset_postdata(); ?>