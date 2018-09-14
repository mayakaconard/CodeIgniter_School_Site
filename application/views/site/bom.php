

    <div class="clearfix"></div>
     <div class="page-section equal">
    <div class="container">

        <div class="page-section-heading">
        <h2 class="text-display-1"> School Board Of Management</h2>
    </div>
<div class="panel panel-default curriculum open paper-shadow" data-z="0.5">
    <div class="panel-heading panel-heading-gray" data-toggle="collapse">
        <div class="media">
            <div class="media-left">
                <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
            </div>
            <div class="media-body">
                <h4 class="text-headline">Message From The Chairman</h4>
                <hr style="width: 100%; height: 1px; background-color: #FF00CC">
                <div class="media">
                    <div class="media-left">
                                <a href="website-instructor-public-profile.html"><img src="<?php echo base_url();?>assets/images/people/110/guy-2.jpg" alt="people"></a>
                            </div>
                    </div>
                <p style="font-family: Georgia, serif; font-style: normal; font-size: 16px; color: #5C3B1B;">

                 On behalf of the B.O.M members, I take this opportunity to congratulate the Principal, his team of very able team teachers and supportive staff for their hard work that has seen the school continue to progressively excel in both academic and co-curricular activities.
                <br>Last year the school achieved a mean score of 7.864, the highest ever since the introduction of 8-4-4 system emerging among the best schools in Meru County. This is the kind of performance that cannot be achieved in an indiscipline environment and I cannot forget to thank our boys for maintaining high level of discipline. <br>
                With continued collaboration of our good parents we can confidently say St Mathias Mulumba is just but the next giant not only within our county but nationally.<br>
                I also wish to thank my fellow B.O.M members for their tireless efforts in assisting the Principal on policy matters that have enabled him achieve the school's targets on yearly basis.<br>
                And in this respect, I am confidently saying: "WATCH THIS SPACE". We will continue to surprise you. Ofcourse in all this we thank God for His favours.<br>
                The following are also members of Board of Managers:

                 </p>
            </div>
        </div>
    </div>

</div>
    </div>
     </div>

<div class="page-section">
    <div class="container">

        <div class="row" data-toggle="isotope">
                <?php
                    foreach($board as $p):

                    $name= $p['title'].' '.$p['first_name'].' '.$p['surname'].' '.$p['middle_name'];
                    $pass= $p['pass'];
                    $message=$p['message'];
                    $position=$p['position'];

                ?>
            <div class="item col-xs-12 col-sm-6 col-lg-3">
                <div class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="website-instructor-public-profile.html"><?php echo $name;?></a></h3>
                    </div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <a href="website-instructor-public-profile.html"><img src="images/news/<?php echo $pass;?>" alt="people"></a>
                            </div>
                            <div class="media-body">
                                <p><?php echo $message;?></p>
                                 <span class="label label-default"><?php echo $position;?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>


    </div>
</div>
<br/>