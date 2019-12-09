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
			<div>
				<?php foreach ( $loop as $post ) : setup_postdata( $post );
				$imagelogo = get_field('image_logo', $post->ID);
				$size = 'medium';
				if ( $imagelogo ) {
					echo wp_get_attachment_image( $imagelogo, $size );
				}
				endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- /Partners -->
<?php wp_reset_postdata(); ?>