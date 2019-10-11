<?php
$loop = new WP_Query( array( 
	'post_type' => 'testimonials',
	'posts_per_page' => 1,
	)
);
if ( $loop->have_posts() ) :
    while ( $loop->have_posts() ) : $loop->the_post();

		$post_object = get_field('testimonial');
	
		if( $post_object ): 
		
			$post = $post_object;
			$object_id = $post->ID;
			setup_postdata( $post ); 
			
			if ( has_post_thumbnail() ):
				echo the_post_thumbnail( array(200,200) );
			endif; ?>
			
			<h4><?php the_title(); ?></h4>
			
			<p>
				<span class="testimonial_position"><?php the_field( 'title__position', $object_id ); ?></span>
				<?php esc_html_e(' / '); ?>
				<span class="testimonial_company"><?php the_field( 'company', $object_id ); ?></span>
			</p>
			
			<?php the_content();
		
		endif;
		wp_reset_postdata(); ?>
	
	<?php endwhile;
endif; wp_reset_postdata(); ?>