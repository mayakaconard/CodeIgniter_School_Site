

    <div class="clearfix"></div>
     <div class="page-section equal">
    <div class="container">

        <div class="page-section-heading">
        <h2 class="text-display-1"> P.T.A EXECUTIVE MEMBERS</h2>
    </div>
    </div>
     </div>

<div class="page-section">
    <div class="container">
        <div class="row" data-toggle="isotope">
                <?php
                  foreach($pta as $p):
                  $name= $p['title'].' '.$p['first_name'].' '.$p['surname'].' '.$p['middle_name'];
                  $pass= $p['image'];
                  $message=$p['message'];
                  $position=$p['position'];

                ?>
            <div class="item col-xs-12 col-sm-6 col-lg-3">
                <div class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="website-instructor-public-profile.html"><?php echo $name;?></a></h3>
                    </div>
                    <div class="panel-body">


                                <a href="website-instructor-public-profile.html"><img src="<?php echo base_url();?>assets/news/<?php echo $pass;?>" style="height: 100px; width: 100px;" alt="people"></a>

                            <div class="media-body">
                                <p><?php echo $message;?></p>
                                 <span class="label label-default"><?php echo $position;?></span>
                            </div>

                    </div>
                </div>
            </div>
            <?php endforeach;?>


        </div>

    </div>
</div>
<br/>