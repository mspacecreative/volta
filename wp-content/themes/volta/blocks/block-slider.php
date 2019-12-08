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
				$taxonomy = $category->taxonomy;
				$term_id = $category->term_id;
				$logo = wp_get_attachment_image_src(get_field('logo_image', $taxonomy . '_' . $term_id), 'partner_category');
				$size = 'medium';
				$logolink = get_field('logo_link', $taxonomy . '_' . $term_id), 'partner_category');
				if ( $logo_image && $logolink ) {
					echo '<a href="' . $logolink . '" target="_blank">' . '<img src="' . $logo[0] . '/></a>';
				} elseif ( $logo_image ) {
					echo '<img src="' . $logo[0] . '/>';
				} ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<!-- /Partners -->
<?php endif; wp_reset_postdata(); ?>