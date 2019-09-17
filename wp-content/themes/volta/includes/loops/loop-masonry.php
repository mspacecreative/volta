<?php if ( have_posts() ): ?>
<div id="instafeed" class="iso-grid">
	
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="grid-item <?php echo $term->slug ?>">
		<div class="grid-inner">
			
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<!-- post details -->
			<div class="post-meta-container">
				<span class="date"><?php the_time('F j, Y'); ?></span>
				<span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			</div>
			<!-- /post details -->
			
			<div class="masonry-block-content">
				<!-- post title -->
				<h3><?php the_title(); ?></h3>
				<!-- /post details -->
				
				<p><?php html5wp_excerpt('html5wp_index'); ?></p>
			</div>
			
		</div>
	</div>
	<?php endwhile; ?>
	
</div>
<?php endif; ?>
	