<?php 
$images = get_field('image_grid');
$size = 'large';

	if( $images ): ?>
	<ul class="image-grid-container">
		
		<?php foreach( $images as $single ): ?>
		<li class="image-container">
			<?php echo wp_get_attachment_image( $single['ID'], $size ); ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;