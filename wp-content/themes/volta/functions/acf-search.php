<?php
function custom_search_function( $where, $wp_query ) {
    if ( empty( $where )) {
      return $where;
    }

    // get search expression
    $terms = $wp_query->query_vars['s'];

    // explode search expression to get search terms
    $exploded = explode(' ', $terms);
    if( $exploded === FALSE || count($exploded) === 0 ) {
      $exploded = array( 0 => $terms );
    }

    foreach( $exploded as $tag ) {
        $where .= " OR EXISTS (
          SELECT * FROM wp_terms
            INNER JOIN wp_term_taxonomy ON wp_term_taxonomy.term_id = wp_terms.term_id
            INNER JOIN wp_term_relationships ON wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
            WHERE taxonomy = 'myCustomTax' AND object_id = wp_posts.ID AND wp_terms.name LIKE '%$tag%'
        )";
    }
    return $where;
}

add_filter( 'posts_search', 'search_suggestions_custom_search', 500, 2 );