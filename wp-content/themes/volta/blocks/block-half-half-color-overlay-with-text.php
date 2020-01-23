<?php $hideblock = get_field('hide_block_50_hide_block'); ?>

<!-- Intro section -->
<section class="intro tiles shadow">
	
	<?php if( have_rows('left_column') ): ?>
	<?php while( have_rows('left_column') ): the_row(); ?>
	
	<?php if ( get_sub_field('colour_overlay') == 'green' ): ?>
	
	<?php if ( $hideblock ) : ?>
	
	<article style="display: none; background-image: url(<?php the_sub_field('background_image_left'); ?>);" class="light width-50 green">
		<header class="major">
			<?php the_sub_field('content_left'); ?>
		</header>
	</article>
	
	<?php else : ?>
	<article style="background-image: url(<?php the_sub_field('background_image_left'); ?>);" class="light width-50 green">
		<header class="major">
			<?php the_sub_field('content_left'); ?>
		</header>
	</article>
	
	<?php endif; ?>
	
	<?php elseif ( get_sub_field('colour_overlay') == 'black' ): ?>
	
	<?php if ( $hideblock ) : ?>
	
	<article style="display: none; background-image: url(<?php the_sub_field('background_image_left'); ?>);" class="light width-50 black">
		<header class="major">
			<?php the_sub_field('content_left'); ?>
		</header>
	</article>
	
	<?php else : ?>
	<article style="background-image: url(<?php the_sub_field('background_image_left'); ?>);" class="light width-50 black">
		<header class="major">
			<?php the_sub_field('content_left'); ?>
		</header>
	</article>
	
	<?php endif; ?>
	
	<?php elseif ( get_sub_field('colour_overlay') == 'white' ): ?>
	
	<?php if ( $hideblock ) : ?>
	
	<article style="display: none; background-image: url(<?php the_sub_field('background_image_left'); ?>);" class="light width-50 black white">
		<header class="major">
			<?php the_sub_field('content_left'); ?>
		</header>
	</article>
	
	<?php else : ?>
	<article style="background-image: url(<?php the_sub_field('background_image_left'); ?>);" class="light width-50 black white">
		<header class="major">
			<?php the_sub_field('content_left'); ?>
		</header>
	</article>
	
	<?php endif; ?>
	
	<?php endif; ?>
	
	<?php endwhile;
	endif; ?>
	
	<?php if( have_rows('right_column') ): ?>
	<?php while( have_rows('right_column') ): the_row(); ?>
	
	<?php if ( get_sub_field('colour_overlay') == 'green' ): ?>
	
	<?php if ( $hideblock ) : ?>
	
	<article style="display: none; background-image: url(<?php the_sub_field('background_image_right'); ?>);" class="light width-50 green">
		<header class="major">
			<?php the_sub_field('content_right'); ?>
		</header>
	</article>
	
	<?php else : ?>
	<article style="background-image: url(<?php the_sub_field('background_image_right'); ?>);" class="light width-50 green">
		<header class="major">
			<?php the_sub_field('content_right'); ?>
		</header>
	</article>
	
	<?php endif; ?>
	
	<?php elseif ( get_sub_field('colour_overlay') == 'black' ): ?>
	
	<?php if ( $hideblock ) : ?>
	
	<article style="display: none; background-image: url(<?php the_sub_field('background_image_right'); ?>);" class="light width-50 black">
		<header class="major">
			<?php the_sub_field('content_right'); ?>
		</header>
	</article>
	
	<?php else : ?>
	<article style="background-image: url(<?php the_sub_field('background_image_right'); ?>);" class="light width-50 black">
		<header class="major">
			<?php the_sub_field('content_right'); ?>
		</header>
	</article>
	
	<?php endif; ?>
	
	<?php elseif ( get_sub_field('colour_overlay') == 'white' ): ?>
	
	<?php if ( $hideblock ) : ?>
	
	<article style="display: none; background-image: url(<?php the_sub_field('background_image_right'); ?>);" class="light width-50 white">
		<header class="major">
			<?php the_sub_field('content_right'); ?>
		</header>
	</article>
	
	<?php else : ?>
	<article style="background-image: url(<?php the_sub_field('background_image_right'); ?>);" class="light width-50 white">
		<header class="major">
			<?php the_sub_field('content_right'); ?>
		</header>
	</article>
	
	<?php endif; ?>
	
	<?php endif; ?>
	
	<?php endwhile;
	endif; ?>
	
</section>
<!-- /Intro section -->

<style>
	.intro article.green:before {
		background-color: #00dbb6;
	}
	.intro article.black:before {
		background-color: #000;
	}
	.intro article.white:before {
		background-color: #fff;
	}
	.intro article.white, #intro article.white h3 {
		color: #000;
	}
</style>