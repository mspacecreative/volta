<?php 
$imagerowcount = get_field('image_row_count');

if ( $imagerowcount == 'one' ):

$images = get_field('image_grid');
$size = 'large';

	if( $images ): ?>
	<ul class="image-grid-container">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container">
			<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

elseif ( $imagerowcount == 'two' ):

$images = get_field('image_grid');
$size = 'medium';

	if( $images ): ?>
	<ul class="image-grid-container">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container two-up">
			<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

elseif ( $imagerowcount == 'three' ):

$images = get_field('image_grid');
$size = 'medium';

	if( $images ): ?>
	<ul class="image-grid-container">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container three-up">
			<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

elseif ( $imagerowcount == 'four' ):

$images = get_field('image_grid');
$size = 'medium';

	if( $images ): ?>
	<ul class="image-grid-container">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container four-up">
			<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

elseif ( $imagerowcount == 'five' ):

$images = get_field('image_grid');
$size = 'medium';

	if( $images ): ?>
	<ul class="image-grid-container">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container five-up">
			<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

else :

$images = get_field('image_grid');
$size = 'medium';

	if( $images ): ?>
	<ul class="image-grid-container">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container">
			<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

endif; ?>