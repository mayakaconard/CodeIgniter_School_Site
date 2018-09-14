<?php
$page_link = pathinfo(curPageURL(),PATHINFO_FILENAME);
function curPageURL() {
    $pageURL = 'http';
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
?>

<!--<li class="<?php if($page_link != '' && $page_link == 'index'){echo 'active';}?>"><a href="index">Home</a></li> -->


<!DOCTYPE html>
<html class="" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="St Mathias Mulumba Secondary School is A girls School which is found in Nyamira County, Borabu Sub-county in Borabu Division.
         The school was started in 1980 with a maximum of 20 Students. Now the capacity of the school is 1000 students">
        <meta name="author" content="">
        <title>St Mathias Mulumba</title>

        <!-- Vendor CSS BUNDLE
        Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
        TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
        <!-- <link href="css/vendor/all.css" rel="stylesheet"> -->

         <!-- slider tyling -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider/css/caption.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider/css/navigator.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/news.css" type="text/css" />

        <!-- Vendor CSS Standalone Libraries
                NOTE: Some of these may have been customized (for example, Bootstrap).
                See: src/less/themes/{theme_name}/vendor/ directory -->
                         <link href="<?php echo base_url();?>assets/css/vendor/bootstrap.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/font-awesome.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/picto.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/material-design-iconic-font.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/datepicker3.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/jquery.minicolors.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/railscasts.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/owl.carousel.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/slick.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/daterangepicker-bs3.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/select2.css" rel="stylesheet">
                        <link href="<?php echo base_url();?>assets/css/vendor/jquery.countdown.css" rel="stylesheet">


<!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
        - The APP CSS CORE styling required by the "html" module, also available with main.css - see below;
        - The APP CSS STANDALONE modules required by the "html" module;
NOTE:
        - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
            It was optimised to load only what is actually used by the "html" module;
            Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
            See src/less/themes/html/app.less
TIP:
        - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
<!-- <link href="css/app/app.css" rel="stylesheet"> -->


<!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
<link href="<?php echo base_url();?>assets/css/app/main.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">


<!-- App CSS Standalone Modules
        As a convenience, we provide the entire UI framework broke down in separate modules
        Some of the standalone modules may have not been used with the current theme/module
        but ALL modules are 100% compatible -->

        <link href="<?php echo base_url();?>assets/css/app/essentials.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/material.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/layout.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/sidebar.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/sidebar-skins.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/navbar.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/messages.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/media.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/charts.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/maps.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/colors-alerts.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/colors-background.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/colors-buttons.css" rel="stylesheet" />
                        <link href="<?php echo base_url();?>assets/css/app/colors-text.css" rel="stylesheet" />


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
<!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 <style>
.required{
color: #FF3333;
}

</style>
</head>
<body>

<!-- Fixed navbar -->

    	<div class="header-top" style="padding: 0px; margin-top: 0px; background-color:#2DCC24;">
                <div class="container" style=" margin-bottom: 0px;">
        			<div class="row">
        				<div class="col-md-2">
        				     <div class="welcm-ht text-center" style="padding-top: 10px;">
                                <a href="index.html" class="ulockd-main-logo"><img src="<?php echo base_url();?>assets/images/logo.JPG" style="width: 80px; height: 100px;" alt=""></a>
                                <p style="font-size: 10px;"><b><i>Eduction is a weapon</i></b></p><br/>
        					</div>

        				</div>
        				<div class="col-md-4">
        				    <div class="welcm-ht text-center">
                                <h1 style="font-size: 24px; text-align: match-parent;"><a href="index.php">&nbsp;&nbsp;ST.MATHIAS MULUMBA SEC. SCHOOL</a></h1><br/>
        					</div>

        				</div>
                        <div class="col-md-4">
        					<div class="welcm-ht text-right ulockd-mrgn1215" style="text-align: center;">
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-phone"></i>+254723713145 </li><br>
                                                    <li><i class="fa fa-envelope-o"></i> info@mulumba.ac.ke</li><br/> <br>
                                                     <li><i class="fa fa-user"></i><a href="<?php echo site_url('Site/Alumini');?>" style="font-style: oblique; color: #0000CD;"> Alumni Registration</a></li>




                                                </ul>
        					</div>
        				</div>

        				</div>

        			</div>
        		</div>

<div class="navbar navbar-primary fixedup navbar-scrolltofixed navbar-size-large navbar-size-xlarge paper-shadow" style="margin-top: 0px; background-color:#B3CC58;" data-z="0" data-animated role="navigation">
    <!--<div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">-->

        <div class="container">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>

                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="nav navbar-nav navbar-nav-margin-left">
                                <!--<li class="dropdown active">    -->
                                    <li class="<?php if($page_link != '' && $page_link == 'index'){echo 'active';}?>"><a href="<?php echo site_url('Site/index');?>">HOME</a>
                                        <!--<a href="<?php echo site_url('Site/index');?>" class="dropdown-toggle" >HOME</a> -->

                                </li>
                                <li class="dropdown <?php if($page_link != '' && $page_link == 'About_us' || $page_link == 'Mission'|| $page_link == 'Admission' || $page_link == 'Location' ){echo 'active';}?>">

                                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">ABOUT US <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                                <li><a href="<?php echo site_url('Site/About_us');?>">Our History</a></li>
                                                <li><a href="<?php echo site_url('Site/Mission');?>">Mission and Vision</a></li>
                                                <li><a href="<?php echo site_url('Site/Admission');?>">Admission</a></li>
                                                <li><a href="<?php echo site_url('Site/Location');?>">Our Location</a></li>
                                        </ul>
                                </li>
                                <li class="dropdown <?php if($page_link != '' && $page_link == 'Board' || $page_link == 'PTA'|| $page_link == 'Principal' || $page_link == 'Deputy_Principal' || $page_link == 'Student_leaders' ){echo 'active';}?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MANAGEMENT <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url('Site/Board');?>">Board of Managers</a></li>
                                            <li><a href="<?php echo site_url('Site/PTA');?>">P.T.A</a></li>
                                            <li><a href="<?php echo base_url('Site/Principal');?>">Principal</a></li>
                                            <li><a href="<?php echo site_url('Site/Deputy_Principal');?>">Deputy Principal</a></li>
                                            <li><a href="<?php echo site_url('Site/Student_leaders');?>">Student Leaders</a></li>
                                        </ul>
                                </li>
                                <li class="dropdown <?php if($page_link != '' && $page_link == 'Studies_director'){echo 'active';}?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">DEPARTMENTS <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                                     <?php foreach($department as $dept){?>
                                                <li><a href="<?php echo base_url('Site/Studies_director/'.$dept['dept_id']);?>"><?php echo $dept['department_name'];?></a></li>
                                                <?php } ?>

                                          <!--      <li><a href="<?php echo site_url('Site/Mathematics_director');?>">Mathematics</a></li>
                                                <li><a href="<?php echo site_url('Site/Sciences_director');?>">Sciences</a></li>
                                                <li><a href="<?php echo site_url('Site/Languages_director');?>">Languages</a></li>
                                                <li><a href="<?php echo site_url('Site/Humanities_director');?>">Humanities</a></li>
                                                <li><a href="<?php echo site_url('Site/Technicals_director');?>">Technicals</a></li>
                                                <li><a href="<?php echo site_url('Site/Guidance_director');?>">Guidance & Counselling</a></li>
                                                <li><a href="<?php echo site_url('Site/Boarding_director');?>">Boarding</a></li>
                                                <li><a href="<?php echo site_url('Site/ICT_director');?>">ICT</a></li>
                                                <li><a href="<?php echo site_url('Site/Sports_director');?>">Games & Sports</a></li>-->

                                        </ul>
                                </li>
                                <li class="<?php if($page_link != '' && $page_link =='Teachers'){echo 'active';}?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACADEMICS <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                                <!--<li><a href="website-directory-grid.html">Performance</a></li> -->
                                                <li><a href="<?php echo site_url('Site/Teachers');?>">Teachers</a></li>
                                        </ul>
                                </li>
                                <li class="<?php if($page_link != '' && $page_link =='Alumini'){echo 'active';}?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ALUMINI <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url('Site/Alumini');?>">Alumini Registration</a></li>
                                                <!--<li><a href="essential-icons.html">Notable Alumini</a></li> -->
                                        </ul>
                                </li>
                        </ul>

                </div><!-- /.navbar-collapse -->

        </div>
</div>

