<?php if( have_rows('flexbox') ): ?>
<div class="display-flex clear">
	<?php while( have_rows('flexbox') ): the_row(); ?>
	<div class="flexbox">
		<?php if( have_rows('flexbox_content') ): ?>
		<?php while( have_rows('flexbox_content') ): the_row(); ?>
		
		<h3><?php the_sub_field('heading'); ?></h3>
		<p><?php the_sub_field('body'); ?></p>
		
		<?php if( have_rows('button') ): ?>
		<?php while( have_rows('button') ): the_row(); ?>
		<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
		<?php endwhile; ?>
		<?php endif; ?>
		
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>