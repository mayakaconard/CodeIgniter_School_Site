


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
                                                    <form role="form">
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
                                                    <h3 class="panel-title">Add PTA Member </h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Add_PTA');?>">
                                                         <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fname">First Name</label>
                                                            <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="surname">Surname</label>
                                                            <input type="text" name="surname" class="form-control" id="surname" placeholder="Enter Surname">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mname">Middle Name</label>
                                                            <input type="text" name="mname" class="form-control" id="mname" placeholder="Enter Middle Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="position">Position</label>
                                                            <input type="text" name="position" class="form-control" id="position" placeholder="position">
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="photo">Passport/Photo</label>
                                                            <input type="file" name="passport" class="form-control" id="passport">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message">Message/Best Quoote</label>
                                                            <textarea class="form-control" name="message" id="message"> </textarea>
                                                        </div>

                                                        <button type="submit" name="save" class="btn btn-purple">Submit</button>
                                                    </form>
                                                </div> <!-- col-->
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                     <div class="row">
                         <div class="col-lg-6">
                          <button class="btn btn-success btn-rounded m-b-5" data-toggle="modal" data-target="#panel-modal2" ><i class="fa fa-edit"></i>Add PTA Member</button>
                        </div>
                     </div>
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
                        <div class="col-lg-12">
                        <div class="portlet">
                            <div class="portlet-heading bg-info">
                                <h3 class="portlet-title">
                                    Members of P.T.A
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
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                              <?php foreach($pta as $t):
                                            $count=1;
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $count;?></td>
                                                    <td><img src="<?php echo base_url();?>assets/news/<?php echo $t['image'];?>" alt=""style="height: 60px; width: 70px;" /></td>
                                                    <td><?php echo $t['title'].' '.$t['surname'].' '.$t['first_name'].' '.$t['middle_name'];?></td>
                                                    <td><?php echo $t['position'];?></td>
                                                    <td>
                                                    <div class="btn-group">
                                                       <a href="" class="btn btn-danger" data-target="#delete<?php echo $t['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>
                                                    </div>
                                                    </td>

                                                                                       <!-- DELETE  PTA-->
                                               <div id="delete<?php echo $t['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content p-0 b-0">
                                                            <div class="panel panel-color panel-primary">
                                                                <div class="panel-heading">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                                    <h3 class="panel-title">Delete Selected PTA Member</h3>
                                                                </div>
                                                                <div class="panel-body">
                                                                     <!-- Basic example -->
                                                                <div class="col-md-12">
                                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/delete_PTA/'.$t['id']);?>">
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

                                <!-- END DELETE  PTA-->
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
                 </div>













            <!--</div>   -->




