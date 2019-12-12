<div class="residents-container display-flex flex-wrap">
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
	$loop = get_posts($args);
    if ( $loop ) :
        foreach ( $loop as $post ) : setup_postdata( $post ); ?>
		<div class="resident-container three_column">
			<div class="grid-inner">
				<?php
				$imagelogo = get_field('logo_image', $post->ID);
				$size = 'medium';
				$logolink = get_field('logo_link', $post->ID);
				$shrinklogo = get_field('square_logo', $post->ID);
				if ( $imagelogo && $logolink && $shrinklogo ) : ?>
				<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
					<span class="shrink-logo">
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					</span>
				</a>
				<?php elseif ( $imagelogo && $shrinklogo ) : ?>
				<span class="shrink-logo">
					<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
				</span>
				<?php elseif ( $imagelogo && $logolink ) : ?>
				<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
					<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
				</a>
				<?php elseif ( $imagelogo ) : ?>
					<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
				<?php endif; ?>
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
		<?php endforeach; 
	endif; wp_reset_postdata();
?>
</div>