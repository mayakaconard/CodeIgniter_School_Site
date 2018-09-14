     <div class="page-section equal">
    <div class="container">
        <div class="page-section-heading">
            <?php
            if($directors->num_rows()!=""){
            foreach($directors->result_array() as $director){
            $name=$director['title'].' '.$director['surname'].' '.$director['first_name'].' '.$director['middle_name'];
            $department=$director['department_name'];
            $about= $director['about'];
            $objectives=$director['objectives'];
            $passport=$director['passport'];
         }
          ?>
        <h2 class="text-display-1"> DEPARTMENT OF&nbsp;<?php echo $department;?></h2>
    </div>
<div class="panel panel-default curriculum open paper-shadow" data-z="0.5">
    <div class="panel-heading panel-heading-gray" data-toggle="collapse">
        <div class="media">
            <div class="media-left">
                <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
            </div>
                 <div class="media-body">
                <h4 class="text-headline"><?php echo $name ;?></h4>
                <hr style="width: 100%; height: 1px; background-color: #FF00CC">
               	<!--<section class="ulockd-feature-box">  -->

			<div class="row">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="">
						<div class="">
							<img src="<?php echo base_url();?>assets/news/<?php echo $passport; ?>" alt="1.png">
							<h4><span class="text-thm2">Director of&nbsp;&nbsp; <?php echo $department;?></span>&nbsp;&nbsp;Department</h4>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12 ">
					<div class="about-box">
						<div class="title">
							<h2 class="ulockd-mrgn120">About the department</h2>
						</div>
						<div class="">
							<p class="text-capitalize"><?php echo $about;?>.</p>
							<h4 class="ulockd-mrgn120">Main Objectives and duties </h4>
							<p class="text-capitalize"><?php echo $objectives; ?></p>
						</div>
					</div>
				</div>

			</div>

   <!--	</section>-->
            </div>
        </div>
    </div>

</div>
       <?php }
       else{
           ?>

           <div class="alert alert-warning">Sorry. No data</div>
           <?php
       }
       ?>
    </div>
     </div>

<br/>