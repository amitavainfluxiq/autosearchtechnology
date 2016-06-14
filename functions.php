<?php

//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );
//remove_filter( 'comment_text', 'wpautop', 30 );

function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[class|style],h1[class|style],h2,h3,hr,ul[class],li[class],div[class|id|style|link],meta';

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


add_filter( 'rwmb_meta_boxes', 'YOURPREFIX_register_meta_boxes' );

function YOURPREFIX_register_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'More Info', 'textdomain' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
                'id'   => 'title',
                'name' => __( 'Title', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
                'id'      => 'metatagval',
                'name'    => __( 'Meta', 'textdomain' ),
                'type'    => 'textarea',

            ),

        ),
    );
    return $meta_boxes;
}



?>
