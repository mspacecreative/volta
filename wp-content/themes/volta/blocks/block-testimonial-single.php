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
			setup_postdata( $post ); ?>
			
			<section class="banner testimonial_container light-grey-bg">
				<article class="width-800 default-padding align-center">
			
					<?php if ( has_post_thumbnail() ):
						echo get_the_post_thumbnail( $object_id, array(200,200) );
					endif; ?>
					
					<h4><?php echo esc_html( get_the_title( $object_id ) ); ?></h4>
					
					<p style="margin-bottom: 1em;">
						<span class="testimonial_position"><?php the_field( 'title__position', $object_id ); ?></span>
						
						<?php esc_html_e(' / ');
						
						if ( have_rows('company_details', $object_id ) ): 
						while ( have_rows('company_details', $object_id ) ): the_row();
						
						$companyname = get_sub_field('company', $object_id );
						$sitelink = get_sub_field('website_link', $object_id );
						
						if ( $companyname && $sitelink ) {
							echo '<span class="testimonial_company"><a href="' . $sitelink . '" target="_blank">' . $companyname . '></a></span>';
						} elseif ( $companyname ) {
								echo '<span class="testimonial_company">' . $companyname . '</span>';
						}
						endwhile;
						endif; ?>
					</p>
					
					<i class="fa fa-quote-left" style="display: block; margin: 0 0 10px;"></i>
						<span style="font-style: italic;" class="testimonial-text"><?php the_content(); ?></span>
					<i class="fa fa-quote-right" style="display: block; margin: 15px 0 0;"></i>
					
				</article>
			</section>
		
		<?php endif;
		wp_reset_postdata(); ?>
	
	<?php endwhile;
endif; wp_reset_postdata(); ?>