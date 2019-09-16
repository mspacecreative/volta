<!-- Intro buckets -->
<div class="fullspan-buckets">
	
	<?php if( have_rows('section') ): ?>
	
	<section class="features container shadow special white-bg">
		
		<?php while( have_rows('section') ): the_row(); ?>
		
		<?php if( have_rows('content') ): ?>
		<?php while( have_rows('content') ): the_row(); ?>
		
		<article class="row content-bottom" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
		
		<?php if( have_rows('text') ): ?>
		<?php while( have_rows('text') ): the_row(); ?>
		
			<?php if ( get_sub_field('alignment') == 'left' ): ?>
			<div class="left">
				<div class="left-side">
					
					<div class="full-span-content light">
						<header>
							<h3><?php the_sub_field('heading'); ?></h3>
						</header>
						<p><?php the_sub_field('copy'); ?></p>
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
						<p><?php the_sub_field('copy'); ?></p>
					</div>
				
				</div>
			</div>
			<?php endif; ?>
		
		<?php endwhile;
		endif; ?>
		
		</article>
		
		<?php endwhile;
		endif; ?>
		
		<?php endwhile; ?>
		
	</section>
	
	<?php endif; ?>
	
</div>
<!-- /Intro buckets -->