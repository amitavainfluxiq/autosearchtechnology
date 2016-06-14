<div class="container-fluid topnavbar">

<div class="container">

  <div class="row">

<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 toplogo"> <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""> </a></div>

<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 topmenu">
<nav class="navbar navbar-default">


    <div class="navbar-header">
    
    <span class="responsivemenu">MENU</span>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
     <!--<li><a href="javascript:void(0)">Home</a></li>
        <li><a href="javascript:void(0)"> Products </a></li>
        <li><a href="javascript:void(0)">services </a></li>
        <li><a href="javascript:void(0)">dealers </a></li>
        <li><a href="javascript:void(0)">partners </a></li>
        <li><a href="javascript:void(0)">about </a></li>
        <li><a href="javascript:void(0)">contact </a></li>
         <li><a href="javascript:void(0)">resources  </a></li>
         -->


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
      
 
 
    </div>

</nav>
</div>

<div class="clearfix"></div>

</div>

</div>

</div>



