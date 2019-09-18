<?php
$padding = get_field('section_padding');
$margin = get_field('section_margin');
if ( $padding == 'top' && $margin == 'top' ): ?>
<div class="clear top-padding top-margin">
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
<div class="clear bottom-padding bottom-margin">
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
<div class="clear top-bottom-padding top-bottom-margin">
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'full' ): ?>
<div class="clear full-padding">
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php else : ?>
<div class="clear">
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>
<?php endif; ?>