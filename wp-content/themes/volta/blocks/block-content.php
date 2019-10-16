<?php if ( get_field('background_image_background_image') ):

	if ( get_field('background_image_overlay') == 'dark' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<?php include('inc/section-content-loop.php'); ?>
	</div>
	
	<?php elseif ( get_field('background_image_overlay') == 'light' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="bg-img-cover light-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<?php include('inc/section-content-loop.php'); ?>
	</div>
	
	<?php else : ?>
	<div id="<?php the_field('block_id'); ?>" class="bg-img-cover content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<?php include('inc/section-content-loop.php'); ?>
	</div>
	<?php endif; ?>

<?php elseif ( get_field('background_color_background_color') ): ?>
	<div id="<?php the_field('block_id'); ?>" class="white-bg content-section" style="background-color: <?php the_field('background_color_background_color'); ?>;">
		<?php include('inc/section-content-loop.php'); ?>
	</div>
	
<?php else : ?>
	<div id="<?php the_field('block_id'); ?>" class="white-bg content-section">
		<?php include('inc/section-content-loop.php'); ?>
	</div>

<?php endif; ?>