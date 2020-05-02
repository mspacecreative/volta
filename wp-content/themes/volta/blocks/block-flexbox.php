<?php
$sectionpadding = get_field('section_padding');
$sectionmargin = get_field('section_margin');
$columncount = get_field('column_count');

if ( $sectionpadding == 'top' && $sectionmargin == 'top' ): ?>
<div class="section">	
	<div class="row-width-1280 top-padding top-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'bottom' && $sectionmargin == 'bottom' ): ?>
<div class="section">
	<div class="row-width-1280 bottom-padding bottom-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'bottom' && $sectionmargin == 'both' ): ?>
<div class="section">
	<div class="row-width-1280 bottom-padding top-bottom-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'bottom' && $sectionmargin == 'top' ): ?>
<div class="section">
	<div class="row-width-1280 bottom-padding top-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'both' && $sectionmargin == 'both' ): ?>
<div class="section">
	<div class="row-width-1280 top-bottom-padding top-bottom-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'both' && $sectionmargin == 'top' ): ?>
<div class="section">
	<div class="row-width-1280 top-bottom-padding top-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'both' && $sectionmargin == 'bottom' ): ?>
<div class="section">
	<div class="row-width-1280 top-bottom-padding bottom-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionmargin == 'top' ): ?>
<div class="section">
	<div class="row-width-1280 top-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionmargin == 'bottom' ): ?>
<div class="section">
	<div class="row-width-1280 full-padding bottom-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionmargin == 'both' ): ?>
<div class="section">
	<div class="row-width-1280 full-padding top-bottom-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'top' ): ?>
<div class="section">
	<div class="row-width-1280 top-padding">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'bottom' ): ?>
<div class="section">
	<div class="row-width-1280 row between-lg between-md between-sm bottom-padding">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'both' ): ?>
<div class="section">
	<div class="row-width-1280 row between-lg between-md between-sm top-bottom-padding">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionmargin == 'top' ): ?>
<div class="section">
	<div class="row-width-1280 top-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionmargin == 'bottom' ): ?>
<div class="section">
	<div class="row between-lg between-md between-sm bottom-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionmargin == 'both' ): ?>
<div class="section">
	<div class="row between-lg between-md between-sm top-bottom-margin">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php elseif ( $sectionpadding == 'full' ): ?>
<div class="section">
	<div class="row between-lg between-md between-sm full-padding">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>

<?php else : ?>
<div class="section">
	<div class="row-width-1280">
		
		<?php if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			<?php while( have_rows('flexbox') ): the_row();
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-box ">
				
			<?php elseif ( $columncount == 'five' ): ?>
			<div class="col-lg-1_5 col-md-1_5 col-sm-6 col-xs-12 flex-box">
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
			<?php endif; ?>
			
				<div>
					<?php include 'inc/flexbox-content-loop.php' ?>
				</div>
				
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</div>
<?php endif; ?>