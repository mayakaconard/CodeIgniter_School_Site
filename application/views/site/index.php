
  <br>
<!--<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="">
                <img class="" style="border: 5px solid #BDF5FF;"  src="images/slide1.JPG" alt="Learning Cover" />
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-info"><strong style="font-family: Georgia, serif; align-content: stretch;">Upcoming Events</strong></div>
        </div>
    </div>
    </div>-->
       <div class="container">
     <!--     <div class="row">
               <div class="col-md-12">
                   <div class="alert alert-success">
                       <?php
                       foreach($g as $get_quotes){
                           ?>

                     <marquee>
                            <?php echo $g['daily_qoute'];?>
                       </marquee> </div>
                           <?php
                       }
                       ?>
               </div>
           </div>-->
            <div class="row">
                <div class="col-md-7 col-lg-7  col-sm-12 " style="align-self: center;">
                    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../url(images/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                           </div>

                                <!-- Slides Container -->
                            <div u="slides" style="cursor: move; position: absolute; left: 0px; right: 0px; top: 0px; width: 600px; height: 300px;overflow: hidden;">
                                <?php

                                foreach($slider as $slides)
                                {
                                ?>
                                 <div>
                                        <a u=image href="#"><img src="<?php echo base_url();?>assets/news/<?php echo $slides['photo']; ?>" /></a>
                                        <div u=caption t="*" class="captionOrange">
                                       <?php echo $slides['description'];  ?>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>
                                 <!--  <div>
                                    <a u=image href="#"><img src="<?php echo base_url();?>assets/slides/3.PNG" /></a>
                                    <div u=caption t="*" class="captionOrange">
                                   Students During Assembly with Mr. Nyaumba
                                    </div>
                                </div>
                                  <div>
                                    <a u=image href="#"><img src="<?php echo base_url();?>assets/slides/1.PNG" /></a>
                                    <div u=caption t="*" class="captionOrange">
                                   Students in Group Diiscussion
                                    </div>
                                </div>
                                  <div>
                                    <a u=image href="#"><img src="<?php echo base_url();?>assets/slides/2.PNG" /></a>
                                    <div u=caption t="*" class="captionOrange">
                                   Preparation for games
                                    </div>
                                </div>
                                <div>
                                    <a u=image href="#"><img src="<?php echo base_url();?>assets/slides/DSC07390.JPG" /></a>
                                    <div u=caption t="*" class="captionOrange">
                                        Board members meeting in the school
                                    </div>
                                </div>-->

                             <!--   <div>
                                    <a u=image href="#"><img src="<?php echo base_url();?>assets/slides/principal.JPG" /></a>
                                    <div u=caption t="*" class="captionOrange">
                                   The school principal
                                    </div>
                                </div>

                                <div>
                                    <a u=image href="#"><img src="<?php echo base_url();?>assets/slides/tn_DSC00038.JPG" /></a>
                                    <div u=caption t="*" class="captionOrange">
                                   The new school bus
                                    </div>
                                </div>-->

                            </div>
                                <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
                                    <!-- bullet navigator item prototype -->
                                    <div u="prototype"></div>
                                </div>
                                <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
                                </span>
                                <!-- Arrow Right -->
                                <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
                                </span>

                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="alert alert-info"><strong style="font-family: Georgia, serif; align-content: stretch;">Upcoming Events</strong></div>

                              <?php foreach($events as $e):
                             $date=date('d-m-Y');
                                $day=($e['dated']);
                                $subject=$e['subject'];
                                $event=$e['message'];
                                ?>
                         <div class="news_section">


                                                <div class="news_date">
                                                               <span style="font-size: 13px;"><?php echo $day;?></span>
                                                </div>
                                                <div class="news_content">
                                                                <div class="header_05"><a href="#" style="color: #0066FF"><?php echo $subject;?> </a></div>
                                                        <p><?php echo $event;?>
                                                    </p>
                                                </div>

                                        </div>
                                           <?php
                             endforeach;
                             ?>
                </div>
            </div>
        </div>
    <!-- Jssor Slider End -->
    <br>
    <br><br>
    <div class="clearfix"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="alert alert-info"><strong style="font-family: Georgia, serif; align-content: stretch;">Physical Facilities</strong></div>
                      <?php

                                foreach($facilities as $f)
                                {
                                ?>
                    <div class="panel panel-default">
                         <div class="imgk" style="width:95px; height: 85px; float: left; border: 0px solid #CCC8BF; margin-left: 5px; margin-top: 4px;"><img src="<?php echo base_url();?>assets/news/<?php echo $f['photo'];?>" style="width: 90px; height: 68px; float: left;">
                        </div><p style="font-size:14px; font-style:normal; font-family:Geneva, Arial, Helvetica, sans-serif;padding-left:110px;"><?php echo $f['description']; ?><br><a href="#" style="color: #0066FF">Read More</a><br><br></p>

                    </div>
                     <?php
                                }
                                ?>
            </div>
            <div class="col-md-4">
                <div class="alert alert-info"><strong style="font-family: Georgia, serif; align-content: stretch;">School News </strong></div>
                      <?php

                                foreach($news as $new)
                                {
                                ?>
                    <div class="panel panel-default">
                         <div class="imgk" style="width:95px; height: 85px; float: left; border: 0px solid #CCC8BF; margin-left: 5px; margin-top: 4px;"><img src="<?php echo base_url();?>assets/news/<?php echo $new['photo'];?>" style="width: 90px; height: 68px; float: left;">

                    </div>
                    <p style="font-size:14px; font-style:normal; font-family:Geneva, Arial, Helvetica, sans-serif;padding-left:110px;"><b><?php echo $new['title']; ?></b></p>
                    <p style="font-size:14px; font-style:normal; font-family:Geneva, Arial, Helvetica, sans-serif;padding-left:110px;"><?php echo $new['news']; ?><br><a href="#" style="color: #0066FF">Read More</a><br><br></p>

                    </div>
                     <?php
                                }
                                ?>

            </div>
            <div class="col-md-4">
                <div class="alert alert-info"><strong style="font-family: Georgia, serif; align-content: stretch;">Message from the Principal</strong></div>
                    <div class="panel panel-default">
                        <div class="imgk" style="width:95px; height: 85px; float: left; border: 2px solid #CCC8BF; margin-left: 5px; margin-top: 4px;"><img src="<?php echo base_url();?>assets/images/people/110/woman-9.JPG" style="width: 90px; height: 80px; float: left;">
                        </div><p style="font-size:14px; font-style:normal; font-family:Geneva, Arial, Helvetica, sans-serif;padding-left:110px;">St Mathias Mulumba is a School aiming at producing <b>Quality Intellect</b> students..<br><a href="pages/student-council-commisioning-2015.php" style="color: #0066FF">Read More</a><br><br></p>
                    </div>
                    <div class="panel panel-default">
                        <div class="alert alert-info"><strong style="font-family: Georgia, serif; align-content: stretch;">Message from the BOM Chair</strong></div>
                        <div class="imgk" style="width:95px; height: 85px; float: left; border: 2px solid #CCC8BF; margin-left: 5px; margin-top: 4px;"><img src="<?php echo base_url();?>assets/images/people/110/guy-3.JPG" style="width: 90px; height: 80px; float: left;">
                        </div><p style="font-size:14px; font-style:normal; font-family:Geneva, Arial, Helvetica, sans-serif;padding-left:110px;">As the chair of Board of Management, I would urge students, teachers and parents together with the committee to be united to help the students <b>Achieve their dreams</b> in life..<br><a href="pages/student-council-commisioning-2015.php" style="color: #0066FF">Read More</a><br><br></p>
                    </div>
            </div>

        </div>
    </div>

<!--<div class="container">
    <div class="page-section-heading">
        <h2 class="text-display-1">Features</h2>
        <p class="lead text-muted">Learn about all of the features we offer.</p>
    </div>
    <div class="row" data-toggle="gridalicious">

        <div class="media">
            <div class="media-left padding-none">
                <div class="bg-green-300 text-white">
                    <div class="panel-body">
                        <i class="fa fa-film fa-2x fa-fw"></i>
                    </div>
                </div>
            </div>
            <div class="media-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-headline">Watch Courses Offline</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="media">
            <div class="media-left padding-none">
                <div class="bg-purple-300 text-white">
                    <div class="panel-body">
                        <i class="fa fa-life-bouy fa-2x fa-fw"></i>
                    </div>
                </div>
            </div>
            <div class="media-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-headline">Premium Support</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="media">
            <div class="media-left padding-none">
                <div class="bg-orange-400 text-white">
                    <div class="panel-body">
                        <i class="fa fa-user fa-2x fa-fw"></i>
                    </div>
                </div>
            </div>
            <div class="media-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-headline">Learn from Top Tutors</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="media">
            <div class="media-left padding-none">
                <div class="bg-cyan-400 text-white">
                    <div class="panel-body">
                        <i class="fa fa-code fa-2x fa-fw"></i>
                    </div>
                </div>
            </div>
            <div class="media-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-headline">Lesson Source Files</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="media">
            <div class="media-left padding-none">
                <div class="bg-pink-400 text-white">
                    <div class="panel-body">
                        <i class="fa fa-print fa-2x fa-fw"></i>
                    </div>
                </div>
            </div>
            <div class="media-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-headline">Printed Diploma</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="media">
            <div class="media-left padding-none">
                <div class="bg-red-400 text-white">
                    <div class="panel-body">
                        <i class="fa fa-tasks fa-2x fa-fw"></i>
                    </div>
                </div>
            </div>
            <div class="media-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-headline">New Lessons Every Day</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>-->
<br/>

<div class="page-section bg-white">
    <div class="container">

        <div class="text-center">
            <h3 class="text-display-1">School Details</h3>
            <p class="lead text-muted">School </p>
        </div>
        <br/>

        <div class="slick-basic slick-slider" data-items="4" data-items-lg="3" data-items-md="2" data-items-sm="1" data-items-xs="1">
    <div class="item">
        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
    <div class="panel-body">
        <div class="media media-clearfix-xs">
            <div class="media-left">
                <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-default"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-github"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="media-body">
                <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Github Webhooks for Beginners</a></h4>
                <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="item">
        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
    <div class="panel-body">
        <div class="media media-clearfix-xs">
            <div class="media-left">
                <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-primary"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-primary">
                        <span class="v-center">
                            <i class="fa fa-css3"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-primary btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="media-body">
                <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Awesome CSS with LESS Processing</a></h4>
                <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="item">
        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
    <div class="panel-body">
        <div class="media media-clearfix-xs">
            <div class="media-left">
                <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-brown"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-brown">
                        <span class="v-center">
                            <i class="fa fa-wordpress"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-orange-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="media-body">
                <h4 class="media-heading margin-v-5-3"><a href="website-course.html">WordPress Theme Development</a></h4>
                <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="item">
        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
    <div class="panel-body">
        <div class="media media-clearfix-xs">
            <div class="media-left">
                <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-purple"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-purple">
                        <span class="v-center">
                            <i class="fa fa-jsfiddle"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-purple-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="media-body">
                <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Modular JavaScript with Browserify</a></h4>
                <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="item">
        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
    <div class="panel-body">
        <div class="media media-clearfix-xs">
            <div class="media-left">
                <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-default"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-cc-visa"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="media-body">
                <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Easy Online Payments with Stripe</a></h4>
                <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
            </div>
        </div>
    </div>
</div>
    </div>
</div>


    </div>
</div>

