<?php
// in this case we have three ACF Relationship fields set up, they have the names
// acf_rel_1, acf_rel_2, and acf_rel_3 (NOTE: these are the NAMES not the labels)
// ACF stores post IDs in one form or another, so indexing them does us no good,
// we want to index the title of the related post, so we need to extract it
function my_searchwp_custom_fields( $customFieldValue, $customFieldName, $thePost ) {
  // by default we're just going to send the original value back
  $contentToIndex = $customFieldValue;
  // check to see if this is one of the ACF Relationship fields we want to process
  if( in_array( strtolower( $customFieldName ), array( 'two_third_column' ) ) ) {
    // we want to index the titles, not the post IDs, so we'll wipe this out and append our titles to it
    $contentToIndex = '';
    // related posts are stored in an array
    if( is_array( $customFieldValue ) ) {
      foreach( $customFieldValue as $relatedPostData ) {
        if( is_numeric( $relatedPostData ) ) { // if you set the Relationship to store post IDs, it's numeric
          $title = get_the_title( $relatedPostData );
          $contentToIndex .= $title . ' ';
        } else { // it's an array of objects
          $postData = maybe_unserialize( $relatedPostData );
          if( is_array( $postData ) && !empty( $postData ) ) {
            foreach( $postData as $postID ) {
              $title = get_the_title( absint( $postID ) );
              $contentToIndex .= $title . ' ';
            }
          }
        }
      }
    }
  }
  return $contentToIndex;
}
add_filter( 'searchwp_custom_fields', 'my_searchwp_custom_fields', 10, 3 );