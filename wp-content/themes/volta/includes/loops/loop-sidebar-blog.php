<?php $args = array( 
	'posts_per_page'=> 5, 
	'post__not_in' => array( $post->ID ) 
);
$arr_posts = new WP_Query( $args ); ?>
	
	<ul class="divided related-posts hide-on-mobile">
		<?php while ( $arr_posts->have_posts() ) : $arr_posts->the_post(); ?>
		
		<div class="event-container row">
        	<?php
        	if ( has_post_thumbnail() ): ?>
        	<span class="event-thumb col-lg-3 col-md-3 col-sm-4 col-xs-4">
        		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,200) ); ?></a>
        	</span>
        	<?php else : ?>
        	<span class="event-thumb col-lg-3 col-md-3 col-sm-4 col-xs-4">
        		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/placeholders/volta-events.jpg" alt="Volta Events" /></a>
        	</span>
        	<?php endif; ?>
        	<div class="bucket-content col-lg-9 col-md-9 col-sm-8 col-xs-8">
        		<header>
        			<h4><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 7); ?></a></h4>
        			<p class="event-date"><?php the_time('d/m/Y'); ?></p>
        		</header>
        	</div>
			
        </div>
		
		<?php endwhile; ?>
		
	</ul>
	
<?php wp_reset_query(); ?>