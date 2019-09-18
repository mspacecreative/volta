<!-- Banner -->
<?php if ( get_field('background_image') ): ?>
<section id="banner" class="container" style="background-image: url(<?php the_field('background_image'); ?>);">
<?php else : ?>
<section id="banner" class="container">
<?php endif; ?>
	<header class="light max-width-800">
		<h2><?php the_field('heading'); ?></h2>
		<?php if ( get_field('content') ): ?>
		<p><?php the_field('content'); ?></p>
		<?php endif; ?>
		
		<?php if( have_rows('cta_button') ): ?>
		<footer>
			
			<?php while( have_rows('cta_button') ): the_row(); ?>
			<ul class="actions center-items">
				<?php if ( get_sub_field('button_link') ): ?>
				<li><a href="<?php the_sub_field('button_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a></li>
				<?php endif; ?>
			</ul>
			<?php endwhile; ?>
			
		</footer>
		<?php endif; ?>
		
	</header>
</section>
<!-- /Banner -->