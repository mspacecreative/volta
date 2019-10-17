<!-- Intro buckets -->
<div class="fullspan-buckets">
	
	<?php if( have_rows('section') ): ?>
	<?php while( have_rows('section') ): the_row(); ?>
		
	<?php if( have_rows('content') ): ?>
	<?php while( have_rows('content') ): the_row(); ?>
		
	<?php if ( get_sub_field('background_image_overlay') == 'dark' ): ?>
	<section class="features shadow special white-bg dark-overlay" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
		
		<?php 
		$image = get_sub_field('sponsor_branding');
		$size = 'large';
		if ( $image ): ?>
		<div class="sponsor_branding">
			<?php echo wp_get_attachment_image( $image, $size ); ?>
		</div>
		<?php endif; ?>
		
		<article class="row content-bottom">
		
		<?php if( have_rows('text') ): ?>
		<?php while( have_rows('text') ): the_row(); ?>
		
			<?php if ( get_sub_field('alignment') == 'left' ): ?>
			<div class="left">
				<div class="left-side">
					
					<div class="full-span-content light">
						<header>
							<h1><?php the_sub_field('heading'); ?></h1>
						</header>
						<?php the_sub_field('copy'); ?>
					</div>
					
				</div>
			</div>
		
			<?php elseif ( get_sub_field('alignment') == 'right' ): ?>
			<div class="right">
				<div class="right-side clear">
				
					<div class="full-span-content light">
						<header>
							<h1><?php the_sub_field('heading'); ?></h1>
						</header>
						<?php the_sub_field('copy'); ?>
					</div>
				
				</div>
			</div>
			<?php endif; ?>
		
		<?php endwhile;
		endif; ?>
		
		</article>
	
	</section>
	
	<?php elseif ( get_sub_field('background_image_overlay') == 'light' ): ?>
	<section class="features shadow special white-bg light-overlay" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
		
		<?php 
		$image = get_sub_field('sponsor_branding');
		$size = 'large';
		if ( $image ): ?>
		<div class="sponsor_branding">
			<?php echo wp_get_attachment_image( $image, $size ); ?>
		</div>
		<?php endif; ?>
		
		<article class="row content-bottom">
		
		<?php if( have_rows('text') ): ?>
		<?php while( have_rows('text') ): the_row(); ?>
		
			<?php if ( get_sub_field('alignment') == 'left' ): ?>
			<div class="left">
				<div class="left-side">
					
					<div class="full-span-content light">
						<header>
							<h1><?php the_sub_field('heading'); ?></h1>
						</header>
						<?php the_sub_field('copy'); ?>
					</div>
					
				</div>
			</div>
		
			<?php elseif ( get_sub_field('alignment') == 'right' ): ?>
			<div class="right">
				<div class="right-side clear">
				
					<div class="full-span-content light">
						<header>
							<h1><?php the_sub_field('heading'); ?></h1>
						</header>
						<?php the_sub_field('copy'); ?>
					</div>
				
				</div>
			</div>
			<?php endif; ?>
		
		<?php endwhile;
		endif; ?>
		
		</article>
	
	</section>
	
	<?php else : ?>
	<section class="features shadow special white-bg" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
		
		<?php 
		$image = get_sub_field('sponsor_branding');
		$size = 'large';
		if ( $image ): ?>
		<div class="sponsor_branding">
			<?php echo wp_get_attachment_image( $image, $size ); ?>
		</div>
		<?php endif; ?>
		
		<article class="row content-bottom">
		
		<?php if( have_rows('text') ): ?>
		<?php while( have_rows('text') ): the_row(); ?>
		
			<?php if ( get_sub_field('alignment') == 'left' ): ?>
			<div class="left">
				<div class="left-side">
					
					<div class="full-span-content light">
						<header>
							<h1><?php the_sub_field('heading'); ?></h1>
						</header>
						<?php the_sub_field('copy'); ?>
					</div>
					
				</div>
			</div>
		
			<?php elseif ( get_sub_field('alignment') == 'right' ): ?>
			<div class="right">
				<div class="right-side clear">
				
					<div class="full-span-content light">
						<header>
							<h1><?php the_sub_field('heading'); ?></h1>
						</header>
						<?php the_sub_field('copy'); ?>
					</div>
				
				</div>
			</div>
			<?php endif; ?>
		
		<?php endwhile;
		endif; ?>
		
		</article>
	
	</section>
	<?php endif; ?>
		
	<?php endwhile;
	endif; ?>
		
	<?php endwhile;
	endif; ?>
	
</div>
<!-- /Intro buckets -->