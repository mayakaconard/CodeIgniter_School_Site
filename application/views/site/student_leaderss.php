

    <div class="clearfix"></div>
     <div class="page-section equal">
    <div class="container">

        <div class="page-section-heading">
        <h2 class="text-display-1"> STUDENT EXECUTIVE COUNCIL</h2>
    </div>
    </div>
     </div>

<div class="page-section">
    <div class="container">

        <div class="row" data-toggle="isotope">
            <?php
                  foreach($students as $st):
                  $name= $st['first_name'].' '.$st['surname'].' '.$st['middle_name'];
                  $pass= $st['passport'];
                  $message=$st['message'];
                  $position=$st['position'];

                  ?>

            <div class="item col-xs-12 col-sm-6 col-lg-3">
                <div class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="website-instructor-public-profile.html"><?php echo $name;?></a></h3>
                    </div>

                    <div class="panel-body">
                       <img src="<?php echo base_url();?>assets/news/<?php echo $st['passport'];?>" alt="people" style="height: 100px; width: 100px;"/> 
                       <!-- <div class="media">   -->
                            <!--<div class="media-left">
                            <img src="<?php echo base_url();?>assets/news/<?php echo $teach['passport'];?>" alt="people" style="height: 50px; width: 50px;"/>
                            </div>-->
                            <!--<div class="media-body">  -->
                                <p><?php echo $message;?>.</p>
                                 <span class="label label-default"><?php echo $position;?></span>
                        <!--    </div>
                        </div>-->
                    <!--</div-->
                </div>
            </div>
        </div>
              <?php endforeach; ?>
        </div>

    </div>
</div>
<br/>