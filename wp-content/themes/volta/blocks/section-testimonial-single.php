<?php
while ( have_posts() ): the_post();

$post_object = get_field('testimonial');

if( $post_object ): 

	$post = $post_object;
	setup_postdata( $post );
	$object_id = $post->ID;
	echo the_title();
	echo the_field( 'title__position', $object_id );
	echo the_field( 'company', $object_id );
	echo the_content();
	?>
	
<?php wp_reset_postdata(); 
endif; ?>

<?php endwhile;
wp_reset_postdata(); ?>