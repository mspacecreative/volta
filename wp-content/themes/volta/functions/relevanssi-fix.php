<?php

add_filter( 'relevanssi_modify_wp_query', 'rlv_meta_fix', 99 );
function rlv_meta_fix( $q ) {
	$q->set( 'meta_query', array() );
	return $q;
}