<?php
// Make the search to index custom
/**
 * Extend WordPress search to include custom fields
 * http://adambalee.com
 *
 * Join posts and postmeta tables
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;
    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;
    if ( is_search() ) {
        return "DISTINCT";
    }
    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

add_filter( 'wp_trim_words', 'wpso36236774_trim_words', 10, 4 );
/* Trims text to a certain number of words.
 * @author Jevuska
 * @version 1.0.1
 *
 * Kepp shortcode if exist in text.
 * Combination function of strip_shortcodes and wp_trim_words
 * Default $num_words = 55
 *
 ** USAGE
 ** Using directly
 ** wpso36236774_trim_words( $text, 56 )
 ** wpso36236774_trim_words( $text, 56, null, false, false, true ) - return array
 ** Shortcode hidden if $num_words is not set or if set with value = 55 with 4 arguments
 **
 ** Use wp_trim_words
 ** wp_trim_words( $text, $num_words = 56 )
 ** Fire wp_trim_words
 ** Shortcode hidden if $num_words is not set or $num_words = 55
 ** Position always in bottom
 ** add_filter( 'wp_trim_words', 'wpso36236774_trim_words', 10, 4 );
 *
 * @param  string  $text             Text to trim.
 * @param  int     $num_words        The number of words to trim the text to. Default 5.
 * @param  string  $more             An optional string to append to the end of the trimmed text, e.g. &hellip;.
 * @param  string  $original_content The text before it was trimmed.
 * @param  mix     $pos              Shortcode Position. You can set 'top' value if using directly
 * @param  boolean $count            Get word count
 * @return string  The text after the filter witch $num_words
 * @return array   If using directly and parameter $count set to true
 */
function wpso36236774_trim_words( $text, $num_words = 55, $more = null, $original_content = false, $pos = false, $count = false )
{
    if ( null === $more)
        $more = ' ' . '[&hellip;]';

    $shortcode = $strip_shortcode = true;

    if ( ! $original_content )
        $original_content = $text;

    $text = $original_content;

    /* Check existing shortcode
     *
     */
    if ( false === strpos( $text, '[' ) )
        $strip_shortcode = false;

    global $shortcode_tags;

    if ( empty( $shortcode_tags ) || ! is_array( $shortcode_tags ) )
        $strip_shortcode = false;

    /* Strip content from shortcode
     *
     */
    if ( $strip_shortcode )
    {
        preg_match_all( '@\[([^<>&/\[\]\x00-\x20=]++)@', $text, $matches );
        $tagnames = array_intersect( array_keys( $shortcode_tags ), $matches[1] );

        if ( ! empty( $tagnames ) )
        {
            $text = do_shortcodes_in_html_tags( $text, true, $tagnames );
            $pattern = get_shortcode_regex( $tagnames );
            preg_match_all( "/$pattern/", $text, $match );
            if ( ! empty( $match[0] ) && is_array( $match[0] ) )
            {
                $shortcode = '';
                $length    = count( $match[0] );
                for ( $i = 0 ; $i < $length; $i++ )
                    $shortcode .= do_shortcode( $match[0][ $i ] ); //match shortcode
            }

            $text = preg_replace_callback( "/$pattern/", 'strip_shortcode_tag', $text );
            $text = unescape_invalid_shortcodes( $text );
        }
    }

    /* Hide shortcode
     * Base on count function arguments
     *
     */
    if ( func_num_args() == 1 || ( func_num_args() == 4 && 55 == $num_words ) )
         $shortcode = '';

    /* Split content into array words
     *
     */
    $text = wp_strip_all_tags( $text );

    /*
     * translators: If your word count is based on single characters (e.g. East Asian characters),
     * enter 'characters_excluding_spaces' or 'characters_including_spaces'. Otherwise, enter 'words'.
     * Do not translate into your own language.
     */
    if ( strpos( _x( 'words', 'Word count type. Do not translate!' ), 'characters' ) === 0 && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) )
    {
        $text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
        preg_match_all( '/./u', $text, $words_array );
        $limit_words_array = array_slice( $words_array[0], 0, $num_words + 1 );
        $full_words_array  = $words_array[0];
        $sep = '';
    }
    else
    {
        $limit_words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
        $full_words_array  = explode( ' ', preg_replace( "/[\n\r\t ]+/", ' ', $text ) );
        $sep = ' ';
    }

    /* Check word count base on $num_words
     *
     */
    $word_count = count( $full_words_array );
    if ( $word_count >= $num_words )
    {
        array_pop( $limit_words_array );
        $text  = implode( $sep, $limit_words_array );
        $text .= $more;

        /* keep shortcode if exists and set position ( top or bottom text )
         *
         */
        switch( $pos )
        {
            case 'top' :
                $text = $shortcode . $text;
                break;

            default :
                $text .= $shortcode;
                break;
        }
    }
    else
    {
        $text = apply_filters( 'the_content', $original_content );
    }

    if ( $count )
        return array(
            'text'  => $text,
            'count' => $word_count
        );

    return $text; //output
}