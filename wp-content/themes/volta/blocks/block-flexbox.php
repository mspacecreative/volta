<?php
$sectionpadding = get_field('section_padding');
$sectionmargin = get_field('section_margin');

if ( $sectionpadding == 'top' && $sectionmargin == 'top' ): ?>
<div class="section">	
	<div class="top-padding top-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'bottom' && $sectionmargin == 'bottom' ): ?>
<div class="section">
	<div class="row-width-1280 bottom-padding bottom-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'bottom' && $sectionmargin == 'both' ): ?>
<div class="section">
	<div class="row-width-1280 bottom-padding top-bottom-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'bottom' && $sectionmargin == 'top' ): ?>
<div class="section">
	<div class="row-width-1280 bottom-padding top-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'both' && $sectionmargin == 'both' ): ?>
<div class="section">
	<div class="row-width-1280 top-bottom-padding top-bottom-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
					<?php if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row(); ?>
					
					<?php if ( get_sub_field('link') ): ?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
					<?php endif; ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'both' && $sectionmargin == 'top' ): ?>
<div class="section">
	<div class="row-width-1280 top-bottom-padding top-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'both' && $sectionmargin == 'bottom' ): ?>
<div class="section">
	<div class="row-width-1280 top-bottom-padding bottom-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionmargin == 'top' ): ?>
<div class="section">
	<div class="row-width-1280 default-padding top-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionmargin == 'bottom' ): ?>
<div class="section">
	<div class="row-width-1280 full-padding bottom-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionmargin == 'both' ): ?>
<div class="section">
	<div class="row-width-1280 full-padding top-bottom-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'top' ): ?>
<div class="section">
	<div class="row-width-1280 top-padding">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'bottom' ): ?>
<div class="section">
	<div class="row between-lg between-md between-sm bottom-padding">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'both' ): ?>
<div class="section">
	<div class="row between-lg between-md between-sm top-bottom-padding">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionmargin == 'top' ): ?>
<div class="section">
	<div class="row between-lg between-md between-sm default-padding top-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionmargin == 'bottom' ): ?>
<div class="section">
	<div class="row between-lg between-md between-sm default-padding bottom-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionmargin == 'both' ): ?>
<div class="section">
	<div class="row between-lg between-md between-sm default-padding top-bottom-margin">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php elseif ( $sectionpadding == 'full' ): ?>
<div class="section">
	<div class="row between-lg between-md between-sm full-padding">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="display-flex flex-wrap flexbox-container clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>

<?php else : ?>
<div class="section">
	<div class="row">
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('column_count') == 'two' ): ?>
		<?php if( have_rows('flexbox') ): ?>
		<div class="row between-lg between-md between-sm clear default-padding">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear default-padding">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="flex-box col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear default-padding">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
		<div class="row between-lg between-md between-sm clear default-padding">
			<?php while( have_rows('flexbox') ): the_row(); ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('body'); ?>
					
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
</div>
<?php endif; ?>