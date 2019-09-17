<?php get_header(); ?>

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
	
	<div class="post-content-container container white-bg clear">

		<main role="main">
			<!-- section -->
			<section>
	
				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
	
				<?php get_template_part('loop'); ?>
	
				<?php get_template_part('pagination'); ?>
	
			</section>
			<!-- /section -->
		</main>

		<?php get_sidebar(); ?>

	</div>
	
</div>

<?php get_footer(); ?>
