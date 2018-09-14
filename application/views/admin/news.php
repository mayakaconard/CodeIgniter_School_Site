


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="page-title">
                    <h3 class="title">St. Mathias Mulumba Admin Dashboard</h3>
                </div>



                <!-- <div class="container"> -->
                       <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-0 b-0">
                                            <div class="panel panel-color panel-primary">
                                                <div class="panel-heading">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                    <h3 class="panel-title">Add School News</h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Insert_news');?>">
                                                        <div class="form-group">
                                                            <label for="title">News Title</label>
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="photo">Photo</label>
                                                            <input type="file" name="photo" class="form-control" id="photo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="news">News</label>
                                                            <textarea class="form-control" name="news" id="news" placeholder="Enter news here"> </textarea>
                                                        </div>
                                                        <div class="form-froup">
                                                          <button type="submit" name="save" class="btn btn-purple">Submit</button>
                                                        </div>

                                                    </form>
                                                </div> <!-- col-->
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                     <div id="panel-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-0 b-0">
                                            <div class="panel panel-color panel-primary">
                                                <div class="panel-heading">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                    <h3 class="panel-title">Add Upcoming Events</h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/Insert_events');?>">
                                                        <div class="form-group">
                                                            <label for="title">Subject</label>
                                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject">
                                                        </div>
                                                          <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-start-date="-1d">
                                                             <label for="">Happening on:  <span class="required"></span></label>
                                                             <input type="text" name="date" id="date" class="form-control" readonly="readonly" value="" editable="false"/>
                                                            <span class="input-group-btn"><button class="btn default" type="button"> <i class="fa fa-calendar"></i></button>
                                                            </span>
                                                            </div>
                                                        <div class="form-group">
                                                            <label for="event">Event</label>
                                                            <textarea class="form-control" name="event" id="event" > </textarea>
                                                        </div>

                                                        <button type="submit" name="save" class="btn btn-purple">Submit</button>
                                                    </form>
                                                </div> <!-- col-->
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->



                      <?php
                                 if(isset($_SESSION['success'])){
                                     echo  $_SESSION['success'];

                                }
                                 elseif(isset($_SESSION['error'])){
                                    echo $_SESSION['error'];
                                 }

                            ?>
                     <br>
                 <div class="row">
                     <div class="col-lg-6">
                          <button class="btn btn-success btn-rounded m-b-5" data-toggle="modal" data-target="#panel-modal"><i class="fa fa-edit"></i>Add news</button>
                        </div>
                        <div class="col-lg-12">
                        <div class="portlet">
                            <div class="portlet-heading bg-info">
                                <h3 class="portlet-title">
                                    News Posted
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#bg-primary"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="bg-primary" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Photo</th>
                                                    <th>Title</th>
                                                    <th>News</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <?php
                                            $count=1;
                                            foreach($news as $n){
                                            $date=date('d-m-Y');
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $count;?></td>
                                                    <td><img src="<?php echo base_url();?>assets/news/<?php echo $n['photo'];?>" alt="" style="height: 60px; width: 70px;"/></td>
                                                    <td><?php echo $n['title'];?></td>
                                                    <td><?php echo $n['news'];?></td>
                                                    <td><?php echo $n['date_posted'];?></td>
                                                    <td>

                                                    <div class="btn-group">
                                                       <a href="" class="btn btn-danger" data-target="#delnews<?php echo $n['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>
                                                        <a href="" class="btn btn-warning" data-target="#update<?php echo $n['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a>
                                                    </div>


                                                        </td>

                                                               <!-- DELETE NEWS -->
                                               <div id="delnews<?php echo $n['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content p-0 b-0">
                                                            <div class="panel panel-color panel-primary">
                                                                <div class="panel-heading">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                                    <h3 class="panel-title">Delete Selected News</h3>
                                                                </div>
                                                                <div class="panel-body">
                                                                     <!-- Basic example -->
                                                                <div class="col-md-12">
                                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/delete_news/'.$n['id']);?>">
                                                                       <h3>Are you sure To delete this Record?</h3>

                                                                       	<div class="modal-footer">
                                                                            <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">No</button>
                                                                            <button type="submit" name="delete" class="btn btn-danger">Yes</button>
                                                                            </div>
                                                                    </form>
                                                                </div> <!-- col-->
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                <!-- END DELETE NEWS -->

                                <!-- UPDATE NEWS -->
                                <div id="update<?php echo $n['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-0 b-0">
                                            <div class="panel panel-color panel-primary">
                                                <div class="panel-heading">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                    <h3 class="panel-title">Delete Selected News</h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/update_news/'.$n['id']);?>">
                                                      <div class="form-group">
                                                                <label for="title">News Title</label>
                                                                <input type="text" class="form-control" name="title" id="title" value=" <?php echo $n['title'];?>">
                                                            </div>
                                                             <div class="form-group">
                                                                <label for="photo">Photo</label>
                                                                <input type="file" name="photo" class="form-control" id="photo">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="news">News</label>
                                                                <textarea class="form-control" name="news" id="news" placeholder="Enter news here"><?php echo $n['news'];?> </textarea>
                                                            </div>

                                                       	<div class="modal-footer">
                                                            <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">No</button>
                                                            <button type="submit" name="delete" class="btn btn-danger">Yes</button>
                                                            </div>
                                                    </form>
                                                </div> <!-- col-->
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <!-- END&nbsp;UPDATE&nbsp;NEWS -->

                                                </tr>

                                                <?php
                                                $count++;
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


                  <div class="row">
                   <div class="col-lg-6">
                          <button class="btn btn-success btn-rounded m-b-5" data-toggle="modal" data-target="#panel-modal2" ><i class="fa fa-edit"></i>Add Event</button>
                        </div>
                 <div class="col-lg-12">
                        <div class="portlet">
                            <div class="portlet-heading bg-info">
                                <h3 class="portlet-title">
                                    Upcoming Events
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#bg-primary"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="bg-primary" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                      <table id="datatable2" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                     <th>No.</th>

                                                    <th>Subject</th>
                                                    <th>Event</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                           <?php
                                           $count=1;
                                           foreach($events as $e):

                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $count;?></td>

                                                    <td><?php echo $e['subject'];?></td>
                                                    <td><?php echo $e['message'];?></td>
                                                    <td><?php echo $e['dated'];?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                           <a href="" class="btn btn-danger" data-target="#delevent<?php echo $e['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>
                                                            <a href="" class="btn btn-warning" data-target="#update2<?php echo $e['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a>
                                                        </div>

                                                    </td>
                                                                    <!-- DELETE EVENTS -->
                                               <div id="delevent<?php echo $e['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content p-0 b-0">
                                                            <div class="panel panel-color panel-primary">
                                                                <div class="panel-heading">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                                    <h3 class="panel-title">Delete Selected News</h3>
                                                                </div>
                                                                <div class="panel-body">
                                                                     <!-- Basic example -->
                                                                <div class="col-md-12">
                                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/delete_events/'.$e['id']);?>">
                                                                       <h3>Are you sure To delete this Record?</h3>

                                                                       	<div class="modal-footer">
                                                                            <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">No</button>
                                                                            <button type="submit" name="delete" class="btn btn-danger">Yes</button>
                                                                            </div>
                                                                    </form>
                                                                </div> <!-- col-->
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                <!-- END DELETE EVENTS -->

                                <!-- UPDATE EVENTS -->
                                <div id="update2<?php echo $e['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-0 b-0">
                                            <div class="panel panel-color panel-primary">
                                                <div class="panel-heading">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                    <h3 class="panel-title">Update Selected Event</h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/update_events/'.$e['id']);?>">
                                                      <div class="form-group">
                                                                <label for="subject">Event Title</label>
                                                                <input type="text" class="form-control" name="subject" id="subject" value=" <?php echo $e['subject'];?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message">Message</label>
                                                                <textarea class="form-control" name="message" id="message" placeholder="Enter news here"><?php echo $e['message'];?> </textarea>
                                                            </div>

                                                       	<div class="modal-footer">
                                                            <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">No</button>
                                                            <button type="submit" name="delete" class="btn btn-danger">Yes</button>
                                                            </div>
                                                    </form>
                                                </div> <!-- col-->
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <!-- END&nbsp;UPDATE&nbsp;EVENTS -->
                                                </tr>
                                                <?php
                                                 $count++; 
                                                endforeach;

                                                ?>
                                            </tbody>
                                        </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>














            <!--</div>   -->




