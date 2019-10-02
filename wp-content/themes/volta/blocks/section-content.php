<?php if ( get_field('background_image_background_image') ):

	if ( get_field('background_image_overlay') == 'dark' ): ?>
	<div class="bg-img-cover dark-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
	
		<?php 
		$padding = get_field('section_padding_section_padding');
		$margin = get_field('section_margin_section_margin');
		$width = get_field('content_width');
		
		if ( $padding == 'top' && $margin == 'top' ):
		
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'full' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		else :
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
		
		endif; ?>
		
	</div>
	
	<?php elseif ( get_field('background_image_overlay') == 'light' ): ?>
	<div class="white-bg bg-img-cover light-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
	
		<?php 
		$padding = get_field('section_padding_section_padding');
		$margin = get_field('section_margin_section_margin');
		$width = get_field('content_width');
		
		if ( $padding == 'top' && $margin == 'top' ):
		
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'full' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		else :
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
		
		endif; ?>
		
	</div>
	
	<?php else : ?>
	<div class="bg-img-cover light-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
	
		<?php 
		$padding = get_field('section_padding_section_padding');
		$margin = get_field('section_margin_section_margin');
		$width = get_field('content_width');
		
		if ( $padding == 'top' && $margin == 'top' ):
		
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'full' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		else :
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
		
		endif; ?>
		
	</div>
	<?php endif; ?>

<?php elseif ( get_field('background_color_background_color') ): ?>
<div class="white-bg" style="background-color: <?php the_field('background_color_background_color'); ?>;">
	
	<?php if ( get_field('background_image_overlay') == 'dark' ): ?>
	<div class="bg-img-cover dark-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
	
		<?php 
		$padding = get_field('section_padding_section_padding');
		$margin = get_field('section_margin_section_margin');
		$width = get_field('content_width');
		
		if ( $padding == 'top' && $margin == 'top' ):
		
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'full' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		else :
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
		
		endif; ?>
		
	</div>
	
	<?php elseif ( get_field('background_image_overlay') == 'light' ): ?>
	<div class="white-bg bg-img-cover light-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
	
		<?php 
		$padding = get_field('section_padding_section_padding');
		$margin = get_field('section_margin_section_margin');
		$width = get_field('content_width');
		
		if ( $padding == 'top' && $margin == 'top' ):
		
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'full' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		else :
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
		
		endif; ?>
		
	</div>
	
	<?php else : ?>
	<div class="bg-img-cover" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
	
		<?php 
		$padding = get_field('section_padding_section_padding');
		$margin = get_field('section_margin_section_margin');
		$width = get_field('content_width');
		
		if ( $padding == 'top' && $margin == 'top' ):
		
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'full' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		else :
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
		
		endif; ?>
		
	</div>
	<?php endif; ?>
	
<?php else : ?>
	
	<?php if ( get_field('background_image_overlay') == 'dark' ): ?>
	<div class="bg-img-cover dark-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
	
		<?php 
		$padding = get_field('section_padding_section_padding');
		$margin = get_field('section_margin_section_margin');
		$width = get_field('content_width');
		
		if ( $padding == 'top' && $margin == 'top' ):
		
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'full' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		else :
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
		
		endif; ?>
		
	</div>
	
	<?php elseif ( get_field('background_image_overlay') == 'light' ): ?>
	<div class="white-bg bg-img-cover light-overlay" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
	
		<?php 
		$padding = get_field('section_padding_section_padding');
		$margin = get_field('section_margin_section_margin');
		$width = get_field('content_width');
		
		if ( $padding == 'top' && $margin == 'top' ):
		
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $padding == 'full' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		else :
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
		
		endif; ?>
		
	</div>
	
	<?php else : ?>
	<div class="white-bg">
	
		<?php 
		$padding = get_field('section_padding_section_padding');
		$margin = get_field('section_margin_section_margin');
		$width = get_field('content_width');
		
		if ( $padding == 'top' && $margin == 'top' ):
		
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'full' && $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' && $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width == 'true' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width == 'true' && $padding == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width == 'true' && $padding == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width == 'true' && $padding == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width == 'true' && $padding == 'full' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width == 'true' and $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width == 'true' and $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $width == 'true' and $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="width-800 top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $margin == 'top' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $margin == 'bottom' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		elseif ( $margin == 'both' ):
			
			if ( get_field('content_editor') ): ?>
			<div class="top-bottom-margin">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
			
		else :
			
			if ( get_field('content_editor') ): ?>
			<div class="full-padding">
				
				<?php the_field('content_editor'); ?>
				
				<?php if( have_rows('content_cta_button') ): ?>
				<?php while( have_rows('content_cta_button') ): the_row(); ?>
				<?php if ( get_sub_field('content_button_link') ): ?>
				<footer>
					
					<ul class="actions">
						<li><a href="<?php the_sub_field('content_button_link'); ?>" class="dark button"><?php the_sub_field('content_button_label'); ?></a></li>
					</ul>
					
				</footer>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			<?php endif;
		
		endif; ?>
		
	</div>
	<?php endif; ?>

<?php endif; ?>