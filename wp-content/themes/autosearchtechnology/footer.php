<div class="container-fluid mainfooter">
<div class="container">

<div class="footermenu">


<!--<a href="javascript:void(0)">Home</a>
<a href="javascript:void(0)">Products</a>		
<a href="javascript:void(0)">services</a>		
<a href="javascript:void(0)">dealers</a>		
<a href="javascript:void(0)">partners</a>		
<a href="javascript:void(0)">about	</a>	
<a href="javascript:void(0)">contact</a>		
<a href="javascript:void(0)">resources </a>-->

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





                if(count($pages2)>0) {
                    // echo ' <li class="ssd dropdown lidiv'.$ic.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                    echo ' <li class="ssd dropdown lidiv'.$ic.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"> ' . $page->post_title . ' </a>';

                    echo "<ul class=dropdown-menu>";


                    foreach($pages2 as $childpage){


                        echo ' <li class="ln lidiv'.$ic.' "><a href="' . get_page_link($childpage->ID) . '"> ' . $childpage->post_title . ' </a></li>';

                    }
                    echo "</ul>";

                }else{
                    echo ' <li class="ssd lidiv'.$ic.' " ><a  class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                }


                echo "</li>";

                $ic++;


            endforeach;
        }
        ?>

    </ul>
    <div class="clearfix"></div>

</div>

<div class="footertext">We specialize in high traffic organic SEO website solutions for today's independent auto dealers both cash and special finance.</div>
<div class="footersociallink">
<a href="https://twitter.com/AutoSearchTech" target="_blank" class="flink1"></a>
<a href="https://www.facebook.com/Auto-Search-Technologies-Inc-155407756405" target="_blank" class="flink2"></a>
<a href="https://www.linkedin.com/company/693349?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A693349%2Cidx%3A2-1-2%2CtarId%3A1465493843075%2Ctas%3AAuto%20Search%20technologies%20
" target="_blank" class="flink5"></a>
<!--<a href="javascript:void(0)" class="flink4"></a>
<a href="javascript:void(0)" class="flink3"></a>
<a href="javascript:void(0)" class="flink6"></a>	
-->
<div class="clearfix"></div>
</div>


<div class="footercopyright">Copyright 2016 | All Right Reserved by Auto Search Technologies</div>

             
            
    </div>
</div>

