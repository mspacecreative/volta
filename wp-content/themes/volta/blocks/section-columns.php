<?php if ( get_field('layout_type') == 'one' ):	
	
	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container display-flex">
		
		<?php while( have_rows('variable_columns') ): the_row(); ?>
		
		<div class="column-container one_column">
			<?php the_sub_field('column_content'); ?>
		</div>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;
	
elseif ( get_field('layout_type') == 'two' ):	
	
	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container display-flex">
		
		<?php while( have_rows('variable_columns') ): the_row(); ?>
		
		<div class="column-container two_column">
			<?php the_sub_field('column_content'); ?>
		</div>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

elseif ( get_field('layout_type') == 'three' ):	
	
	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container display-flex">
		
		<?php while( have_rows('variable_columns') ): the_row(); ?>
		
		<div class="column-container three_column">
			<?php the_sub_field('column_content'); ?>
		</div>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

elseif ( get_field('layout_type') == 'four' ):	
	
	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container display-flex">
		
		<?php while( have_rows('variable_columns') ): the_row(); ?>
		
		<div class="column-container four_column">
			<?php the_sub_field('column_content'); ?>
		</div>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

elseif ( get_field('layout_type') == 'five' ):	
	
	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container display-flex">
		
		<?php while( have_rows('variable_columns') ): the_row(); ?>
		
		<div class="column-container five_column">
			<?php the_sub_field('column_content'); ?>
		</div>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

else :

	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container display-flex">
		
		<?php while( have_rows('variable_columns') ): the_row(); ?>
		
		<div class="column-container">
			<?php the_sub_field('column_content'); ?>
		</div>
		
		<?php endwhile; ?>
		
	</div>
	
	<?php endif;

endif; ?>