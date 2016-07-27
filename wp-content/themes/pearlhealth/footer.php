

<div class="container footertopblock">

<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 footertopcon">
    <h2>ADDRESS</h2>
    <p>Lorem Ipsum is of the printing Inc. - 141 S.<br/>
        Pearl Supportive Living,<br/>
        California 00000 - 000.000.0000 </p>

</div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 footertopcon">

     <!--
      <h2>SOCIAL</h2>
      <a href="javascript:void(0)"> <img src="<?php /*echo get_template_directory_uri(); */?>/images/sicon1.png" alt=""> </a>
        <a href="javascript:void(0)"><img src="<?php /*echo get_template_directory_uri(); */?>/images/sicon2.png" alt=""> </a>
        <a href="javascript:void(0)"><img src="<?php /*echo get_template_directory_uri(); */?>/images/sicon3.png" alt=""> </a>
        <a href="javascript:void(0)"><img src="<?php /*echo get_template_directory_uri(); */?>/images/sicon4.png" alt=""> </a>-->


      <a href="/"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="" class="footerlogo"></a>

    </div>


    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 footertopcon">
        <h2>CONTACTS</h2>
        <p>Lorem Ipsum is simply dummy text<br/>
            of the printing
            </p>

    </div>
<div class="clearfix"></div>
 </div>


<div class="container-fluid footerblock">
    <div class="container">

<div class="footermenu">



    <ul>
        <?php
        $args = array(
            'sort_column' => 'post_date',
            'sort_order' => 'asc',
            'child_of' => '0',
            'post_type' => 'page',
            'post_status' => 'publish',
            'parent' => 0,

        );
        $pages = get_pages($args);

        if ($pages) {
            $ic=0;
            foreach ($pages as $page) :



                $args2 = array(
                    'sort_column' => 'post_date',
                    'sort_order' => 'asc',
                    'child_of' => '0',
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'parent' => $page->ID,

                );
                $pages2 = get_pages($args2);



                if ( is_page( $page->ID ) || $post->post_parent == $page->ID ) {
                    $active = 'active';
                } else {
                    $active = '';
                }

                if(count($pages2)>0) {
                    // echo ' <li class="ssd dropdown lidiv'.$ic.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                    echo ' <li class="ssd dropdown lidiv'.$ic.'  '.$active.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"> ' . $page->post_title . ' </a>';

                    echo "<ul class=dropdown-menu>";


                    foreach($pages2 as $childpage){





                        echo ' <li class="ln lidiv'.$ic.'   "><a href="' . get_page_link($childpage->ID) . '"> ' . $childpage->post_title . ' </a></li>';

                    }
                    echo "</ul>";

                }else{
                    echo ' <li class="ssd lidiv'.$ic.' '.$active.' " ><a  class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                }


                echo "</li>";

                $ic++;


            endforeach;
        }
        ?>

    </ul>
    <div class="clearfix"></div>

</div>


<div class="footercopyright">
    &copy; 2016 Pearl Supportive Living

</div>



        <div class="clearfix"></div>

</div></div>