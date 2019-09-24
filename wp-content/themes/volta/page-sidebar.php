<?php
/* Template Name: Sidebar */
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
	
	<div class="post-content-container container white-bg">
		<div class="post-container clear">
			<!-- post title -->
			<div class="post-title-outer">
				<div class="post-title-container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<!-- /post title -->
			
			<main role="main">
				<!-- section -->
				<section>
								
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<div class="post-container">
							
							<?php the_content(); // Dynamic Content ?>
							
						</div>
								
					</article>
					<!-- /article -->
								
					<?php endwhile; ?>
									
					<?php else: ?>
									
					<!-- article -->
					<article>
						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
					</article>
					<!-- /article -->
				
				<?php endif; ?>
				
				</section>
				<!-- /section -->
			</main>
			<?php get_sidebar('sidebar'); ?>
			
		</div>
	</div>

	<?php get_footer(); ?>