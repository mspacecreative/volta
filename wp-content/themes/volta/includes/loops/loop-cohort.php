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
	            'terms' => 'cohort',
	        )
	    )
	);
	$loop = get_posts($args);
    if ( $loop ) :
        foreach ( $loop as $post ) : setup_postdata( $post ); ?>
		<div class="resident-container three_column">
			<div class="grid-inner">
				<div class="logo-image-wrap">
					<?php
					$imagelogo = get_field('logo_image', $post->ID);
					$size = 'medium';
					$logolink = get_field('logo_link', $post->ID);
					$shrinklogo = get_field('square_logo', $post->ID);
					$focus = get_field('focus', $post->ID);
					$alumnicompany = get_field('alumni_company', $post->ID);
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
				</div>
				<div class="resident-card-content">
					<h3><?php the_title(); ?></h3>
					<?php if ( $focus ): ?>
					<p class="focus-description"><span><?php echo esc_html_e('Focus: '); ?></span><?php the_field('focus', $post->ID); ?></p>
					<?php endif; ?>
					<?php
					if( has_excerpt() ) { 
						echo '<p>' . the_excerpt() . '</p>';
					} else {
						the_content();
					}
					
					if ( $alumnicompany ) {
						echo '<div class="alumni-company-callout">' . the_field('alumni_company') . '</div>';
					}
					?>
				</div>
			</div>
		</div>
		<?php endforeach; 
	endif; wp_reset_postdata();
?>
</div>