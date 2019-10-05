<?php if ( get_field('layout_type') == 'one' ):	
	
	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container display-flex bottom-padding">
		
		<?php while( have_rows('variable_columns') ): the_row(); ?>
		
		<div class="column-container one_column">
			<?php the_sub_field('column_content'); ?>
		</div>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;
	
elseif ( get_field('layout_type') == 'two' ):	
	
	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container display-flex bottom-padding">
		
		<?php while( have_rows('two_column_layout') ): the_row(); ?>
		
			<?php if( have_rows('left_column') ): ?>
			<?php while( have_rows('left_column') ): the_row(); ?>
		
			<div class="column-container two_column">
				<?php
				$contenttype = get_sub_field('column_left_content_type' ); 
				
				if ( $contenttype == 'text' ):
				the_sub_field('left_column_text');
				
				elseif ( $contenttype == 'image' ):
				$image = get_sub_field('left_column_image');
				$size = 'large';
				
				if ( $image ): ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif;
				
				endif;
				?>
			</div>
			
			<?php endwhile;
			endif; ?>
			
			<?php if( have_rows('right_column') ): ?>
			<?php while( have_rows('right_column') ): the_row(); ?>
			
			<div class="column-container two_column">
				<?php
				$contenttype = get_sub_field('column_right_content_type' ); 
					
				if ( $contenttype == 'text' ):
				the_sub_field('right_column_text');
					
				elseif ( $contenttype == 'image' ):
				$image = get_sub_field('right_column_image');
				$size = 'large';
				
				if ( $image ): ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif;
				
				endif;
				?>
			</div>
				
			<?php endwhile;
			endif; ?>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

elseif ( get_field('layout_type') == 'three' ):	
	
	if( have_rows('three_column_layout') ): ?>
	
	<div class="columns-container display-flex bottom-padding">
		
		<?php while( have_rows('three_column_layout') ): the_row(); ?>
		
			<?php if( have_rows('left_column_left_column') ): ?>
			<?php while( have_rows('left_column_left_column') ): the_row(); ?>
		
			<div class="column-container three_column">
				<?php
				$contenttype = get_sub_field('column_left_content_type' ); 
				
				if ( $contenttype == 'text' ):
				the_sub_field('left_column_text');
				
				elseif ( $contenttype == 'image' ):
				$image = get_sub_field('left_column_image');
				$size = 'large';
				
				if ( $image ): ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif;
				
				endif;
				?>
			</div>
			
			<?php endwhile;
			endif; ?>
			
			<?php if( have_rows('center_column') ): ?>
			<?php while( have_rows('center_column') ): the_row(); ?>
			
			<div class="column-container three_column">
				<?php
				$contenttype = get_sub_field('column_center_content_type' ); 
					
				if ( $contenttype == 'text' ):
				the_sub_field('center_column_text');
					
				elseif ( $contenttype == 'image' ):
				$image = get_sub_field('center_column_image');
				$size = 'large';
				
				if ( $image ): ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif;
				
				endif;
				?>
			</div>
				
			<?php endwhile;
			endif; ?>
			
			<?php if( have_rows('right_column_right_column') ): ?>
			<?php while( have_rows('right_column_right_column') ): the_row(); ?>
			
			<div class="column-container three_column">
				<?php
				$contenttype = get_sub_field('column_right_content_type' ); 
					
				if ( $contenttype == 'text' ):
				the_sub_field('right_column_text');
					
				elseif ( $contenttype == 'image' ):
				$image = get_sub_field('right_column_image');
				$size = 'large';
				
				if ( $image ): ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif;
				
				endif;
				?>
			</div>
				
			<?php endwhile;
			endif; ?>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

elseif ( get_field('layout_type') == 'four' ):	
	
	if( have_rows('four_column_layout') ): ?>
	
	<div class="columns-container display-flex">
		
		<?php while( have_rows('four_column_layout') ): the_row(); ?>
		
			<?php if( have_rows('first_column_first_column') ): ?>
			<?php while( have_rows('first_column_first_column') ): the_row(); ?>
		
			<div class="column-container four_column">
				<?php
				$contenttype = get_sub_field('column_left_content_type' ); 
				
				if ( $contenttype == 'text' ):
				the_sub_field('left_column_text');
				
				elseif ( $contenttype == 'image' ):
				$image = get_sub_field('left_column_image');
				$size = 'large';
				
				if ( $image ): ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif;
				
				endif;
				?>
			</div>
			
			<?php endwhile;
			endif; ?>
			
			<?php if( have_rows('second_column_second_column') ): ?>
			<?php while( have_rows('second_column_second_column') ): the_row(); ?>
			
			<div class="column-container four_column">
				<?php
				$contenttype = get_sub_field('column_left_content_type' ); 
					
				if ( $contenttype == 'text' ):
				the_sub_field('left_column_text');
					
				elseif ( $contenttype == 'image' ):
				$image = get_sub_field('left_column_image');
				$size = 'large';
				
				if ( $image ): ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif;
				
				endif;
				?>
			</div>
				
			<?php endwhile;
			endif; ?>
			
			<?php if( have_rows('third_column_third_column') ): ?>
			<?php while( have_rows('third_column_third_column') ): the_row(); ?>
			
			<div class="column-container four_column">
				<?php
				$contenttype = get_sub_field('column_left_content_type' ); 
					
				if ( $contenttype == 'text' ):
				the_sub_field('left_column_text');
					
				elseif ( $contenttype == 'image' ):
				$image = get_sub_field('left_column_image');
				$size = 'large';
				
				if ( $image ): ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif;
				
				endif;
				?>
			</div>
				
			<?php endwhile;
			endif; ?>
			
			<?php if( have_rows('fourth_column_fourth_column') ): ?>
			<?php while( have_rows('fourth_column_fourth_column') ): the_row(); ?>
			
			<div class="column-container four_column">
				<?php
				$contenttype = get_sub_field('column_left_content_type' ); 
					
				if ( $contenttype == 'text' ):
				the_sub_field('left_column_text');
					
				elseif ( $contenttype == 'image' ):
				$image = get_sub_field('left_column_image');
				$size = 'large';
				
				if ( $image ): ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif;
				
				endif;
				?>
			</div>
				
			<?php endwhile;
			endif; ?>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

elseif ( get_field('layout_type') == 'five' ):	
	
	if( have_rows('five_column_layout') ): ?>
	
	<div class="columns-container display-flex bottom-padding">
		
		<?php while( have_rows('five_column_layout') ): the_row(); ?>
		
		<div class="column-container five_column">
			<?php the_sub_field('column_content'); ?>
		</div>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

else :

	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container display-flex bottom-padding">
		
		<?php while( have_rows('variable_columns') ): the_row(); ?>
		
		<div class="column-container">
			<?php the_sub_field('column_content'); ?>
		</div>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

endif; ?>