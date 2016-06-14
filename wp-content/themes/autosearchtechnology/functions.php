<?php

//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );
//remove_filter( 'comment_text', 'wpautop', 30 );



add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );



function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[class|style],h1[class|style],h2,h3,hr,ul[class],ol[class],li[class],div[class|id|style|link],meta';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}



add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );



function wpb_postsbycategory() {
// the query
    $the_query = new WP_Query( array( 'category_name' => 'blog', 'posts_per_page' => 10 ) );
    $string='';
// The Loop
    if ( $the_query->have_posts() ) {
        $string .= '<div class="postsbycategorymain">';
        while ( $the_query->have_posts() ) {
            $string .= '<ul class="postsbycategory widget_recent_entries">';
            $the_query->the_post();
            if ( has_post_thumbnail() ) {
                $string .= '<li>';
                $string .= '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_post_thumbnail(@$post_id, array( 50, 50) ) . get_the_title() .'</a></li>
                <li class="contentc"> <h2>' . get_the_content('Read more') .'</h2><div class="clear"></div></li>';
            } else {
                // if no featured image is found
                $string .= '<li class="titleb"><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>
                <li class="contentc"> <h2>' . get_the_content('Read more') .'</h2><div class="clear"></div></li>';
            }

            $string .= '<a href='. get_the_permalink() .' class="blogreadmore">Read More</a>';
            $string .= '</ul>';

        }
    } else {
        // no posts found
    }

    $string .= '</div>';

    return $string;

    /* Restore original Post Data */
    wp_reset_postdata();
}
// Add a shortcode
add_shortcode('categoryposts', 'wpb_postsbycategory');

// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

?>
