<?php if ( get_field('section_padding') == 'top' ): ?>
<div class="clear top-padding">
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		
		<?php elseif ( get_sub_field('content_type') == 'video' ): ?>
		<div class="one_third_col">
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>
<?php elseif ( get_field('section_padding') == 'bottom' ): ?>
<div class="clear bottom-padding">
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
			<?php the_sub_field('image_upload'); ?>
		</div>
		
		<?php elseif ( get_sub_field('content_type') == 'video' ): ?>
		<div class="one_third_col">
			<?php the_sub_field('image_upload'); ?>
		</div>
		<?php endif; ?>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>
<?php elseif ( get_field('section_padding') == 'both' ): ?>
<div class="clear top-bottom-padding">
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
			<?php the_sub_field('image_upload'); ?>
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
			<?php the_sub_field('image_upload'); ?>
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