<?php
$padding = get_field('section_padding');
$margin = get_field('section_margin');
if ( $padding == 'top' && $margin == 'top' ): ?>
<div class="clear top-padding top-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
<div class="clear bottom-padding bottom-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
<div class="clear top-bottom-padding top-bottom-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
<div class="clear top-padding bottom-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
<div class="clear top-padding top-bottom-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
<div class="clear bottom-padding top-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
<div class="clear bottom-padding top-bottom-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'full' && $margin == 'top' ): ?>
<div class="clear full-padding top-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'full' && $margin == 'bottom' ): ?>
<div class="clear full-padding bottom-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'full' && $margin == 'both' ): ?>
<div class="clear full-padding top-bottom-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
<div class="clear top-bottom-padding top-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
<div class="clear top-bottom-padding bottom-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'bottom' ): ?>
<div class="clear bottom-padding">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'top' ): ?>
<div class="clear top-padding">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'both' ): ?>
<div class="clear top-bottom-padding">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $padding == 'full' ): ?>
<div class="clear full-padding">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $margin == 'bottom' ): ?>
<div class="clear bottom-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $margin == 'top' ): ?>
<div class="clear top-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php elseif ( $margin == 'both' ): ?>
<div class="clear top-bottom-margin">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php else : ?>
<div class="clear">
	
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>
<?php endif; ?>