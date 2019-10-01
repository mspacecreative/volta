<div class="residents-container display-flex">
<?php 
$loop = new WP_Query( array( 'post_type' => 'residents', 'posts_per_page' => -1 ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="resident-container three_column">
			<div class="grid-inner">
				<?php if ( has_post_thumbnail() ) { ?>
				    <?php echo the_post_thumbnail(); ?>
				<?php } ?>
					<div class="resident-card-content">
						<h3><?php the_title(); ?></h3>
						<p>
							<?php
							if( has_excerpt() ) { 
								the_excerpt(); 
							} else {
								the_content();
							}
							?>
						</p>
					</div>
			</div>
		</div>
		<?php endwhile; 
	endif; wp_reset_postdata();
?>
</div>