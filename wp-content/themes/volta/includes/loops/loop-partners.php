<?php 
$loop = new WP_Query( array( 
	'post_type' => 'partners',
	'posts_per_page' => -1,
	'orderby'=> 'title', 
	'order' => 'ASC'
	)
);
if ( $loop->have_posts() ) :
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
    <div class="partners-table">
		<div class="partner-logo-cell">
			<?php if ( has_post_thumbnail() ) {
				echo the_post_thumbnail();
			} ?>
		</div>
		<div class="partner-blurb-cell">
			<?php the_content(); ?>
		</div>
	</div>
    
    <?php endwhile;
endif; wp_reset_query(); ?>