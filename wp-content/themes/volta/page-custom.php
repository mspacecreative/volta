<?php
/* Template Name: Custom Layout */
get_header(); ?>

<!-- Background image -->
<div class="background">
	<div class="gradient-overlay"></div>
</div>
<!-- /Background image -->

<!-- Page wrapper -->
<div id="page-wrapper">
	
	<!-- post thumbnail -->
	<?php
	if ( get_field('featured_image_alignment') == 'top' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: top center;"></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'bottom' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<?php echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: bottom center;"></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'center' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: center;"></div>'; ?>
	<?php else : ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: center;"></div>';
	endif; ?>
	<!-- /post thumbnail -->
	
	<!-- Nav -->
	<nav id="nav">
		<?php html5blank_nav(); ?>
	</nav>
	<!-- /Nav -->
	
	<div class="post-content-container container white-bg clear">
		<div class="post-container">
			<!-- post title -->
			<div class="post-title-container">
				<h1><?php the_title(); ?></h1>
			</div>
			<!-- /post title -->
			<div class="inner-padding">
				<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						//
						the_content();
						//
					} // end while
				} // end if
				?>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>