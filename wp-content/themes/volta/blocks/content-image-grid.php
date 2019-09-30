<?php 
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
<?php endif; ?>