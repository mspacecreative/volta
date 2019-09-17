<?php if( have_rows('flexbox') ): ?>
<div class="display-flex clear">
	<?php while( have_rows('flexbox') ): the_row(); ?>
	<div class="flexbox">
		<?php the_sub_field('flexbox_content'); ?>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>