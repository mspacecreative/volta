<?php
add_filter( 'get_post_metadata', 'add_dynamic_post_meta', 10, 4 );
 
/**
 * Add dynamically-generated "post meta" to `\WP_Post` objects
 *
 * This makes it possible to access dynamic data related to a post object by simply referencing `$post->foo`.
 * That keeps the calling code much cleaner than if it were to have to do something like
 * `$foo = some_custom_logic( get_post_meta( $post->ID, 'bar', true ) ); echo esc_html( $foo )`.
 *
 * @param mixed  $value
 * @param int    $post_id
 * @param string $meta_key
 * @param int    $single   @todo handle the case where this is false
 *
 * @return mixed
 *      `null` to instruct `get_metadata()` to pull the value from the database
 *      Any non-null value will be returned as if it were pulled from the database
 */
function add_dynamic_post_meta( $value, $post_id, $meta_key, $single ) {
    $post = get_post( $post_id );
 
    if ( 'page' != $post->post_type ) {
        return $value;
    }
 
    switch ( $meta_key ) {
        case 'verbose_page_template':
            $value = "The page template is " . ( $post->_wp_page_template ?: 'not assigned' );
            break;
    }
 
    return $value;
}