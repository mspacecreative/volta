<article class="icon-buckets">
	
	<div class="shadow white-bg top-bottom-padding">
		<div class="container row inner">
		
			<?php 
			$aligncenter = get_field('align_center');
			$iconposition = get_field('icon_position');
			
			if ( $iconposition == 'inline' ): ?>
			
				<?php if( have_rows('left_column') ): ?>
				<?php while( have_rows('left_column') ): the_row(); ?>
				
				<div class="col-4 col-12-mobile special inline-icons">
					
					<?php if ( get_sub_field('icon_left') ): ?>
					
					<?php if ( get_sub_field('icon_size_left') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_left') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_left') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
					
					<div class="bucket-content">
						<?php the_sub_field('content_left'); ?>
					</div>
					
				</div>
				
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( have_rows('center_column') ): ?>
				<?php while( have_rows('center_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special inline-icons">
						
					<?php if ( get_sub_field('icon_center') ): ?>
					
					<?php if ( get_sub_field('icon_size_center') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_center') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_center') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
						
					<div class="bucket-content">
						<?php the_sub_field('content_center'); ?>
					</div>
						
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( have_rows('right_column') ): ?>
				<?php while( have_rows('right_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special inline-icons">
						
					<?php if ( get_sub_field('icon_right') ): ?>
					
					<?php if ( get_sub_field('icon_size_right') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_right') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_right') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
						
					<div class="bucket-content">
						<?php the_sub_field('content_right'); ?>
					</div>
						
				</div>
				<?php endwhile; ?>
				<?php endif;
				
			elseif ( $aligncenter && $iconposition == 'top' ):
			
				if( have_rows('left_column') ):
				while( have_rows('left_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special align-center">
					
					<?php if ( get_sub_field('icon_left') ): ?>
					
					<?php if ( get_sub_field('icon_size_left') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_left') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_left') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
					
					<div class="bucket-content">
						<?php the_sub_field('content_left'); ?>
					</div>
					
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( have_rows('center_column') ): ?>
				<?php while( have_rows('center_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special align-center">
						
					<?php if ( get_sub_field('icon_center') ): ?>
					
					<?php if ( get_sub_field('icon_size_center') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_center') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_center') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
						
					<div class="bucket-content">
						<?php the_sub_field('content_center'); ?>
					</div>
						
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( have_rows('right_column') ): ?>
				<?php while( have_rows('right_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special align-center">
						
					<?php if ( get_sub_field('icon_right') ): ?>
					
					<?php if ( get_sub_field('icon_size_right') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_right') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_right') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
						
					<div class="bucket-content">
						<?php the_sub_field('content_right'); ?>
					</div>
						
				</div>
				<?php endwhile; ?>
				<?php endif;
			
			elseif ( $iconposition == 'top' ):
			
				if( have_rows('left_column') ):
				while( have_rows('left_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special">
					
					<?php if ( get_sub_field('icon_left') ): ?>
					
					<?php if ( get_sub_field('icon_size_left') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_left') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_left') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
					
					<div class="bucket-content">
						<?php the_sub_field('content_left'); ?>
					</div>
					
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( have_rows('center_column') ): ?>
				<?php while( have_rows('center_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special">
						
					<?php if ( get_sub_field('icon_center') ): ?>
					
					<?php if ( get_sub_field('icon_size_center') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_center') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_center') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
						
					<div class="bucket-content">
						<?php the_sub_field('content_center'); ?>
					</div>
						
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( have_rows('right_column') ): ?>
				<?php while( have_rows('right_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special">
						
					<?php if ( get_sub_field('icon_right') ): ?>
					
					<?php if ( get_sub_field('icon_size_right') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_right') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_right') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
						
					<div class="bucket-content">
						<?php the_sub_field('content_right'); ?>
					</div>
						
				</div>
				<?php endwhile; ?>
				<?php endif;
				
			else :
			
				if( have_rows('left_column') ): ?>
				<?php while( have_rows('left_column') ): the_row(); ?>
				
				<div class="col-4 col-12-mobile special inline-icons">
					
					<?php if ( get_sub_field('icon_left') ): ?>
					
					<?php if ( get_sub_field('icon_size_left') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_left') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_left') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_left'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
					
					<div class="bucket-content">
						<?php the_sub_field('content_left'); ?>
					</div>
					
				</div>
				
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( have_rows('center_column') ): ?>
				<?php while( have_rows('center_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special inline-icons">
						
					<?php if ( get_sub_field('icon_center') ): ?>
					
					<?php if ( get_sub_field('icon_size_center') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_center') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_center') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_center'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
						
					<div class="bucket-content">
						<?php the_sub_field('content_center'); ?>
					</div>
						
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( have_rows('right_column') ): ?>
				<?php while( have_rows('right_column') ): the_row(); ?>
				<div class="col-4 col-12-mobile special inline-icons">
						
					<?php if ( get_sub_field('icon_right') ): ?>
					
					<?php if ( get_sub_field('icon_size_right') == 'small' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 30px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_right') == 'medium' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 60px;"></i></span>
					
					<?php elseif ( get_sub_field('icon_size_right') == 'large' ): ?>
					<span class="icon solid"><i class="fa-fw <?php the_sub_field('icon_right'); ?>" style="font-size: 90px;"></i></span>
					<?php endif; ?>
					
					<?php endif; ?>
						
					<div class="bucket-content">
						<?php the_sub_field('content_right'); ?>
					</div>
						
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			
			<?php endif; ?>
			
		</div>
		
		<?php if( have_rows('cta_button') ):
		 	while( have_rows('cta_button') ): the_row();
			if ( get_sub_field('button_link') ): ?>
			<footer class="no-padding-bottom-margin-top align-center">
				<ul class="actions">
					<li>
						<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
					</li>
				</ul>
			</footer>
			<?php endif;
			endwhile; ?>
		<?php endif; ?>
	</div>
	
</article>