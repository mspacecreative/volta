<?php 
$padding = get_field('section_padding_section_padding');
$margin = get_field('section_margin_section_margin');

if ( $padding == 'top' && $margin == 'top' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="top-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'bottom' && $margin == 'bottom' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="bottom-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'both' && $margin == 'both' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="top-bottom-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'top' && $margin == 'bottom' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="top-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'top' && $margin == 'both' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="top-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'bottom' && $margin == 'top' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="bottom-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'bottom' && $margin == 'both' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="bottom-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'full' && $margin == 'top' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="full-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'full' && $margin == 'bottom' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="full-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'full' && $margin == 'both' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="full-padding top-bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'both' && $margin == 'top' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="full-padding top-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'both' && $margin == 'bottom' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="full-padding bottom-margin">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'both' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="top-bottom-padding">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'top' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="top-padding">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

elseif ( $padding == 'bottom' ):

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="bottom-padding">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

else :

if ( get_field('content_editor') ): ?>
<div class="white-bg">
	<div class="full-padding">
		<?php the_field('content_editor'); ?>
	</div>
</div>
<?php endif;

endif; ?>