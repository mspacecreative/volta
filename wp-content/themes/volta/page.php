<?php
get_header(); ?>

<!-- Background image -->
<div class="background">
	<div class="gradient-overlay"></div>
</div>
<!-- /Background image -->


<!-- Check if thumbnail is hidden -->
<?php if ( get_field('hide_featured_image_in_header') ): ?>

<!-- Page wrapper -->
<div id="page-wrapper no-featured-image-in-header">
	
<?php else : ?>

<!-- Page wrapper -->
<div id="page-wrapper">
	
	<!-- post thumbnail -->
	<?php if ( get_field('featured_image_alignment') == 'top' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: top center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'bottom' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<?php echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: bottom center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'center' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php else : ?>
	<div class="post-header container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div></div>
	<?php endif; ?>
	<!-- /post thumbnail -->
	
<?php endif; ?>
<!-- /Check if thumbnail is hidden -->
	
	<!-- post thumbnail on mobile -->
	<div class="featured-image-mobile">
		<div class="post-header-overlay"></div>
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('featured-mobile'); ?>
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/header-mobile.jpg">
		<?php endif; ?>
	</div>
	<!-- /post thumbnail on mobile -->
	
	<!-- Nav -->
	<nav id="nav">
		<?php html5blank_nav(); ?>
	</nav>
	<!-- /Nav -->
	
	<div class="post-content-container container white-bg clear">
		<div class="post-container">
			<!-- post title -->
			<div class="post-title-outer">
				<div class="post-title-container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<!-- /post title -->
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

	<?php get_footer(); ?>