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

            $the_query->the_post();
            //var_dump( get_the_ID()); exit;

            $metaval=(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_2_fieldID_1_numInSet_0']);
            $postimg=(get_post_meta( intval($metaval[0]) )['_wp_attached_file'][0]);
            if($postimg== NULL){
                $postimg='http://ast.influxiq.com/wp-content/themes/autosearchtechnology/images/logo.png';

            }
            else $postimg="/wp-content/uploads/".$postimg;
            //var_dump(get_post_meta( 424 ));

            /*echo '<pre>';
            print_r($postimg);
            echo '</pre>';*/
            $string .= '<ul class="postsbycategory widget_recent_entries">';
            //$the_query->the_post();
            if ( has_post_thumbnail() ) {

                $string .= '<li>';
                $string .= '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_post_thumbnail(@$post_id, array( 50, 50) ) . get_the_title() .'</a></li>
                <li class="contentc"> <h2>' . get_the_content('Read more') .'</h2><div class="clear"></div></li>';
            } else {
                // if no featured image is found
                $string .= '<li class="titleb"><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>
                <li class="contentc"> <h2><img src='.$postimg.' />' . wp_trim_words(get_the_content(),100) .'</h2><div class="clear"></div></li>';
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

function my_widget_content_wrap($content) {
    $content = '<div class="some-other-div">'.$content.'</div>';
    return $content;
}
add_filter('widget_text', 'my_widget_content_wrap');

?>
