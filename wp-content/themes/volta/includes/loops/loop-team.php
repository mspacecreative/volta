<?php 
$loop = new WP_Query( array( 
	'post_type' => 'team',
	'posts_per_page' => -1,
	)
);
if ( $loop->have_posts() ) : ?>
<div class="team-container clear">
	
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
	<div class="team-profile">
				
		<div class="profile-img-wrap">
			<div class="plus-sign">
				<i class="fa fa-plus"></i>
			</div>
			<div class="profile-overlay"></div>
			<?php if ( has_post_thumbnail() ) {
				echo the_post_thumbnail( array(400,400) );
			} ?>
		</div>
								
		<h4><?php the_title(); ?></h4>
		
		<?php if ( get_field('position__title') ): ?>
		<p><?php get_field('position__title'); ?></p>
		<?php endif; ?>
								
	</div>
	 
	<div class="team-bio-container">
		<i class="fa fa-close mobile"></i>
		<div class="team-bio-inner">
			<i class="fa fa-close"></i>
			<?php the_content(); ?>
		</div>
	</div>
	
	<?php endwhile; ?>

</div>
<?php endif; wp_reset_query(); ?>