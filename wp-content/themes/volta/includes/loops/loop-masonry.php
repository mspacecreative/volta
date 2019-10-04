<?php if ( have_posts() ): ?>
<div id="instafeed" class="iso-grid">
	
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="grid-item <?php echo $term->slug ?>">
		<div class="grid-inner">
			
			<!-- post thumbnail -->
			<?php if ( get_field('video_embed') ): ?>
				<div class="video-container">
					<?php the_field('video_embed'); ?>
				</div>
			
			<?php else : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<div class="masonry-block-content">
				
				<!-- post details -->
				<div class="post-meta-container">
					<span class="date"><?php the_time('F j, Y'); ?></span>
					<span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				</div>
				<!-- /post details -->
				
				<!-- post title -->
				<h3><?php the_title(); ?></h3>
				<!-- /post details -->
				
				<?php html5wp_excerpt('html5wp_index'); ?>
				
			</div>
			
		</div>
	</div>
	<?php endwhile; ?>
	
</div>
<?php endif; ?>
	