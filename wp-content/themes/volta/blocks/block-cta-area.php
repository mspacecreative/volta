<!-- Banner -->
<?php
$imageoverlay = get_field('cta_background_image_overlay');
$backgroundimage = get_field('background_image');
$backgroundcolour = get_field('background_color');

if ( $imageoverlay == 'dark' && $backgroundimage ): ?>
<section class="banner dark-overlay" style="background-image: url(<?php the_field('background_image'); ?>);">

	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
		
	</header>
	
	<?php elseif ( get_field('text_color') == 'light' ): ?>
	<header class="light max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-light.php'); ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
		
	</header>
	<?php endif; ?>
	
</section>

<?php elseif ( $imageoverlay == 'light' && $backgroundimage ): ?>
<section class="banner light-overlay" style="background-image: url(<?php the_field('background_image'); ?>);">

	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
		
	</header>
	
	<?php elseif ( get_field('text_color') == 'light' ): ?>
	<header class="light max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-light.php'); ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
		
	</header>
	<?php endif; ?>
	
</section>

<?php elseif ( $backgroundimage ): ?>
<section class="banner" style="background-image: url(<?php the_field('background_image'); ?>);">

	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
		
	</header>
	
	<?php elseif ( get_field('text_color') == 'light' ): ?>
	<header class="light max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-light.php'); ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
		
	</header>
	<?php endif; ?>
	
</section>

<?php elseif ( $backgroundcolour ): ?>
<section class="banner" style="background-color: <?php the_field('background_color'); ?>;">

	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
		
	</header>
	
	<?php elseif ( get_field('text_color') == 'light' ): ?>
	<header class="light max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-light.php'); ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-light.php'); ?>
		
	</header>
	<?php endif; ?>
	
</section>

<?php else : ?>
<section class="banner">
	
	<?php if ( get_field('text_color') == 'dark' ): ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
		
	</header>
	
	<?php elseif ( get_field('text_color') == 'light' ): ?>
	<header class="light max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-light.php'); ?>
		
	</header>
	
	<?php else : ?>
	<header class="max-width-800">
		
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
		
	</header>
	<?php endif; ?>
	
</section>
<?php endif; ?>
<!-- /Banner -->