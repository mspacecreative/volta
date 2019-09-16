<?php $args = array( 
	'posts_per_page'=> 5, 
	'post__not_in' => array( $post->ID ) 
);
$arr_posts = new WP_Query( $args ); ?>
	
	<ul class="divided">
		<?php while ( $arr_posts->have_posts() ) : $arr_posts->the_post(); ?>
		
		<div class="event-container tiles">
			<?php
			if ( has_post_thumbnail() ): ?>
			<span class="event-thumb one-third">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-thumb'); ?></a>
			</span>
			<?php else : ?>
			<span class="event-thumb one-third">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/placeholders/volta-events.jpg" alt="Volta Events" /></a>
			</span>
			<?php endif; ?>
			<div class="bucket-content two-third">
				<header>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p class="event-date"><?php the_time('F j, Y'); ?></p>
				</header>
			</div>
		</div>
		
		<?php endwhile; ?>
		
	</ul>
	
<?php wp_reset_query(); ?>