<?php if ( get_field('section_padding') == 'top' ): ?>
<div class="clear top-padding">
	<div class="two_third_col">
		<?php the_field('two_third_column'); ?>
	</div>
	<div class="one_third_col">
		<?php the_field('one_third_column'); ?>
	</div>
</div>
<?php elseif ( get_field('section_padding') == 'bottom' ): ?>
<div class="clear bottom-padding">
	<div class="two_third_col">
		<?php the_field('two_third_column'); ?>
	</div>
	<div class="one_third_col">
		<?php the_field('one_third_column'); ?>
	</div>
</div>
<?php elseif ( get_field('section_padding') == 'both' ): ?>
<div class="clear top-bottom-padding">
	<div class="two_third_col">
		<?php the_field('two_third_column'); ?>
	</div>
	<div class="one_third_col">
		<?php the_field('one_third_column'); ?>
	</div>
</div>
<?php else : ?>
<div class="clear">
	<div class="two_third_col">
		<?php the_field('two_third_column'); ?>
	</div>
	<div class="one_third_col">
		<?php the_field('one_third_column'); ?>
	</div>
</div>
<?php endif; ?>