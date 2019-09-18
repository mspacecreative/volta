<?php if ( get_field('section_padding') == 'top' ): ?>
<?php if ( get_field('section_margin') == 'margintop' ): ?>

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

<?php elseif ( get_field('section_padding') == 'bottom' ): ?>
<?php elseif ( get_field('section_margin') == 'marginbottom' ): ?>

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

<?php elseif ( get_field('section_padding') == 'both' ): ?>
<?php elseif ( get_field('section_margin') == 'marginboth' ): ?>

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

<?php elseif ( get_field('section_padding') == 'full' ): ?>
<?php elseif ( get_field('section_margin') == 'marginfull' ): ?>

<div class="full-padding full-margin">
	
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
<?php endif; ?>
<?php endif; ?>