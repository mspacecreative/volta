<!-- Banner -->
<?php if ( get_field('background_image') ): ?>
<section class="banner" style="background-image: url(<?php the_field('background_image'); ?>);">
<?php elseif ( get_field('background_color') ): ?>
<section class="banner" style="background-color: <?php the_field('background_color'); ?>;">
<?php else : ?>
<section class="banner">
<?php endif; ?>
	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		
		if ( $headingsize == 'large' ): ?>
			
			<?php if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; ?>
		
		<?php elseif ( $headingsize == 'small' ): ?>
		
			<?php if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php 
		$bodysize = get_field('paragraph_size');
		
		if ( $bodysize == 'large' ): ?>
		
			<?php if ( get_field('content') ): ?>
			<p class="large"><?php the_field('content'); ?></p>
			<?php endif; ?>
			
		<?php elseif ( $bodysize == 'small' ): ?>
		
			<?php if ( get_field('content') ): ?>
			<p><?php the_field('content'); ?></p>
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<li><a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	<?php elseif ( get_field('text_color') == 'light' ): ?>
	<header class="light max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		
		if ( $headingsize == 'large' ): ?>
			
			<?php if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; ?>
		
		<?php elseif ( $headingsize == 'small' ): ?>
		
			<?php if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php 
		$bodysize = get_field('paragraph_size');
		
		if ( $bodysize == 'large' ): ?>
		
			<?php if ( get_field('content') ): ?>
			<p class="large"><?php the_field('content'); ?></p>
			<?php endif; ?>
			
		<?php elseif ( $bodysize == 'small' ): ?>
		
			<?php if ( get_field('content') ): ?>
			<p><?php the_field('content'); ?></p>
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<li><a href="<?php the_sub_field('button_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	<?php endif; ?>
</section>
<!-- /Banner -->