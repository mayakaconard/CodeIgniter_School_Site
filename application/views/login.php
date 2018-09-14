<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/single-logo.png">

        <title>St.Mathias Mulumba | Login</title>

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>


        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>admin/css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="<?php echo base_url();?>admin/css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="<?php echo base_url();?>admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url();?>admin/assets/ionicon/css/ionicons.min.css" rel="stylesheet">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>admin/assets/morris/morris.css">


        <!-- Custom styles for this template -->
        <link href="<?php echo base_url();?>admin/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>admin/css/helper.css" rel="stylesheet">
        <link href="<?php echo base_url();?>admin/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62751496-1', 'auto');
  ga('send', 'pageview');

</script>

    </head>


    <body>
         <div class="wraper container-fluid">
        <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading">
                   <h3 class="text-center m-t-10"> Sign In <strong>Mathias</strong> </h3>
                </div>
                <?php
                                 if(isset($_SESSION['success'])){
                                     echo  $_SESSION['success'];

                                }
                                 elseif(isset($_SESSION['error'])){
                                    echo $_SESSION['error'];
                                 }

                            ?>

                <form class="form-horizontal m-t-40" method="post" action="<?php echo base_url('Admin/Login');?>">

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="username" required="required" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group ">
                        
                        <div class="col-xs-12">
                            <input class="form-control" name="password" type="password" required="required" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label class="cr-styled">
                                <input type="checkbox" checked="">
                                <i class="fa"></i> 
                                Remember me
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button class="btn btn-purple w-md" name="btn-login" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href="recoverpw.html"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="register.html">Create an account</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url();?>admin/js/jquery.js"></script>
        <script src="<?php echo base_url();?>admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>admin/js/pace.min.js"></script>
        <script src="<?php echo base_url();?>admin/js/wow.min.js"></script>
        <script src="<?php echo base_url();?>admin/js/jquery.nicescroll.js" type="text/javascript"></script>
            

        <!--common script for all pages-->
        <script src="<?php echo base_url();?>admin/js/jquery.app.js"></script>

    
    </body>
</html>
