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

<body>
         <?php

          foreach($admin as $user){
      $firstname = $user['fname'];
      $surname = $user['lname'];
      $name=$firstname.' '.$surname;
      $username= $user['username'];

  }
         ?>
        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="<?php echo site_url('Admin/Dashboard');?>" class="logo-expanded">
                    <img src="<?php echo base_url();?>admin/img/single-logo.png" alt="logo">
                    <span class="nav-label">St. Mathias</span>
                </a>
            </div>
            <!-- / brand -->

            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="<?php if($page_link != '' && $page_link == 'index'){echo 'active';}?>"><a href="<?php echo site_url('Admin/Dashboard');?>"><i class="ion-home"></i> <span class="nav-label">Dashboard</span></a>

                    </li>
                    <li class="<?php if($page_link != '' && $page_link == 'News' || $page_link=='Update_images'){echo 'active';}?>"><a href="#"><i class="ion-flask"></i> <span class="nav-label">Manage Updates</span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('Admin/News');?>">News And Events</a></li>
                            <li><a href="<?php echo site_url('Admin/Update_images');?>">Slider Update</a></li>

                        </ul>
                    </li>
                    <li class="<?php if($page_link != '' && $page_link == 'Directors' || $page_link=='Teachers' || $page_link=='Student_leaders'){echo 'active';}?>"><a href="#"><i class="ion-settings"></i> <span class="nav-label">Academics</span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('Admin/Directors');?>">Department Directors</a></li>
                            <li><a href="<?php echo site_url('Admin/Teachers');?>">Teachers</a></li>
                            <li><a href="<?php echo site_url('Admin/Student_leaders');?>">Student Leaders</a></li>
                        </ul>
                    </li>
                    <li class="<?php if($page_link != '' && $page_link == 'Board' || $page_link=='PTA'){echo 'active';}?>"><a href="#"><i class="ion-compose"></i> <span class="nav-label">Management</span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('Admin/Board');?>">Board (BOM)</a></li>
                            <li><a href="<?php echo site_url('Admin/PTA');?>">PTA Members</a></li>
                        </ul>
                    </li>
                    <li class="<?php if($page_link != '' && $page_link == 'Alumini'){echo 'active';}?>"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Alumini</span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('Admin/Alumini');?>">Registered Alumini</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </aside>
        <!-- Aside Ends-->
        <!--Main Content Start -->
                <section class="content">
                    <!-- Header -->
                    <header class="top-head container-fluid">
                            <button type="button" class="navbar-toggle pull-left">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                            </button>
                            <!-- Right navbar -->
                            <ul class="list-inline navbar-right top-menu top-right-menu">
                                    <!-- mesages -->
                                    <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                    <i class="fa fa-envelope-o "></i>
                                                    <span class="badge badge-sm up bg-purple count">4</span>
                                            </a>

                                    </li>
                                    <!-- /messages -->
                                    <!-- Notification -->
                                    <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                    <i class="fa fa-bell-o"></i>
                                                    <span class="badge badge-sm up bg-pink count">3</span>
                                            </a>

                                    </li>
                                    <!-- /Notification -->

                                    <!-- user login dropdown start-->
                                    <li class="dropdown text-center">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                    <img alt="" src="img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                                                    <span class="username"><?php echo $name; ?> </span> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                                                    <li><a href="#"><i class="fa fa-briefcase"></i>Profile</a></li>
                                                    <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                                    <li><a href="#"><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                                                    <li><a href="<?php echo base_url('Admin/Logout');?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
                                            </ul>
                                    </li>
                                    <!-- user login dropdown end -->
                            </ul>
                            <!-- End right navbar -->

                    </header>
                    <!-- Header Ends -->
