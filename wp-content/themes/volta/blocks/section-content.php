<?php 
$textcolour = get_field('text_colour_text_color');

if ( $textcolour = 'light' ):

	if ( get_field('background_image_background_image') ):
	$textcolour = get_field('text_colour_text_color');
	
		if ( get_field('background_image_overlay') == 'dark' ): ?>
		<div class="bg-img-cover dark-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
		
		<?php elseif ( get_field('background_image_overlay') == 'light' ): ?>
		<div class="bg-img-cover light-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
		
		<?php else : ?>
		<div class="bg-img-cover" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
		<?php endif; ?>
	
	<?php elseif ( get_field('background_color_background_color') ): ?>
		<div class="white-bg" style="background-color: <?php the_field('background_color_background_color'); ?>;">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
		
	<?php else : ?>
		<div class="white-bg">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
	
	<?php endif;
	
elseif ( $textcolour = 'dark' ):

	if ( get_field('background_image_background_image') ):
	$textcolour = get_field('text_colour_text_color');
	
		if ( get_field('background_image_overlay') == 'dark' ): ?>
		<div class="bg-img-cover dark-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
			
			<?php include('inc/section-content-loop.php'); ?>
			
		</div>
		
		<?php elseif ( get_field('background_image_overlay') == 'light' ): ?>
		<div class="bg-img-cover light-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
			
			<?php include('inc/section-content-loop.php'); ?>
			
		</div>
		
		<?php else : ?>
		<div class="bg-img-cover" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
			
			<?php include('inc/section-content-loop.php'); ?>
			
		</div>
		<?php endif; ?>
	
	<?php elseif ( get_field('background_color_background_color') ): ?>
		<div class="white-bg" style="background-color: <?php the_field('background_color_background_color'); ?>;">
			
			<?php include('inc/section-content-loop.php'); ?>
			
		</div>
		
	<?php else : ?>
		<div class="white-bg">
			
			<?php include('inc/section-content-loop.php'); ?>
			
		</div>
	
	<?php endif;
	
else :

	if ( get_field('background_image_background_image') ):
	$textcolour = get_field('text_colour_text_color');
	
		if ( get_field('background_image_overlay') == 'dark' ): ?>
		<div class="bg-img-cover dark-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
		
		<?php elseif ( get_field('background_image_overlay') == 'light' ): ?>
		<div class="bg-img-cover light-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
		
		<?php else : ?>
		<div class="bg-img-cover" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
		<?php endif; ?>
	
	<?php elseif ( get_field('background_color_background_color') ): ?>
		<div class="white-bg" style="background-color: <?php the_field('background_color_background_color'); ?>;">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
		
	<?php else : ?>
		<div class="white-bg">
			
			<?php include('inc/section-content-loop-light.php'); ?>
			
		</div>
	
	<?php endif;
	
endif; ?>
