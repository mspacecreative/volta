<?php if ( get_field('background_image_background_image') ):

	if ( get_field('background_image_overlay') == 'dark' ): ?>
	<div class="bg-img-cover dark-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		
		<?php 
		$textcolour = get_field('text_colour_text_color');
		
		if ( $textcolour = 'light' ):
		include('inc/section-content-loop-light.php');
		
		elseif ( $textcolour = 'dark' ):
		include('inc/section-content-loop.php');
		
		else :
		include('inc/section-content-loop.php');
		
		endif; ?>
		
	</div>
	
	<?php elseif ( get_field('background_image_overlay') == 'light' ): ?>
	<div class="bg-img-cover light-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		
		<?php 
		$textcolour = get_field('text_colour_text_color');
		
		if ( $textcolour = 'light' ):
		include('inc/section-content-loop-light.php');
		
		elseif ( $textcolour = 'dark' ):
		include('inc/section-content-loop.php');
		
		else :
		include('inc/section-content-loop.php');
		
		endif; ?>
		
	</div>
	
	<?php else : ?>
	<div class="bg-img-cover" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		
		<?php 
		$textcolour = get_field('text_colour_text_color');
		
		if ( $textcolour = 'light' ):
		include('inc/section-content-loop-light.php');
		
		elseif ( $textcolour = 'dark' ):
		include('inc/section-content-loop.php');
		
		else :
		include('inc/section-content-loop.php');
		
		endif; ?>
		
	</div>
	<?php endif; ?>

<?php elseif ( get_field('background_color_background_color') ): ?>
	<div class="white-bg" style="background-color: <?php the_field('background_color_background_color'); ?>;">
		
		<?php 
		$textcolour = get_field('text_colour_text_color');
		
		if ( $textcolour = 'light' ):
		include('inc/section-content-loop-light.php');
		
		elseif ( $textcolour = 'dark' ):
		include('inc/section-content-loop.php');
		
		else :
		include('inc/section-content-loop.php');
		
		endif; ?>
		
	</div>
	
<?php else : ?>
	<div class="white-bg">
		
		<?php 
		$textcolour = get_field('text_colour_text_color');
		
		if ( $textcolour = 'light' ):
		include('inc/section-content-loop-light.php');
		
		elseif ( $textcolour = 'dark' ):
		include('inc/section-content-loop.php');
		
		else :
		include('inc/section-content-loop.php');
		
		endif; ?>
		
	</div>

<?php endif; ?>