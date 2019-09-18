<!-- Banner -->
<?php if ( get_field('background_image') ): ?>
<section id="banner" class="container" style="background-image: url(<?php the_field('background_image'); ?>);">
<?php elseif ( get_field('background_color') ): ?>
<section id="banner" class="container" style="background-color: <?php the_field('background_color'); ?>;">
<?php else : ?>
<section id="banner" class="container">
<?php endif; ?>
	<?php if ( get_field('text_color') == 'dark' ): ?>
	<?php if ( get_field('heading_size') == 'large' ): ?>
	<?php if ( get_field('paragraph_size') == 'large' ): ?>
	<header class="max-width-800">
		
		<?php if ( get_field('heading') ): ?>
		<h1><?php the_field('heading'); ?></h1>
		<?php endif; ?>
		
		<?php if ( get_field('content') ): ?>
		<p class="large"><?php the_field('content'); ?></p>
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
	<?php elseif ( get_field('heading_size') == 'small' ): ?>
	<?php elseif ( get_field('paragraph_size') == 'small' ): ?>
	<header class="light max-width-800">
		
		<?php if ( get_field('heading') ): ?>
		<h2><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<?php if ( get_field('content') ): ?>
		<p><?php the_field('content'); ?></p>
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
	
	<?php elseif ( get_field('heading_size') == 'large' ): ?>
	<?php elseif ( get_field('paragraph_size') == 'small' ): ?>
	<header class="max-width-800">
		
		<?php if ( get_field('heading') ): ?>
		<h1><?php the_field('heading'); ?></h1>
		<?php endif; ?>
		
		<?php if ( get_field('content') ): ?>
		<p><?php the_field('content'); ?></p>
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
	
	<?php elseif ( get_field('heading_size') == 'small' ): ?>
	<?php elseif ( get_field('paragraph_size') == 'large' ): ?>
	<header class="max-width-800">
		
		<?php if ( get_field('heading') ): ?>
		<h2><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<?php if ( get_field('content') ): ?>
		<p class="large"><?php the_field('content'); ?></p>
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
	<?php endif; ?>
	<?php endif; ?>
</section>
<!-- /Banner -->