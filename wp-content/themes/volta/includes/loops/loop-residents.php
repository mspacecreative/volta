<div class="residents-container display-flex">
	<?php 
	$args = array(
	    'post_type' => 'companies',
	    'posts_per_page'=> -1,
	    'orderby' => 'title',
	    'order' => 'ASC',
	    'tax_query' => array(
	        array(
	            'taxonomy' => 'company_type',
	            'field' => 'slug',
	            'terms' => 'current-resident',
	        )
	    )
	);
	$loop = new WP_Query( $args );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="resident-container three_column">
			<div class="grid-inner">
				<?php
				if ( get_field('logo_width') ): ?>
					<span class="wider">
						<?php 
						if ( has_post_thumbnail() ) {
							echo the_post_thumbnail();
						}
						?>
					</span>
					
				<?php else :
					if ( has_post_thumbnail() ) {
						echo the_post_thumbnail();
					}
				endif; ?>
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