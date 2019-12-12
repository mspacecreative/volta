<?php
$layouttype = get_field('layout_type');
$verticalalignment = get_field('vertical_alignment');
$bgcolour = get_field('column_background_colour');

if ( $layouttype == 'one' && $verticalalignment == 'top' ):	
	
	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="extra-top-bottom-padding display-flex flex-wrap top-bottom-margin align_items_top">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('variable_columns') ): the_row(); ?>
				
				<div class="column-container one_column">
					<?php the_sub_field('column_content'); ?>
				</div>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'one' && $verticalalignment == 'center' && $bgcolour ):

	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="extra-top-bottom-padding display-flex flex-wrap top-bottom-margin top-margin">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('variable_columns') ): the_row(); ?>
				
				<div class="column-container one_column">
					<?php the_sub_field('column_content'); ?>
				</div>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'one' && $verticalalignment == 'center' ):

	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="top-bottom-padding display-flex flex-wrap top-bottom-margin">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('variable_columns') ): the_row(); ?>
				
				<div class="column-container one_column">
					<?php the_sub_field('column_content'); ?>
				</div>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'one' && $verticalalignment == 'bottom' ):

	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="extra-top-bottom-padding display-flex flex-wrap top-bottom-padding top-bottom-margin align_items_bottom">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('variable_columns') ): the_row(); ?>
				
				<div class="column-container one_column">
					<?php the_sub_field('column_content'); ?>
				</div>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'top' && $bgcolour ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container" style="background-color: <?php the_field('column_background_colour'); ?>;">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex extra-top-bottom-padding top-margin align_items_top">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'top' ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex top-bottom-padding top-bottom-margin align_items_top">
		
			<?php if ( get_field('heading') ): ?>
				<h2 class="width-100"><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'center' && $bgcolour ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container" style="background-color: <?php the_field('column_background_colour'); ?>;">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex extra-top-bottom-padding top-margin">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'center' ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex top-bottom-padding top-bottom-margin">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'bottom' && $bgcolour ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container" style="background-color: <?php the_field('column_background_colour'); ?>;">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex extra-top-bottom-padding top-margin align_items_bottom">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'bottom' ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex top-bottom-padding top-bottom-margin align_items_bottom">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'three' && $verticalalignment == 'top' ):

	if( have_rows('three_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex top-bottom-padding top-bottom-margin align_items_top">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'three' && $verticalalignment == 'center' ):

	if( have_rows('three_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex top-bottom-padding top-bottom-margin">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'three' && $verticalalignment == 'bottom' ):

	if( have_rows('three_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex top-bottom-padding top-bottom-margin align_items_bottom">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'four' && $verticalalignment == 'top' ):

	if( have_rows('four_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex top-bottom-padding top-bottom-margin align_items_top">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('four_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('four_first_column_left_column') ): ?>
					<?php while( have_rows('four_first_column_left_column') ): the_row(); ?>
				
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
					
					<?php if( have_rows('four_second_column_left_column') ): ?>
					<?php while( have_rows('four_second_column_left_column') ): the_row(); ?>
					
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
					
					<?php if( have_rows('four_third_column_left_column') ): ?>
					<?php while( have_rows('four_third_column_left_column') ): the_row(); ?>
					
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
					
					<?php if( have_rows('four_fourth_column_left_column') ): ?>
					<?php while( have_rows('four_fourth_column_left_column') ): the_row(); ?>
					
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'four' && $verticalalignment == 'center' ):

	if( have_rows('four_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex top-bottom-padding top-bottom-margin">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('four_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('four_first_column_left_column') ): ?>
					<?php while( have_rows('four_first_column_left_column') ): the_row(); ?>
				
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
					
					<?php if( have_rows('four_second_column_left_column') ): ?>
					<?php while( have_rows('four_second_column_left_column') ): the_row(); ?>
					
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
					
					<?php if( have_rows('four_third_column_left_column') ): ?>
					<?php while( have_rows('four_third_column_left_column') ): the_row(); ?>
					
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
					
					<?php if( have_rows('four_fourth_column_left_column') ): ?>
					<?php while( have_rows('four_fourth_column_left_column') ): the_row(); ?>
					
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
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'four' && $verticalalignment == 'bottom' ):

	if( have_rows('four_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div style="max-width: 1600px; margin: auto;">
			<div class="columns-container flex-wrap display-flex top-bottom-padding top-bottom-margin align_items_bottom">
		
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('four_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('four_first_column_left_column') ): ?>
					<?php while( have_rows('four_first_column_left_column') ): the_row(); ?>
				
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
					
					<?php if( have_rows('four_second_column_left_column') ): ?>
					<?php while( have_rows('four_second_column_left_column') ): the_row(); ?>
					
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
					
					<?php if( have_rows('four_third_column_left_column') ): ?>
					<?php while( have_rows('four_third_column_left_column') ): the_row(); ?>
					
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
					
					<?php if( have_rows('four_fourth_column_left_column') ): ?>
					<?php while( have_rows('four_fourth_column_left_column') ): the_row(); ?>
					
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
		</div>
		
	</div>
	
	<?php endif;
	
endif;