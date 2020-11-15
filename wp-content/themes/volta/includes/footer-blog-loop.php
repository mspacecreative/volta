<?php
$the_query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 3,
));
	
if ( $the_query->have_posts() ) : ?>
<ul class="divided">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<li>
		<header>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</header>
		<span class="timestamp"><?php the_time('F j, Y'); ?></span>
	</li>
	<?php endwhile; ?>
		
</ul>
<?php endif; wp_reset_query(); ?>