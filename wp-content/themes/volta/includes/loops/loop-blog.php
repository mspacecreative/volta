<?php while (have_posts()) : the_post(); ?>

	<?php if ( $post->post_type == 'page' ) { ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'clear', 'display-flex' )); ?>>
		
		<!-- post thumbnail -->
		<div class="one-third">
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
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
	
		<!-- post details -->
		<p class="event-date">
			<span class="date"><?php the_time('F j, Y'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		</p>
		<!-- /post details -->
	
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
	
		<?php edit_post_link(); ?>
		</div>
	
	</article>
	<!-- /article -->
	
	<?php } ?>
	
<?php endwhile; rewind_posts(); ?>

<?php while (have_posts()) : the_post(); ?>

	<?php if ( $post->post_type == 'post' ) { ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'clear', 'display-flex' )); ?>>
		
		<!-- post thumbnail -->
		<div class="one-third">
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
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
	
		<!-- post details -->
		<p class="event-date">
			<span class="date"><?php the_time('F j, Y'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		</p>
		<!-- /post details -->
	
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
	
		<?php edit_post_link(); ?>
		</div>
	
	</article>
	<!-- /article -->
	
	<?php } ?>
	
<?php endwhile; ?>
