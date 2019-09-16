<!-- Intro section -->
<section id="intro" class="tiles container shadow">
	
	<?php if( have_rows('left_column') ): ?>
	<?php while( have_rows('left_column') ): the_row(); ?>
	
	<?php if ( get_sub_field('colour_overlay') == 'green' ): ?>
	<article style="background-image: url(<?php the_sub_field('background_image_left'); ?>);" class="light width-50 green">
		<header class="major">
			<?php the_sub_field('content_left'); ?>
		</header>
	</article>
	
	<?php elseif ( get_sub_field('colour_overlay') == 'black' ): ?>
	<article style="background-image: url(<?php the_sub_field('background_image_left'); ?>);" class="light width-50 black">
		<header class="major">
			<?php the_sub_field('content_left'); ?>
		</header>
	</article>
	
	<?php elseif ( get_sub_field('colour_overlay') == 'white' ): ?>
	<article style="background-image: url(<?php the_sub_field('background_image_left'); ?>);" class="light width-50 black white">
		<header class="major">
			<?php the_sub_field('content_left'); ?>
		</header>
	</article>
	
	<?php endif; ?>
	
	<?php endwhile;
	endif; ?>
	
	<?php if( have_rows('right_column') ): ?>
	<?php while( have_rows('right_column') ): the_row(); ?>
	
	<?php if ( get_sub_field('colour_overlay') == 'green' ): ?>
	<article style="background-image: url(<?php the_sub_field('background_image_right'); ?>);" class="light width-50 green">
		<header class="major">
			<?php the_sub_field('content_right'); ?>
		</header>
	</article>
	
	<?php elseif ( get_sub_field('colour_overlay') == 'black' ): ?>
	<article style="background-image: url(<?php the_sub_field('background_image_right'); ?>);" class="light width-50 black">
		<header class="major">
			<?php the_sub_field('content_right'); ?>
		</header>
	</article>
	
	<?php elseif ( get_sub_field('colour_overlay') == 'white' ): ?>
	<article style="background-image: url(<?php the_sub_field('background_image_right'); ?>);" class="light width-50 white">
		<header class="major">
			<?php the_sub_field('content_right'); ?>
		</header>
	</article>
	
	<?php endif; ?>
	
	<?php endwhile;
	endif; ?>
	
</section>
<!-- /Intro section -->

<style>
	#intro article.green:before {
		background-color: #00dbb6;
	}
	#intro article.black:before {
		background-color: #000;
	}
	#intro article.white:before {
		background-color: #fff;
	}
	#intro article.white, #intro article.white h3 {
		color: #000;
	}
</style>