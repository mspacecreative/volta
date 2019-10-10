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
		setup_postdata( $post );
		$object_id = $post->ID; 
	?>
		
		<section class="banner">
			<article class="width-800 align-center">
				<?php if ( has_post_thumbnail() ): {
					echo the_post_thumbnail( array(200,200) );
				} ?>
				<h4><?php the_title(); ?></h4>
				<p>
					<span class="testimonial-position"><?php the_field( 'title__position', $object_id ); ?></span>
					<?php esc_html_e(' / '); ?>
					<span class="testimonial-company"><?php the_field( 'company', $object_id ); ?></span>
				</p>
				<?php the_content(); ?>
			</article>
		</section>
		
	<?php wp_reset_postdata(); 
	endif;
	
	endwhile;
endif; wp_reset_postdata(); ?>