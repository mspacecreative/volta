<?php 
$args = array(
    'post_type' => 'team',
    'posts_per_page'=> -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'member_type',
            'field' => 'slug',
            'terms' => 'board-director',
        )
    )
);
$loop = new WP_Query( $args );
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
		
		<?php
		$positiontitle = get_field('position__title', $post->ID);
		$altpositiontitle = get_field('alternate_position__title', $post->ID);
		
		if ( $altpositiontitle ) {
			echo '<p>' . $altpositiontitle . '</p>';
		}
		elseif ( $positiontitle ) {
			echo '<p>' . $positiontitle . '</p>';
		} ?>
								
	</div>
	 
	<div class="team-bio-container">
		<span class="close-button mobile"></span>
		<div class="team-bio-inner">
			<span class="close-button desktop"></span>
			<?php the_content();
			
			$file = get_field('file', $post->ID);
			if ( $file ) : ?>
			    <p><a class="button light" style="margin-top: 15px;" href="<?php the_field('file', $post->ID); ?>" download>Download high res head shot</a></p>
			<?php endif; ?>
	
		</div>
	</div>
	
	<?php endwhile; ?>

</div>
<?php endif; wp_reset_query(); ?>