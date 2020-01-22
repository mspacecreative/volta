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
			} else {
			echo '<img src="' . get_template_directory_uri() . '/img/portrait_placeholder.jpg">';
			} ?>
		</div>
								
		<h4><?php the_title(); ?></h4>
		
		<?php if ( get_field('position__title', $post->ID) ): ?>
		<p><?php the_field('position__title', $post->ID); ?></p>
		<?php endif; ?>
								
	</div>
	 
	<div class="team-bio-container">
		<span class="close-button mobile"></span>
		<div class="team-bio-inner">
			<span class="close-button desktop"></span>
			<?php the_content();
			
			$file = get_field('file', $post->ID);
			if ( $file ) : ?>
			    <p><a href="<?php the_field('file', $post->ID); ?>" >Download High Res Headshot</a></p>
			<?php endif; ?>
	
		</div>
	</div>
	
	<?php endwhile; ?>

</div>
<?php endif; wp_reset_query(); ?>