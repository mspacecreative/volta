<?php 
$args = array(
    'post_type' => 'partners',
    'posts_per_page'=> -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'partner_category',
            'field' => 'slug',
            'terms' => 'home-page-slider',
        )
    )
);
$loop = get_posts($args); ?>
<!-- Partners -->
<section id="partners" class="extra-top-bottom-padding">
	<h3 class="align-center">THANK YOU TO OUR PARTNERS &amp; SPONSORS</h3>
	<div class="max-width-980">
		<div class="partner-slider">
			
			<?php 
			global $post;
			$post_id = $post->ID;
			
			foreach ( $loop as $post ) : setup_postdata( $post ); ?>
			<div>
				<?php
				$imagelogo = get_field('logo_image', $post_id);
				$logolink = get_field('logo_link', $post_id);
				if ( $imagelogo && $logolink ) : ?>
				<a href="<?php the_field('logo_link', $post_id); ?>" target="_blank">
					<img src="<?php the_field('logo_image', $post_id); ?>" />
				</a>
				<?php elseif ( $imagelogo ) : ?>
					<img src="<?php the_field('logo_image', $post_id); ?>" />
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
			
		</div>
	</div>
</section>
<!-- /Partners -->
<?php wp_reset_postdata(); ?>