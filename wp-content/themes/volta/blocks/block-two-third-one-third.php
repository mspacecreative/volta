<?php
$padding = get_field('section_padding');
$margin = get_field('section_margin');

if ( $padding == 'top' && $margin == 'top' ): ?>
<div class="clear top-padding top-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
<div class="clear bottom-padding bottom-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
<div class="clear top-bottom-padding top-bottom-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
<div class="clear top-padding bottom-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
<div class="clear top-padding top-bottom-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
<div class="clear bottom-padding top-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
<div class="clear bottom-padding top-bottom-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
<div class="clear top-bottom-padding top-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
<div class="clear top-bottom-padding bottom-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'bottom' ): ?>
<div class="clear bottom-padding">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'top' ): ?>
<div class="clear top-padding">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $padding == 'both' ): ?>
<div class="clear top-bottom-padding">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $margin == 'bottom' ): ?>
<div class="clear bottom-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $margin == 'top' ): ?>
<div class="clear top-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php elseif ( $margin == 'both' ): ?>
<div class="clear top-bottom-margin">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>

<?php else : ?>
<div class="clear">
	
	<?php include('inc/two-third-one-third-loop.php'); ?>
	
</div>
<?php endif; ?>