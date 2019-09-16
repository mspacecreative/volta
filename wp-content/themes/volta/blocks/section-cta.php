<!-- Banner -->
<section id="banner" class="container">
	<header class="light">
		<h2><?php the_field('heading'); ?></h2>
		<?php if ( get_field('content') ): ?>
		<p><?php the_field('content'); ?></p>
		<?php endif; ?>
		<footer>
			
			<?php if( have_rows('cta_button') ): ?>
			<ul class="actions center-items">
				<?php while( have_rows('cta_button') ): the_row(); ?>
				<li><a href="<?php the_sub_field('button_link'); ?>" class="light button"><?php the_sub_field('button_label'); ?></a></li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			
		</footer>
	</header>
</section>
<!-- /Banner -->