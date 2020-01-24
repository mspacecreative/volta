<?php get_header(); ?>

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

<!-- Page wrapper -->
<div id="page-wrapper" class="blog">
	
	<?php get_template_part('includes/templates/header_image-blog'); ?>
	
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
			
			<!-- drop shadow -->
			<div class="horizontal-dropshadow"></div>
			<!-- / drop shadow -->
	
			<div class="clear container">
				<main role="main">
				<!-- section -->
				<section>
		
					<!-- post title -->
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
						
						<h1><?php echo esc_html_e('Latest Posts'); ?></h1>
					</div>
					<!-- /post title -->
		
					<div class="inner">
						<?php get_template_part('includes/loops/loop-masonry-filter'); ?>
	
						<?php get_template_part('pagination'); ?>
					</div>
		
				</section>
				<!-- /section -->
			</main>
			</div>
	
		</div>
	
</div>

<?php get_footer(); ?>
