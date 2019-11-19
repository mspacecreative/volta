<!-- Banner -->
<?php
$imageoverlay = get_field('cta_background_image_overlay');
$backgroundimage = get_field('background_image');
$backgroundcolour = get_field('background_color');

if ( $imageoverlay == 'dark' && $backgroundimage ): ?>
<section class="banner dark-overlay" style="background-image: url(<?php the_field('background_image'); ?>);">

	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
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
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	<?php endif; ?>
	
</section>

<?php elseif ( $imageoverlay == 'light' && $backgroundimage ): ?>
<section class="banner light-overlay" style="background-image: url(<?php the_field('background_image'); ?>);">

	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
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
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	<?php endif; ?>
	
</section>

<?php elseif ( $backgroundimage ): ?>
<section class="banner" style="background-image: url(<?php the_field('background_image'); ?>);">

	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
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
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	<?php endif; ?>
	
</section>

<?php elseif ( $backgroundcolour ): ?>
<section class="banner" style="background-color: <?php the_field('background_color'); ?>;">

	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
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
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	<?php endif; ?>
	
</section>

<?php else : ?>
<section class="banner">
	
	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
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
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif; ?>
			
		<?php elseif ( $bodysize == 'small' ): ?>
		
			<?php if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php
		$headingsize = get_field('heading_size');
		$bodysize = get_field('paragraph_size');
		
		if ( $headingsize == 'large' && $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif;
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'large' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'large' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		elseif ( $headingsize == 'small' && $bodysize == 'small' ):
			
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $headingsize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h1><?php the_field('heading'); ?></h1>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
			
		elseif ( $bodysize == 'large' ):
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<div class="large"><?php the_field('content'); ?></div>
			<?php endif;
			
		else :
		
			if ( get_field('heading') ): ?>
			<h2><?php the_field('heading'); ?></h2>
			<?php endif; 
			
			if ( get_field('content') ): ?>
			<?php the_field('content'); ?>
			<?php endif;
		
		endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<?php while( have_rows('cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('button_link') ): ?>
		<footer>
			
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php elseif ( get_sub_field('external_link') ): ?>
				<li>
					<a href="<?php the_sub_field('external_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endif; ?>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</header>
	<?php endif; ?>
	
</section>
<?php endif; ?>
<!-- /Banner -->