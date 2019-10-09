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
	if ( get_field('featured_image_alignment', 'options') == 'top' ): ?>
	<?php $url = get_field('featured_image_blog', 'options' ); ?>
	<?php echo '<div class="post-header" style="background-image: url('. $url.'); background-position: top center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment', 'options') == 'bottom' ): ?>
	<?php $url = get_field('featured_image_blog', 'options' ); ?>
	<?php echo '<div class="post-header" style="background-image: url('. $url.'); background-position: bottom center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment', 'options') == 'center' ): ?>
	<?php $url = get_field('featured_image_blog', 'options' ); ?>
	<?php echo '<div class="post-header" style="background-image: url('. $url.'); background-position: center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php else : ?>
	<div class="post-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div></div>
	<?php endif; ?>
	<!-- /post thumbnail -->
	
	<!-- post thumbnail on mobile -->
	<div class="featured-image-mobile">
		<div class="post-header-overlay"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/header-mobile.jpg">
	</div>
	<!-- /post thumbnail on mobile -->
	
	<!-- Nav -->
	<nav id="nav">
		<?php html5blank_nav(); ?>
	</nav>
	<!-- /Nav -->
	
	<div class="post-content-container white-bg clear">

		<div class="container">
			<main role="main">
				<!-- section -->
				<section>
					
					<!-- post title -->
					<div class="post-title-container">
						<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
					</div>
					
					<?php if ( get_the_author_meta('description')) : ?>
					
						<?php echo get_avatar(get_the_author_meta('user_email')); ?>
					
						<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>
					
						<?php echo wpautop( get_the_author_meta('description') ); ?>
					
					<?php endif; ?>
					<!-- /post title -->
						
					<div class="inner">
						<?php get_template_part('includes/loops/loop-blog'); ?>
					
						<?php get_template_part('pagination'); ?>
					</div>
		
				</section>
				<!-- /section -->
			</main>
		</div>

	</div>
	
</div>

<?php get_footer(); ?>
