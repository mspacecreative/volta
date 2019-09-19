<?php get_header(); ?>

<!-- Background image -->
<div class="background">
	<div class="gradient-overlay"></div>
</div>
<!-- /Background image -->

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
	<?php if ( has_post_thumbnail() ): ?>
		<?php the_post_thumbnail('featured-mobile'); ?>
	<?php endif; ?>
</div>

<!-- Nav -->
<nav id="nav">
	<?php html5blank_nav(); ?>
</nav>
<!-- /Nav -->

<div class="post-content-container container white-bg clear">
<!-- post title -->
<div class="post-title-container">
	<h1><?php the_title(); ?></h1>
	<!-- post details -->
	<div class="post-meta-container">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<span class="date"><?php the_time('F j, Y'); ?></span>
		<span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<?php endwhile;
		endif;
		rewind_posts(); ?>
	</div>
	<!-- /post details -->
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
				
				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
				
				<div class="post-meta-container">
					<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
					
					<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
				</div>
				
				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
				
				<?php comments_template(); ?>
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
<?php get_sidebar('blog-sidebar'); ?>
</div>

<?php get_footer(); ?>
