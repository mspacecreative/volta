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
				<?php if ( has_post_thumbnail() ) {
					if ( get_field('external_link', $post->ID) ): ?>
						<a href="<?php the_field('external_link', $post->ID); ?>" target="_blank">
							<?php echo the_post_thumbnail(); ?>
						</a>
					<?php else :
						echo the_post_thumbnail(); 
					endif;
				} ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<!-- /Partners -->
<?php endif; wp_reset_postdata(); ?>