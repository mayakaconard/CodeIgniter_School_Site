


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
                                                    <h3 class="panel-title">Add Image to Slider</h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Slider');?>">
                                                         <div class="form-group">
                                                            <label for="photo">Photo</label>
                                                            <input type="file" class="form-control" name="photo" id="photo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"> </textarea>
                                                        </div>
                                                        <div class="form-froup">
                                                          <button type="submit" name="save" class="btn btn-purple">Add</button>
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
                                                    <h3 class="panel-title">Add school physical facility image</h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Facilities');?>">
                                                         <div class="form-group">
                                                            <label for="photo">Photo</label>
                                                            <input type="file" name="photo" class="form-control" id="photo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="news">Description</label>
                                                            <textarea class="form-control" name="description" id="description"> </textarea>
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
                          <button class="btn btn-success btn-rounded m-b-5" data-toggle="modal" data-target="#panel-modal"><i class="fa fa-edit"></i>Add slider</button>
                        </div>
                        <div class="col-lg-12">
                        <div class="portlet">
                            <div class="portlet-heading bg-info">
                                <h3 class="portlet-title">
                                    Slider Images
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
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                           <?php
                                            $count=1;
                                           foreach($slider as $s):

                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $count;?></td>
                                                    <td><img src="<?php echo base_url();?>assets/news/<?php echo $s['photo'];?>" alt=""style="height: 60px; width: 70px;" /></td>
                                                    <td><?php echo $s['description'];?></td>
                                                    <td>

                                                    <div class="btn-group">
                                                       <a href="" class="btn btn-danger" data-target="#delete<?php echo $s['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>
                                                        <a href="" class="btn btn-warning" data-target="#update<?php echo $s['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a>
                                                    </div>
                                                    </td>

                                                                          <!-- DELETE slider image -->
                                               <div id="delete<?php echo $s['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content p-0 b-0">
                                                            <div class="panel panel-color panel-primary">
                                                                <div class="panel-heading">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                                    <h3 class="panel-title">Delete Selected Slider</h3>
                                                                </div>
                                                                <div class="panel-body">
                                                                     <!-- Basic example -->
                                                                <div class="col-md-12">
                                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/delete_slider/'.$s['id']);?>">
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

                                <!-- END DELETE SLIDER -->

                                <!-- UPDATE SLIDER -->
                                <div id="update<?php echo $s['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-0 b-0">
                                            <div class="panel panel-color panel-primary">
                                                <div class="panel-heading">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                    <h3 class="panel-title">Update Slider </h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/update_slide/'.$s['id']);?>">
                                                            <div class="form-group">
                                                                <label for="description">Description</label>
                                                                <textarea class="form-control" name="description" id="description"><?php echo $s['description'];?> </textarea>
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
                                <!-- END&nbsp;UPDATE&nbsp;SLIDER -->
                                                </tr>
                                                <?php
                                                $count++;
                                                endforeach;?>
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
                          <button class="btn btn-success btn-rounded m-b-5" data-toggle="modal" data-target="#panel-modal2" ><i class="fa fa-edit"></i>Add school images</button>
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
                                                    <th>Photo</th>
                                                    <th>Description</th>                                                   >
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <?php
                                            $count=1;
                                            foreach($facility as $f):

                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $count;?></td>
                                                    <td><img src="<?php echo base_url();?>assets/news/<?php echo $f['photo'];?>" alt=""style="height: 60px; width: 70px;" /></td>
                                                    <td><?php echo $f['description'];?></td>

                                                    <td>
                                                      <div class="btn-group">
                                                       <a href="" class="btn btn-danger" data-target="#delete2<?php echo $f['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>
                                                        <a href="" class="btn btn-warning" data-target="#update2<?php echo $f['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a>
                                                    </div>
                                                    </td>

                                                                          <!-- DELETE FACILITY -->
                                               <div id="delete2<?php echo $f['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content p-0 b-0">
                                                            <div class="panel panel-color panel-primary">
                                                                <div class="panel-heading">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                                    <h3 class="panel-title">Delete Selected Facility</h3>
                                                                </div>
                                                                <div class="panel-body">
                                                                     <!-- Basic example -->
                                                                <div class="col-md-12">
                                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/delete_facility/'.$f['id']);?>">
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

                                <!-- END DELETE FACILITY -->

                                <!-- UPDATE FACILITY -->
                                <div id="update2<?php echo $f['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-0 b-0">
                                            <div class="panel panel-color panel-primary">
                                                <div class="panel-heading">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                    <h3 class="panel-title">Delete Selected Facility</h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/update_facility/'.$f['id']);?>">
                                                            <div class="form-group">
                                                                <label for="news">News</label>
                                                                <textarea class="form-control" name="description" id="description" ><?php echo $f['description'];?> </textarea>
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
                                <!-- END&nbsp;UPDATE&nbsp;FACILITY-->
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




