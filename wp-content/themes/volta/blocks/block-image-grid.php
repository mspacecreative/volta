<?php 
$imagerowcount = get_field('image_row_count');
if ( $imagerowcount == 'one' ):

$images = get_field('image_grid');
$size = 'large';

	if ( $images ): ?>
	<ul class="image-grid-container display-flex">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container">
			<?php if ( get_field( 'external_link', $image['ID'] ) ): ?>
			<a href="<?php the_field( 'external_link', $image['ID'] ); ?>" target="_blank">
				<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			</a>
			<?php else : ?>
			<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
			<?php if ( $image['caption'] ): ?>
			<p><?php echo $image['caption'] ?></p>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

elseif ( $imagerowcount == 'two' ):

$images = get_field('image_grid');
$size = 'medium';

	if ( $images ): ?>
	<ul class="image-grid-container display-flex">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container">
			<?php if ( get_field( 'external_link', $image['ID'] ) ): ?>
			<a href="<?php the_field( 'external_link', $image['ID'] ); ?>" target="_blank">
				<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			</a>
			<?php else : ?>
			<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
			<?php if ( $image['caption'] ): ?>
			<p><?php echo $image['caption'] ?></p>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

elseif ( $imagerowcount == 'three' ):

$images = get_field('image_grid');
$size = 'medium';

	if ( $images ): ?>
	<ul class="image-grid-container display-flex">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container">
			<?php if ( get_field( 'external_link', $image['ID'] ) ): ?>
			<a href="<?php the_field( 'external_link', $image['ID'] ); ?>" target="_blank">
				<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			</a>
			<?php else : ?>
			<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
			<?php if ( $image['caption'] ): ?>
			<p><?php echo $image['caption'] ?></p>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

elseif ( $imagerowcount == 'four' ):

$images = get_field('image_grid');
$size = 'medium';

	if ( $images ): ?>
	<ul class="image-grid-container display-flex">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container">
			<?php if ( get_field( 'external_link', $image['ID'] ) ): ?>
			<a href="<?php the_field( 'external_link', $image['ID'] ); ?>" target="_blank">
				<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			</a>
			<?php else : ?>
			<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
			<?php if ( $image['caption'] ): ?>
			<p><?php echo $image['caption'] ?></p>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

elseif ( $imagerowcount == 'five' ):

$images = get_field('image_grid');
$size = 'medium';

	if ( $images ): ?>
	<ul class="image-grid-container display-flex">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container">
			<?php if ( get_field( 'external_link', $image['ID'] ) ): ?>
			<a href="<?php the_field( 'external_link', $image['ID'] ); ?>" target="_blank">
				<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			</a>
			<?php else : ?>
			<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
			<?php if ( $image['caption'] ): ?>
			<p><?php echo $image['caption'] ?></p>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

else :

$images = get_field('image_grid');
$size = 'medium';

	if ( $images ): ?>
	<ul class="image-grid-container display-flex">
		
		<?php foreach( $images as $image ): ?>
		<li class="image-container">
			<?php if ( get_field( 'external_link', $image['ID'] ) ): ?>
			<a href="<?php the_field( 'external_link', $image['ID'] ); ?>" target="_blank">
				<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			</a>
			<?php else : ?>
			<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
			<?php if ( $image['caption'] ): ?>
			<p><?php echo $image['caption'] ?></p>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php endif;

endif; ?>