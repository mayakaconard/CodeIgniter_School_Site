

<?php
if (!$this->session->userdata('is_logged_in')){
    redirect('Admin/index');

}




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="St Mathias mulumba A reknown School of Champions">
        <meta name="author" content="">

        <link rel="shortcut icon" href="<?php echo base_url();?>admin/img/single-logo.png">

        <title>St.Mathias | Dashboard</title>

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

        <!-- sweet alerts -->
        <link href="<?php echo base_url();?>admin/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url();?>admin/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>admin/css/helper.css" rel="stylesheet">
        <link href="<?php echo base_url();?>admin/css/style-responsive.css" rel="stylesheet">
            <link href="<?php echo base_url();?>admin/css/datepicker3.css" rel="stylesheet">
        <!-- DataTables -->
        <link href="<?php echo base_url();?>admin/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

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
