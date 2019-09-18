<?php
$padding = get_field('section_padding');
$margin = get_field('section_margin');
if ( $padding == 'top' && $margin == 'top' ): ?>
<div class="top-padding top-margin">
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>

<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
<div class="bottom-padding bottom-margin">
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>

<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
<div class="top-bottom-padding top-bottom-margin">
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>

<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
<div class="top-bottom-padding top-margin">
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>

<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
<div class="top-bottom-padding bottom-margin">
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>

<?php elseif ( $padding == 'full' && $margin == 'top' ): ?>
<div class="full-padding top-margin">
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>

<?php elseif ( $padding == 'full' && $margin == 'bottom' ): ?>
<div class="full-padding bottom-margin">
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>

<?php elseif ( $padding == 'full' && $margin == 'both' ): ?>
<div class="full-padding top-bottom-margin">
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>

<?php elseif ( $padding == 'full' ): ?>
<div class="full-padding">
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>

<?php else : ?>
<div>
	<?php if ( get_field('section_heading') ): ?>
	<h2><?php the_field('section_heading'); ?></h2>
	<?php endif; ?>
	<?php if ( get_field('column_count') == 'two' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-2">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	
	<?php elseif ( get_field('column_count') == 'three' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-3">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	
	<?php elseif ( get_field('column_count') == 'four' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-4">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	
	<?php elseif ( get_field('column_count') == 'five' ): ?>
	<?php if( have_rows('flexbox') ): ?>
	<div class="display-flex clear">
		<?php while( have_rows('flexbox') ): the_row(); ?>
		<div class="flex-box flexbox-5">
			<div>
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
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>
<?php endif; ?>