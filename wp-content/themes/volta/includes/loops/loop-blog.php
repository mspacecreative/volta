<?php $loop = new WP_Query( array( 
	'post_type' => 'page',
	'posts_per_page' => -1,
	'orderby'=> 'title', 
	'order' => 'ASC'
	)
);

if ( $loop->have_posts() ) : ?>
    
<h1>Pages</h1>
    
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'clear', 'display-flex' )); ?>>
		
		<!-- post thumbnail -->
		<div class="one-third">
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(200,200)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		</div>
		<!-- /post thumbnail -->
	
		<!-- post title -->
		<div class="two-third">
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->
	
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
	
		<?php edit_post_link(); ?>
		</div>
	
	</article>
	<!-- /article -->
	
<?php endwhile
endif; rewind_posts(); ?>

<?php $loop = new WP_Query( array( 
	'post_type' => 'post',
	'posts_per_page' => -1,
	'order' => 'ASC'
	)
);

if ( $loop->have_posts() ) : ?>

<h1>Blog Posts</h1>

<div id="instafeed" class="iso-grid">
	
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

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
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<!-- /post details -->
				
				<?php html5wp_excerpt('html5wp_index'); ?>
				
			</div>
			
		</div>
	</div>
	
<?php endwhile; ?>

</div>
<?php endif; ?>
