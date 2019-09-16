<article id="more-programs" class="white-bg top-bottom-padding">
	
	<?php if( have_rows('left_column') ): ?>
	<?php while( have_rows('left_column') ): the_row(); ?>
	<div class="row inline-icons inner">
		
		<div class="col-4 col-12-mobile special">
			
			<?php if ( get_sub_field('icon_left') ): ?>
			<span class="icon solid alt major <?php the_sub_field('icon_left'); ?>"></span>
			<?php endif; ?>
			
			<div class="bucket-content">
				<?php the_sub_field('content_left'); ?>
			</div>
			
		</div>
						
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	
	<?php if( have_rows('center_column') ): ?>
	<?php while( have_rows('center_column') ): the_row(); ?>
	<div class="row inline-icons inner">
		
		<div class="col-4 col-12-mobile special">
			
			<?php if ( get_sub_field('icon_center') ): ?>
			<span class="icon solid alt major <?php the_sub_field('icon_center'); ?>"></span>
			<?php endif; ?>
			
			<div class="bucket-content">
				<?php the_sub_field('content_center'); ?>
			</div>
			
		</div>
						
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	
	<?php if( have_rows('right_column') ): ?>
	<?php while( have_rows('right_column') ): the_row(); ?>
	<div class="row inline-icons inner">
		
		<div class="col-4 col-12-mobile special">
			
			<?php if ( get_sub_field('icon_right') ): ?>
			<span class="icon solid alt major <?php the_sub_field('icon_right'); ?>"></span>
			<?php endif; ?>
			
			<div class="bucket-content">
				<?php the_sub_field('content_right'); ?>
			</div>
			
		</div>
						
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	
	<footer class="no-padding-bottom-margin-top align-center">
		<ul class="actions">
			<li><a href="#" class="dark button">MORE PROGRAMS</a></li>
		</ul>
	</footer>
	
</article>