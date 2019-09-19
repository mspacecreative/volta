<?php get_header(); ?>

<!-- Background image -->
<div class="background">
	<div class="gradient-overlay"></div>
</div>
<!-- /Background image -->

<!-- Page wrapper -->
<div id="page-wrapper" class="blog">
	
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
	
	<!-- post thumbnail on mobile -->
	<div class="featured-image-mobile">
		<img src="<?php echo get_template_directory_uri(); ?>/img/header-mobile.jpg">
	</div>
	<!-- /post thumbnail on mobile -->
	
	<!-- Nav -->
	<nav id="nav">
		<?php html5blank_nav(); ?>
	</nav>
	<!-- /Nav -->
	
	<div class="post-content-container container white-bg clear">

		<main role="main">
			<!-- section -->
			<section>
				
				<!-- post title -->
				<div class="post-title-container">
					<h1><?php _e( 'Categorized under ', 'html5blank' ); single_cat_title(); ?></h1>
				</div>
				<!-- /post title -->
	
				<?php get_template_part('includes/loops/loop-masonry'); ?>
	
				<?php get_template_part('pagination'); ?>
	
			</section>
			<!-- /section -->
		</main>

	</div>
	
</div>

<?php get_footer(); ?>
