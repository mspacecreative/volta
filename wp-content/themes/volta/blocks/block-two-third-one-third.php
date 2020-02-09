<?php
$padding = get_field('section_padding');
$margin = get_field('section_margin');
$blockanchor = get_field('block_id');
$width = get_field('two_third_one_third_content_width');
$flex = get_field('two_third_one_third_vertical_alignment');

if ( $flex == 'bottom' ):

	if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex vertical-align-bottom top-padding top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row width-800 clear top-padding top-margin display-flex vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row width-800 clear bottom-padding bottom-margin display-flex vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row width-800 clear top-padding bottom-margin display-flex vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row width-800 clear display-flex bottom-padding top-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row width-800 clear top-bottom-padding top-margin display-flex vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row width-800 clear top-bottom-padding bottom-margin display-flex vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row width-800 clear display-flex top-bottom-padding top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row width-800 clear display-flex top-padding top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row width-800 clear display-flex bottom-padding top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="row width-800 clear display-flex top-padding vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="row width-800 clear display-flex bottom-padding vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both'): ?>
	<div class="row width-800 clear display-flex top-bottom-padding vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $margin == 'top'): ?>
	<div class="row width-800 clear display-flex top-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $margin == 'bottom'): ?>
	<div class="row width-800 clear display-flex bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $margin == 'both'): ?>
	<div class="row width-800 clear display-flex top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
	<div class="row clear display-flex top-padding top-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row clear display-flex bottom-padding bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
	<div class="row clear display-flex top-bottom-padding top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row clear display-flex top-padding bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
	<div class="row clear display-flex top-padding top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding top-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row clear display-flex bottom-padding top-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row clear display-flex bottom-padding top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding top-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
	<div class="row clear display-flex top-bottom-padding top-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row clear display-flex top-bottom-padding bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' ): ?>
	<div class="row clear display-flex bottom-padding vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' ): ?>
	<div class="row clear display-flex top-padding vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="row clear display-flex top-bottom-padding vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $margin == 'bottom' ): ?>
	<div class="row clear display-flex bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $margin == 'top' ): ?>
	<div class="row clear display-flex top-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $margin == 'both' ): ?>
	<div class="row clear display-flex top-bottom-margin vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php else : ?>
	<div class="row clear display-flex vertical-align-bottom">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	<?php endif;
	
elseif ( $flex == 'center' ):
	
	if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex vertical-align-center top-padding top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row width-800 clear top-padding top-margin display-flex vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row width-800 clear bottom-padding bottom-margin display-flex vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row width-800 clear top-padding bottom-margin display-flex vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row width-800 clear display-flex bottom-padding top-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row width-800 clear top-bottom-padding top-margin display-flex vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row width-800 clear top-bottom-padding bottom-margin display-flex vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row width-800 clear display-flex top-bottom-padding top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row width-800 clear display-flex top-padding top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row width-800 clear display-flex bottom-padding top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="row width-800 clear display-flex top-padding vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="row width-800 clear display-flex bottom-padding vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both'): ?>
	<div class="row width-800 clear display-flex top-bottom-padding vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $margin == 'top'): ?>
	<div class="row width-800 clear display-flex top-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $margin == 'bottom'): ?>
	<div class="row width-800 clear display-flex bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $margin == 'both'): ?>
	<div class="row width-800 clear display-flex top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
	<div class="row clear display-flex top-padding top-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row clear display-flex bottom-padding bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
	<div class="row clear display-flex top-bottom-padding top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row clear display-flex top-padding bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
	<div class="row clear display-flex top-padding top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding top-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row clear display-flex bottom-padding top-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row clear display-flex bottom-padding top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding top-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
	<div class="row clear display-flex top-bottom-padding top-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row clear display-flex top-bottom-padding bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' ): ?>
	<div class="row clear display-flex bottom-padding vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' ): ?>
	<div class="row clear display-flex top-padding vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="row clear display-flex top-bottom-padding vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $margin == 'bottom' ): ?>
	<div class="row clear display-flex bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $margin == 'top' ): ?>
	<div class="row clear display-flex top-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $margin == 'both' ): ?>
	<div class="row clear display-flex top-bottom-margin vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php else : ?>
	<div class="row clear display-flex vertical-align-center">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	<?php endif;
	
else :
	
	if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row width-800 clear top-padding top-margin display-flex">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row width-800 clear bottom-padding bottom-margin display-flex">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row width-800 clear top-padding bottom-margin display-flex">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row width-800 clear display-flex bottom-padding top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row width-800 clear top-bottom-padding top-margin display-flex">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row width-800 clear top-bottom-padding bottom-margin display-flex">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row width-800 clear display-flex top-bottom-padding top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row width-800 clear display-flex top-padding top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row width-800 clear display-flex bottom-padding top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="row width-800 clear display-flex top-padding">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="row width-800 clear display-flex bottom-padding">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $padding == 'both'): ?>
	<div class="row width-800 clear display-flex top-bottom-padding">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $margin == 'top'): ?>
	<div class="row width-800 clear display-flex top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $margin == 'bottom'): ?>
	<div class="row width-800 clear display-flex bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $width && $margin == 'both'): ?>
	<div class="row width-800 clear display-flex top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
	<div class="row clear display-flex top-padding top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row clear display-flex bottom-padding bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
	<div class="row clear display-flex top-bottom-padding top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row clear display-flex top-padding bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
	<div class="row clear display-flex top-padding top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row clear display-flex bottom-padding top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row clear display-flex bottom-padding top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
	<div class="row clear display-flex top-bottom-padding top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row clear display-flex top-bottom-padding bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-padding">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'bottom' ): ?>
	<div class="row clear display-flex bottom-padding">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-padding">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'top' ): ?>
	<div class="row clear display-flex top-padding">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-padding">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="row clear display-flex top-bottom-padding">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $margin == 'bottom' ): ?>
	<div class="row clear display-flex bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'top' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $margin == 'top' ): ?>
	<div class="row clear display-flex top-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'both' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="row clear display-flex top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php elseif ( $margin == 'both' ): ?>
	<div class="row clear display-flex top-bottom-margin">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	
	<?php else : ?>
	<div class="row clear display-flex">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
	<?php endif;

endif;