<?php if ( get_field('background_image_background_image') ): ?>
<div class="white-bg bg-img-cover" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">

	<?php 
	$padding = get_field('section_padding_section_padding');
	$margin = get_field('section_margin_section_margin');
	$width = get_field('content_width');
	
	if ( $padding == 'top' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-bottom-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'top' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'top' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'full' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'full' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'full' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-bottom-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $width ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	else :
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	endif; ?>
	
</div>

<?php elseif ( get_field('background_color_background_color') ): ?>
<div class="white-bg" style="background-color: <?php the_field('background_color_background_color'); ?>;">
	
	<?php 
	$padding = get_field('section_padding_section_padding');
	$margin = get_field('section_margin_section_margin');
	$width = get_field('content_width');
	
	if ( $padding == 'top' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-bottom-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'top' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'top' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'full' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'full' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'full' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-bottom-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $width ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	else :
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	endif; ?>
	
</div>
	
<?php else : ?>
<div class="white-bg">
	
	<?php 
	$padding = get_field('section_padding_section_padding');
	$margin = get_field('section_margin_section_margin');
	$width = get_field('content_width');
	
	if ( $padding == 'top' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-bottom-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'top' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'top' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'full' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'full' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'full' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-bottom-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $padding == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	elseif ( $width ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	else :
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding">
		<?php the_field('content_editor'); ?>
	</div>
	<?php endif;
	
	endif; ?>

</div>
<?php endif; ?>