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
				$post_object = get_field('partner_sponsors');
				$image = get_field('logo_image', $post_object->ID);
				if ( $post_object ) {
					echo '<a href="' . the_field('logo_link', $post_object->ID) . '" target="_blank"><img src="'. $image['url', $post_object->ID] .'" alt="' . $image['alt', $post_object->ID] . '" /></a>';
				} elseif ( $image ) {
					echo '<img src="'. $image['url', $post_object->ID] .'" alt="' . $image['alt', $post_object->ID] . '" />';
				} ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<!-- /Partners -->
<?php endif; wp_reset_postdata(); ?>