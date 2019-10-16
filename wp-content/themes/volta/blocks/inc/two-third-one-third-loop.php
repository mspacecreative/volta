<?php if ( get_field('heading') ): ?>
<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
<?php endif; ?>

<div class="two_third_col">
	<?php the_field('two_third_column'); ?>
</div>

<?php if( have_rows('one_third_column') ): ?>
<?php while( have_rows('one_third_column') ): the_row(); ?>

	<?php if ( get_sub_field('content_type') == 'text' ): ?>
	<div class="one_third_col">
		<?php the_sub_field('text_editor'); ?>
	</div>
	
	<?php elseif ( get_sub_field('content_type') == 'image' ): ?>
	<div class="one_third_col">
		<?php 
		$image = get_sub_field('image_upload');
		$size = 'large';
		
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}
		?>
	</div>
	
	<?php elseif ( get_sub_field('content_type') == 'video' ): ?>
	<div class="one_third_col">
		<?php the_sub_field('video_upload'); ?>
	</div>
	<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>