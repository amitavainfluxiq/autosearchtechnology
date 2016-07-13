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




<div id="zoompopup2" class="modal fade zoomimgwrapper">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

      <img src="<?php echo get_template_directory_uri(); ?>/images/zoom_img2.png" alt="">

                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>


<div id="zoompopup1" class="modal fade zoomimgwrapper">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

      <img src="<?php echo get_template_directory_uri(); ?>/images/zoom_img1.png" alt="">

                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>
<div id="zoompopup3" class="modal fade zoomimgwrapper">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

      <img src="<?php echo get_template_directory_uri(); ?>/images/zoom_img3.png" alt="">

                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>
<div id="zoompopup4" class="modal fade zoomimgwrapper">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

      <img src="<?php echo get_template_directory_uri(); ?>/images/zoom_img4.png" alt="">

                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>
<div id="zoompopup5" class="modal fade zoomimgwrapper">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

      <img src="<?php echo get_template_directory_uri(); ?>/images/zoom_img5.png" alt="">

                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>
<div id="zoompopup6" class="modal fade zoomimgwrapper">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

      <img src="<?php echo get_template_directory_uri(); ?>/images/zoom_img6.png" alt="">

                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>
<div id="zoompopup7" class="modal fade zoomimgwrapper">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

      <img src="<?php echo get_template_directory_uri(); ?>/images/zoom_img7.png" alt="">

                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>
<div id="zoompopup8" class="modal fade zoomimgwrapper">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

      <img src="<?php echo get_template_directory_uri(); ?>/images/zoom_img8.png" alt="">

                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>



<div id="thankyou_popup1" class="thankyou_popup_wrapper modal fade">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">

                <h4>Thank You for your Demo Request</h4>

                <h3>
                    An AST Member will get back to you Shortly

                </h3>


                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>
<div id="thankyou_popup" class="thankyou_popup_wrapper modal fade">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>

                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">

                <h4>Thank You</h4>

                <h3>
                    Thank You for contacting us
                    an AST member will get back to you shortly

                </h3>


                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>








<!--///////////////////////popupblock allpage////////////////////////////-->
<div class="modal fade referrals_popupwrapper" id="popupall1">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>
                <div class="referrals_popup_con">
                    <div class="referrals_text">
                        <img src="/wp-content/themes/autosearchtechnology/images/clientreferrals-img1.png" alt="" />

                        <h2><label>Andrew Gabler, Lakeside Auto Sales, <span>NIADA</span> Region 1 VP, PIADA COTB</label></h2>
                        <h3><p>I have been using Auto Search Technologies since late <span>2008</span>, and I could not be happier! These guys made it very fast and easy for my business to have one of the strongest websites and online presence in my area.</p>
                            <p>I have been at the top of most search engines since coming on board with <span>AST</span>, and have had more <span>4,200,000</span> hits since then.</p>

                            <p>I truly feel that the high qualities of services they offer are second to none for the small investment that I have made. I have and will continue to recommend these guys to everyone.</p></h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <img src="/wp-content/themes/autosearchtechnology/images/referrals_popup1.png" alt="" />
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade referrals_popupwrapper" id="popupall2">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>
                <div class="referrals_popup_con">
                    <div class="referrals_text">
                        <img src="/wp-content/themes/autosearchtechnology/images/clientreferrals-img2.png" alt="" />


                        <h2><label>Chris Martin, Team E-Z Auto, 2012 <span>NIADA</span> President</label></h2>
                        <h3><p>Auto Search Technologies has provided our dealership with fantastic customer service! The website itself is extremely user friendly. We can sign into the website and make changes and updates 24/7. However, if there is something that is beyond our comfort/knowledge level, AST has very quickly resolved those issues for us. All it takes is a quick email to their support center. We also asked for a couple of features on our website that was not offered at the time, and AST was eager to add those features for us.</p>

                            <p>In addition to a great new website, you will also experience a tremendous improvement in Search Engine Optimization (SEO). We had done a good job with SEO prior to using AST, but we are now #1 for several hundred terms and within our first 30 days we have received over 120,000 hits. We were able to see a full R.O.I. the first month online. Thanks AST!!!
                                AST has certainly made a positive difference in our online presence and we are extremely excited about where our relationship will take us in the future!!</p></h3>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <img src="/wp-content/themes/autosearchtechnology/images/referrals_popup2.png" alt="" />
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade referrals_popupwrapper" id="popupall3">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>
                <div class="referrals_popup_con">
                    <div class="referrals_text">
                        <img src="/wp-content/themes/autosearchtechnology/images/clientreferrals-img3.png" alt="" />

                        <h2><label>Dan Reel, Reel's Auto Sales, <span>NIADA</span> CMD, 2012 OIADA President</label></h2>
                        <h3><p>Auto Search Technologies has been amazing for my dealership. The website that the folks at AST created for me has generated countless leads, and includes features like an online payment portal, great craigslist templates, window stickers and more. These guys are upfront and transparent about everything including what their product can, and will do for your dealership all the way to pricing.</p>

                            <p>I am proud to say that I have been with AST since 2008 and have never looked back. I would absolutely recommend Auto Search Technologies to any dealer, rookie or veteran.
                                If you have a website with someone besides them, I encourage you to open your site and a site built by AST and see the difference. Give them a call and you will see an amazing product with knowledge and customer support to match.</p></h3>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <img src="/wp-content/themes/autosearchtechnology/images/referrals_popup3.png" alt="" />
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade referrals_popupwrapper" id="popupall4">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>
                <div class="referrals_popup_con">
                    <div class="referrals_text">
                        <img src="/wp-content/themes/autosearchtechnology/images/clientreferrals-img4.png" alt="" />

                        <h2><label>Dave Allen, <span>Auto Brokers</span> MT, 2011 MT Quality Dealer of The Year</label></h2>
                        <h3><p>A little over 7 years ago, I was in need of a new way to conduct my business (I needed a web presence) as business had become more and more competitive. I had been told about your product, but I was leery until you took me through your demonstration. I understand the internet and was so impressed by your presentation and your explanation I purchased the product right then. I liked the idea of owning my own site and having full control over its content. I also invested in the company at that time as I recognized the need of a company that caters only to automobile dealers.</p>


                            <p>I immediately began to see results (I had been with other national companies with very little result for the $$$$ spent) and found that I was placing higher in Google searches than even the paid listing services.</p>

                            <p>I have been surprised at how many of my customers look over my inventory before they come in or call. Many customers have made comments about the ease of navigation of my website. I could go on and on, but if anyone has any questions you may contact me anytime!</p>
                        </h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <img src="/wp-content/themes/autosearchtechnology/images/referrals_popup4.png" alt="" />
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade referrals_popupwrapper" id="popupall5">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>
                <div class="referrals_popup_con">
                    <div class="referrals_text">
                        <img src="/wp-content/themes/autosearchtechnology/images/clientreferrals-img5.png" alt="" />

                        <h2><label>John DeFilippo, <span>DeFilippo Bros</span>. Motor Cars, 2012 PIADA Treasurer</label></h2>
                        <h3></h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <img src="/wp-content/themes/autosearchtechnology/images/referrals_popup5.png" alt="" />
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade referrals_popupwrapper" id="popupall6">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>
                <div class="referrals_popup_con">
                    <div class="referrals_text">
                        <img src="/wp-content/themes/autosearchtechnology/images/clientreferrals-img6.png" alt="" />

                        <h2><label>Mike Linn, <span>NIADA</span>, CEO</label></h2>
                        <h3><p><span>NIADA</span> applauds Michael Jackson and his staff at AST for all of their time and relentless efforts the past four years in creating and engineering not only our national website at www.niada.com, but also for their time and dedication in designing and enhancing many of our state association websites over the years. We are very proud to welcome AST as our newest Gold National Corporate Partner in 2013 and we encourage our dealer members looking for website enhancements and advanced online search capabilities to contact AST.</p></h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <img src="/wp-content/themes/autosearchtechnology/images/referrals_popup6.png" alt="" />
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade referrals_popupwrapper" id="popupall7">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>
                <div class="referrals_popup_con">
                    <div class="referrals_text">
                        <img src="/wp-content/themes/autosearchtechnology/images/clientreferrals-img7.png" alt="" />

                        <h2><label>Scott Allen, Auto Land, 2011 <span>NIADA</span> Quality Dealer Of The Year</label></h2>
                        <h3><p>My name is Scott Allen, and I am the owner of “Auto Land” in Fort Worth TX. I could not be more pleased with AST and its staff and crew for all that they have been able to do for me over the years. I started with AST back in the early summer of 2008, and was skeptical of their claims due to how affordable they were, however I had peace in the fact that the knowledge that they had about the internet was light years beyond what I had seen anywhere else or personally knew. I was able to see a 100% return within the first few months of going online, and have finally stopped keeping track once it happened again another 20+ times over the first several years. I would recommend any dealership that is interested in getting a website online to talk to Auto Search when in the market for a website. My website allows me the ability to edit and make changes to it whenever I want with a coupe clicks of the mouse and I can make sure that I am in driver’s seat. Thanks AST!</p></h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <img src="/wp-content/themes/autosearchtechnology/images/referrals_popup7.png" alt="" />
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade referrals_popupwrapper" id="popupall8">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <a class="close" data-dismiss="modal">×</a>
                <div class="referrals_popup_con">
                    <div class="referrals_text">
                        <img src="/wp-content/themes/autosearchtechnology/images/clientreferrals-img8.png" alt="" />

                        <h2><label>Wilt Leak, <span>Magnolia Motor Company</span>, GSM</label></h2>
                        <h3><p>I have no affiliation with AST other than being a pleased customer for almost two years. I've got a small dealership here in Magnolia, Arkansas. I generally stock around 35-40 units at any given time. Magnolia Motor Company isn't some large super store that has thousands and thousands of dollars to throw at advertising every month to generate the needed foot traffic to cover our overhead. Were like any other small independent dealer that has to watch and optimize every advertising dollar. Technology is constantly changing and especially in today's market with so many different ways to interact with potential customers online.</p>

                            <p>Instead of throwing hundreds if not thousands of dollars toward different online companies such as Autotrader.com and Cars.com, I've found that focusing on your direct market, through your own independent website, can and will drive more traffic to your store, and provide a more consistent buying customer.</p>
                            <p>I began utilizing Autotrader.com back in 2003 and saw 2-3 additional sales per month because of it and I also began using Cars.com a few years later with the same results, about two extra sales per month. Writing a couple of checks every month for about $1000 was a hard. It became especially hard when I could see sales were beginning to taper off from those sites. I was getting plenty of leads and inquiries, but no solid buyers. Internet window shoppers if you will, working me to no end and not getting any sales to show for it. Getting someone to travel three, four or even a thousand miles away to buy a vehicle is great dinner conversation, but its not paying the bills.</p>
                            <p>I was told about Auto Search Technologies by my executive director for the state dealers association. I could tell right away that these folks were different than other website companies that I had been dealing with in the past. The possibilities are endless as to what you can do with the website. I got tickled when they told me that within a year I wouldn't need any other site to sell cars off of.</p>
                            <p>I signed up in May 2007 and in March 2008 I cancelled my Autotrader.com and Cars.com subscription. It proved to be that good. I wasn't generating those far off leads as Autotrader.com was, but rather the quality local leads had increased tremendously. When I say local, I'm speaking of about a 50 mile radius from our dealership. To put things in perspective, I'm selling the same amount of vehicles from my website as I was from Cars.com and Autotrader.com, at a fraction of the cost, and when I say fraction of the cost, I'm talking pennies on the dollar.</p>
                            <p>I'm all about customer service with any vendor, especially internet related. I've yet to call in with a question or concern that I haven't been greeted with a pleasant person who is knowledgeable and understanding. The greatest aspect of it all, is the technology doesn't stop at just your website. Its the behind the scenes that matter the most. Getting a high ranking on a Google search is what helps generate that buying traffic. More and more people will Google a vehicle they are looking for to see what pops up, if you happen to be on that first page, they'll click on that search result and land on your website.</p>
                            <p>The best part of having Auto Search Technologies host your website is that the advancements don't stop once you sign up! They keep enhancing, upgrading, and adding to what is already a phenomenal product. Its been almost Six years I've been with Auto Search Technologies and their staff still stays in touch with me via email and phone calls. That's personalized customer service that is becoming harder and harder to come by in today's market.</p>
                            <p>I would recommend that you give Auto Search Technologies as serious consideration. My business has flourished because the website they produced for me gives my company the clean, professional look that gives anyone that pulls it up confidence in the product I'm selling.</p></h3>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <img src="/wp-content/themes/autosearchtechnology/images/referrals_popup8.png" alt="" />
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>