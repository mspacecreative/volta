<?php

function truncate_text( $text, $words_limit = 55, $more_text = '&hellip;' ) {

    $separator = ' ';

    if ( strpos( _x( 'words', 'Word count type. Do not translate!' ), 'characters' ) === 0 && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
        $text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
        preg_match_all( '/./u', $text, $words_array );
        $words_array = array_slice( $words_array[0], 0, $words_limit + 1 );
        $separator = '';
    } else {
        $words_array = preg_split( "/[\n\r\t ]+/", $text, $words_limit + 1, PREG_SPLIT_NO_EMPTY );
    }

    if ( ! count( $words_array ) > $words_limit ) {
        return implode( $separator, $words_array );
    }

    array_pop( $words_array );
    $text = implode( $separator, $words_array );
    $more_text = '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('read more', 'html5blank') . '</a>';
    return $text . $more_text;
}

function truncate_the_content( $text ) {
    if ( is_singular() ) {
        return $text;
    }

    $text = strip_shortcodes( $text );

    return truncate_text( $text );
}
add_filter('the_content', 'truncate_the_content', 99);