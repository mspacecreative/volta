<?php 
$args = array( 
	'post_type' => 'team',
	'posts_per_page' => -1,
	'meta_key' => 'position__title'
);

$the_query = new WP_Query( $args );
if( $the_query->have_posts() ): ?>
<div class="team-container clear">
	
	<?php while( $the_query->have_posts() ) : $the_query->the_post();
	
	$position = get_field('position__title', $post->ID); ?>
	
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
		
		<?php if ( $position ): ?>
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