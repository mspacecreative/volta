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
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>
<!-- Partners -->
<section id="partners" class="extra-top-bottom-padding">
	<h3 class="align-center">THANK YOU TO OUR PARTNERS &amp; SPONSORS</h3>
	<div class="max-width-980">
		<div class="partner-slider">
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div>
				<?php
				$image = get_field('logo_image', 'partner_category_', 'home-page-slider_92');
				$logolink = get_field('logo_link', 'partner_category_', 'home-page-slider_92');
				if ( $image && $logolink ) {
					echo '<a href="' . $logolink . '" target="_blank"><img src="'. $image['url'] .'" alt="' . $image['alt'] . '" /></a>';
				} elseif ( $image ) {
					echo '<img src="'. $image['url'] .'" alt="' . $image['alt'] . '" />';
				} ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<!-- /Partners -->
<?php endif; wp_reset_postdata(); ?>