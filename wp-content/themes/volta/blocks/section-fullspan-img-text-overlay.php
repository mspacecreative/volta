<!-- Intro buckets -->
<div class="fullspan-buckets">
	
	<?php if( have_rows('section') ): ?>
	<?php while( have_rows('section') ): the_row(); ?>
		
	<?php if( have_rows('content') ): ?>
	<?php while( have_rows('content') ): the_row(); ?>
		
	<section class="features shadow special white-bg" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
		
		<article class="row content-bottom">
		
		<?php if( have_rows('text') ): ?>
		<?php while( have_rows('text') ): the_row(); ?>
		
			<?php if ( get_sub_field('alignment') == 'left' ): ?>
			<div class="left">
				<div class="left-side">
					
					<div class="full-span-content light">
						<header>
							<h3><?php the_sub_field('heading'); ?></h3>
						</header>
						<?php the_sub_field('copy'); ?>
					</div>
					
				</div>
			</div>
		
			<?php elseif ( get_sub_field('alignment') == 'right' ): ?>
			<div class="right">
				<div class="right-side">
				
					<div class="full-span-content light">
						<header>
							<h3><?php the_sub_field('heading'); ?></h3>
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
		
	<?php endwhile;
	endif; ?>
		
	<?php endwhile;
	endif; ?>
	
</div>
<!-- /Intro buckets -->