<ul class="divided related-posts">

<?php

$related = new WP_Query(
    array(
        'category__in'   => wp_get_post_categories( $post->ID ),
        'posts_per_page' => 3,
        'post__not_in'   => array( $post->ID )
    )
);

if( $related->have_posts() ) { 
    while( $related->have_posts() ) { 
        $related->the_post(); ?>
        
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
			
			<a class="view-article" style="display: inline-block; font-size: 15px; flex-basis: 100%;" href="<?php the_permalink(); ?>"><?php esc_html_e('Read Article'); ?></a>
			
        </div>
        
    <?php }
    wp_reset_postdata();
} ?>

</ul>