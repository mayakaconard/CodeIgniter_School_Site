<section class="footer-section" style="background-color: #B3CC58;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <h4 class="text-headline text-light">Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="<?php echo site_url('Site/index');?>">Home</a></li>
                    <li><a href="<?php echo site_url('Site/About_us');?>">About the school</a></li>
                    <li><a href="<?php echo site_url('Site/Mission');?>">School Vision And Mission</a></li>
                    <li><a href="<?php echo site_url('Site/Location');?>">Our Location</a></li>
                    <li><a href="<?php echo site_url('Site/Admission');?>">Admissions</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4">
                <h4 class="text-headline text-light">Explore Management</h4>
                <ul class="list-unstyled">
                    <li><a href="<?php echo site_url('Site/Principal');?>">The Principal</a></li>
                    <li><a href="<?php echo site_url('Site/Deputy_Principal');?>">The Deputy Principal</a></li>
                    <li><a href="<?php echo site_url('Site/Board');?>">BOM Body</a></li>
                    <li><a href="<?php echo site_url('Site/PTA');?>">PTA Body</a></li>
                    <li><a href="<?php echo site_url('Site/Student_leaders');?>">Student leaders</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4">
                <h4 class="text-headline text-light">Newsletter</h4>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter email here...">
                                <span class="input-group-btn">
                                <button class="btn btn-grey-800" type="button">Subscribe</button>
                              </span>
                    </div>
                </div>
                <br/>
                <p>
                    <a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn btn-pink-500 btn-circle"><i class="fa fa-dribbble"></i></a>
                    <a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a>
                </p>

                <p class="text-subhead">
                    &copy; <?php echo date('Y');?> St MAthias Mulumba Secondary School.
                </p>

            </div>
        </div>
    </div>
   
</section>

<!-- Footer -->
<footer class="footer">
    <strong>St. Mathias Mulumba</strong> version1.1.0 &copy; Copyright <?php echo date('Y'); ?> Delevoloped By <b>Mayaka Conard - 0720875292</b>
</footer>
<!-- // Footer -->

    <!-- Inline Script for colors and config objects; used by various external scripts; -->
    <script>
        var colors = {
    "danger-color": "#e74c3c",
    "success-color": "#81b53e",
    "warning-color": "#f0ad4e",
    "inverse-color": "#2c3e50",
    "info-color": "#2d7cb5",
    "default-color": "#6e7882",
    "default-light-color": "#cfd9db",
    "purple-color": "#9D8AC7",
    "mustard-color": "#d4d171",
    "lightred-color": "#e15258",
    "body-bg": "#f6f6f6"
};
        var config = {
            theme: "html",
            skins: {"default":{"primary-color":"#42a5f5"}}
        };
    </script>

    <!-- Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
    <!-- <script src="js/vendor/all.js"></script> -->



        <!-- Vendor Scripts Standalone Libraries -->
        <!-- <script src="js/vendor/core/all.js"></script> -->
                <script src="<?php echo base_url();?>assets/js/vendor/core/jquery.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/bootstrap.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/breakpoints.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/jquery.nicescroll.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/isotope.pkgd.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/packery-mode.pkgd.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/jquery.grid-a-licious.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/jquery.cookie.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/jquery-ui.custom.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/jquery.hotkeys.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/handlebars.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/jquery.hotkeys.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/load_image.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/jquery.debouncedresize.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/modernizr.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/core/velocity.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/tables/all.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/forms/all.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/media/slick.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/charts/flot/all.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/nestable/jquery.nestable.js"></script>
                <script src="<?php echo base_url();?>assets/js/vendor/countdown/all.js"></script>
                <!-- <script src="js/vendor/angular/all.js"></script> -->


    <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
    <!-- <script src="js/app/app.js"></script> -->


    <!-- App Scripts Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->

    <script src="<?php echo base_url();?>assets/js/app/essentials.js"></script>
            <script src="<?php echo base_url();?>assets/js/app/material.js"></script>
            <script src="<?php echo base_url();?>assets/js/app/layout.js"></script>
            <script src="<?php echo base_url();?>assets/js/app/sidebar.js"></script>
            <script src="<?php echo base_url();?>assets/js/app/media.js"></script>
            <script src="<?php echo base_url();?>assets/js/app/messages.js"></script>
            <script src="<?php echo base_url();?>assets/js/app/maps.js"></script>
            <script src="<?php echo base_url();?>assets/js/app/charts.js"></script>


    <!-- App Scripts CORE [html]:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        app.js already includes main.js so this should be loaded
        ONLY when using the standalone modules; -->
        <script src="<?php echo base_url();?>assets/js/app/main.js"></script>
        <!-- slider scripts-->
        <script src="<?php echo base_url();?>assets/css/slider/js/jssor.js"> </script>
        <script src="<?php echo base_url();?>assets/css/slider/js/jssor.slider.js"> </script>
        <script src="<?php echo base_url();?>assets/css/slider/js/slider.js"> </script>


</body>
</html>