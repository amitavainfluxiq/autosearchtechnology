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
    $the_query = new WP_Query( array( 'category_name' => 'blog', 'posts_per_page' => 300 ,'order'=>'DESC','orderby'=>'date' ) );
    $string='';
// The Loop
    if ( $the_query->have_posts() ) {
        $string .= '<div class="postblog1 postsbycategorymain">';
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

                // if no featured image is found
                $string .= '
                <li class="contentc"> <h2><div class="contentcimgwrapper"><img src='.$postimg.' /></div>
                <div class="titleb"><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></div><div class="mapost_date">'.get_the_date().'</div>
                ' . wp_trim_words(get_the_content(),150) .'</h2><div class="clear"></div></li>';


            $string .= '<a href='. get_the_permalink() .' class="blogreadmore">Read More</a>
            <div class="bottomsharethis">
            <span class="st_sharethis_large" displayText="ShareThis"></span>
            <div class="mapost_link_sharethise" >
                                 <span class="st_facebook_large" displayText="Facebook"></span>
                                 <span class="st_twitter_large" displayText="Tweet"></span>
                                 <span class="st_linkedin_large" displayText="LinkedIn"></span>
                                 <span class="st_pinterest_large" displayText="Pinterest"></span>
                                 <span class="st_email_large" displayText="Email"></span>
                            </div>

            </div>

            ';
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


function wpb_homeblogposts() {
// the query
    $the_query = new WP_Query( array( 'category_name' => 'blog', 'posts_per_page' => 300 ,'order'=>'DESC','orderby'=>'date' ) );
    $string='';
// The Loop
    if ( $the_query->have_posts() ) {
        $string .= '<div class="homepostblog1">';
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
            //$string .= '<ul class="postsbycategory widget_recent_entries">';
            //$the_query->the_post();

            // if no featured image is found
           /* $string .= '
                <li class="contentc"> <h2><div class="contentcimgwrapper"><img src='.$postimg.' /></div>
                <div class="titleb"><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></div>
                ' . wp_trim_words(get_the_content(),100) .'</h2><div class="clear"></div></li>';*/
            $string .='<div class="block2rightconbox">
            <div class="blogimghome">
<img class="block2rightcarimg" src="'.$postimg.'" /></div>
<h2>'.wp_trim_words(get_the_title(),50).'</h2>
<p><span class="homeblockdate">'.get_the_date().'</span></p>
<p>' . wp_trim_words(get_the_content(),80) .'</p>
<p><a class="homeblocklinksml" href="'.get_the_permalink().'">Read More</a></p>
</div>';


           /* $string .= '<a href='. get_the_permalink() .' class="blogreadmore">Read More</a>
            <div class="bottomsharethis">
            <span class="st_sharethis_large" displayText="ShareThis"></span>
            <div class="mapost_link_sharethise" >
                                 <span class="st_facebook_large" displayText="Facebook"></span>
                                 <span class="st_twitter_large" displayText="Tweet"></span>
                                 <span class="st_linkedin_large" displayText="LinkedIn"></span>
                                 <span class="st_pinterest_large" displayText="Pinterest"></span>
                                 <span class="st_email_large" displayText="Email"></span>
                            </div>
            <div class="mapost_date">'.get_the_date().'</div>
            </div>

            ';*/
            //$string .= '</ul>';

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
add_shortcode('categoryposts1', 'wpb_homeblogposts');

// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');


?>
