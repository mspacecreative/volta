<div class="residents-container display-flex">
	<?php 
	$loop = new WP_Query( array( 
		'post_type' => 'residents',
		'posts_per_page' => -1,
		'orderby'=> 'title', 
		'order' => 'ASC'
		)
	);
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="resident-container three_column">
			<div class="grid-inner">
				<?php
				$widerlogo = get_field('logo_width', $image['ID'] );
					if ( $widerlogo ) {
						if ( has_post_thumbnail() ) {
							echo the_post_thumbnail( $image['ID'], ["class" => "wider"] );
						}
					}
					
					else : {
						if ( has_post_thumbnail() ) {
							echo the_post_thumbnail();
						}
					}
				?>
				<div class="resident-card-content">
					<h3><?php the_title(); ?></h3>
					<p><?php echo esc_html_e('Focus: '); the_field('focus'); ?></p>
					<?php
					if( has_excerpt() ) { 
						echo '<p>' . the_excerpt() . '</p>';
					} else {
						the_content();
					}
						?>
				</div>
			</div>
		</div>
		<?php endwhile; 
	endif; wp_reset_postdata();
?>
</div>