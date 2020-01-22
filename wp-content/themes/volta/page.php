<?php
get_header(); ?>

<!-- Background image -->
<?php if ( get_field('theme_background_img', 'options') ): ?>
<div class="background" style="background-image: url(<?php the_field('theme_background_img', 'options'); ?>);">
	<div class="gradient-overlay"></div>
</div>
<?php else : ?>
<div class="background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/splash/volta-splash-design-2.jpg);">
	<div class="gradient-overlay"></div>
</div>
<?php endif; ?>
<!-- /Background image -->


<!-- Check if thumbnail is hidden -->
<?php if ( get_field('hide_featured_image_in_header') ): ?>

<!-- Page wrapper -->
<div id="page-wrapper" class="no-featured-image-in-header">
	
	<div class="post-content-container white-bg clear">
		<div class="post-container container">
			
			<div class="post-title-container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<!-- /post title -->
			<?php if ( get_field('content_width') == 'boxed' ): ?>
			<div class="inner boxed">
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
			<?php elseif ( get_field('content_width') == 'full-width' ): ?>
			<div class="inner">
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
			<?php else : ?>
			<div class="inner boxed">
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
			<?php endif; ?>
		</div>
	</div>
	
	<?php get_footer(); ?>
	
<?php else : ?>

<!-- Page wrapper -->
<div id="page-wrapper">
	
	<!-- post thumbnail -->
	<?php if ( get_field('featured_image_alignment') == 'top' ):
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$supertitle = get_field('super_title');
	echo '<div class="post-header" style="background-image: url(' . $url . '); background-position: top center;"><div class="post-header-overlay"></div><div class="super-title-container"><div class="default-padding super-title"><h4>' . $supertitle . '</h4></div></div></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'bottom' ):
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$supertitle = get_field('super_title');
	echo '<div class="post-header" style="background-image: url(' . $url . '); background-position: bottom center;"><div class="post-header-overlay"></div><div class="super-title-container"><div class="default-padding super-title"><h4>' . $supertitle . '</h4></div></div></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'center' ):
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$supertitle = get_field('super_title');
	echo '<div class="post-header" style="background-image: url(' . $url . '); background-position: center;"><div class="post-header-overlay"></div><div class="super-title-container"><div class="default-padding super-title"><h4>' . $supertitle . '</h4></div></div></div>'; ?>
	<?php elseif ( has_post_thumbnail( $post->ID ) ):
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$supertitle = get_field('super_title');
	echo '<div class="post-header" style="background-image: url(' . $url . '); background-position: center;"><div class="post-header-overlay"></div><div class="super-title-container"><div class="default-padding super-title"><h4>' . $supertitle . '</h4></div></div></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'top' ) : ?>
	<div class="post-header default" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div>
		<?php if ( get_field('super_title') ) : ?>
		<div class="super-title-container">
			<div class="default-padding super-title">
				<h4><?php the_field('super_title'); ?></h4>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php elseif ( get_field('featured_image_alignment') == 'center' ) : ?>
	<div class="post-header default" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div>
		<?php if ( get_field('super_title') ) : ?>
		<div class="super-title-container">
			<div class="default-padding super-title">
				<h4><?php the_field('super_title'); ?></h4>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php elseif ( get_field('featured_image_alignment') == 'bottom' ) : ?>
	<div class="post-header default" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div>
		<?php if ( get_field('super_title') ) : ?>
		<div class="super-title-container">
			<div class="default-padding super-title">
				<h4><?php the_field('super_title'); ?></h4>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php elseif ( get_field('featured_image_alignment') == 'top' ) : ?>
	<div class="post-header default" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div>
	</div>
	<?php elseif ( get_field('featured_image_alignment') == 'center' ) : ?>
	<div class="post-header default" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div>
	</div>
	<?php elseif ( get_field('featured_image_alignment') == 'bottom' ) : ?>
	<div class="post-header default" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div>
	</div>
	<?php else : ?>
	<div class="post-header default" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div>
	</div>
	<?php endif; ?>
	<!-- /post thumbnail -->
	
	<!-- post thumbnail on mobile -->
	<div class="featured-image-mobile">
		<?php 
		$supertitle = get_field('super_title');
		if ( $supertitle ) {
			echo '<div class="default-padding super-title"><h4>' . $supertitle . '</h4></div>'; 
		} ?>
		<div class="post-header-overlay"></div>
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('featured-mobile'); ?>
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/header-mobile.jpg">
		<?php endif; ?>
	</div>
	<!-- /post thumbnail on mobile -->
	
	<div class="post-content-container white-bg clear">
		
		<!-- drop shadow -->
		<div class="horizontal-dropshadow"></div>
		<!-- / drop shadow -->
		
		<div class="post-container container">
			
			<!-- post title -->
			<div class="post-title-outer">
				
				<div class="post-title-container">
					
					<!-- shadow cover left -->
					<div class="shadow-cover-left"></div>
					<!-- / shadow cover left -->
					
					<!-- shadow cover right -->
					<div class="shadow-cover-right"></div>
					<!-- / shadow cover right -->
					
					<!-- shadow cover bottom -->
					<div class="shadow-cover-bottom"></div>
					<!-- / shadow cover bottom -->
					
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<!-- /post title -->
			<?php if ( get_field('content_width') == 'boxed' ): ?>
			<div class="inner boxed">
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
			<?php elseif ( get_field('content_width') == 'full-width' ): ?>
			<div class="inner">
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
			<?php else : ?>
			<div class="inner boxed">
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
			<?php endif; ?>
		</div>
	</div>

	<?php get_footer(); ?>

<?php endif; ?>
<!-- /Check if thumbnail is hidden -->