


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
                                                    <h3 class="panel-title">Add Departmentals Director </h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Add_Director');?>">
                                                         <div class="form-group">
                                                            <label for="title">Teacher</label>
                                                            <select type="text" name="teacher" class="form-control" id="teacher">
                                                             <option value="">----SELECT TEACHER-----</option>
                                                             <?php
                                                             foreach($teacher as $t):
                                                             ?>
                                                             <option value="<?php echo $t['id'];?>"><?php echo $t['title'].' '.$t['surname'].' '.$t['first_name'];?></option>
                                                             <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="department">Department</label>
                                                            <select type="text" name="department" class="form-control" id="department">
                                                             <option value="">----SELECT Department-----</option>
                                                             <?php
                                                             foreach($department as $dept):
                                                             ?>
                                                             <option value="<?php echo $dept['dept_id'];?>"><?php echo $dept['department_name'];?></option>
                                                             <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="about">About the department</label>
                                                            <textarea class="form-control" name="about" id="about"> </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Objectives and Duties</label>
                                                            <textarea class="form-control" name="objectives" id="objectives"> </textarea>
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
                          <button class="btn btn-success btn-rounded m-b-5" data-toggle="modal" data-target="#panel-modal2" ><i class="fa fa-edit"></i>Add Director</button>
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
                                    Directors of Departments
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
                                                    <th>Department</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                              <?php
                                              $count=1;
                                               foreach($directors as $t):

                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $count;?></td>
                                                    <td><img src="<?php echo base_url();?>assets/news/<?php echo $t['passport'];?>" alt=""style="height: 60px; width: 70px;" /></td>
                                                    <td><?php echo $t['title'].' '.$t['surname'].' '.$t['first_name'].' '.$t['middle_name'];?></td>
                                                    <td><?php echo $t['department_name'];?></td>
                                                    <td>
                                                    <div class="btn-group">
                                                       <a href="" class="btn btn-danger" data-target="#delete<?php echo $t['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>
                                                        <a href="" class="btn btn-warning" data-target="#update<?php echo $t['id'];?>" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a>
                                                    </div>
                                                    </td>
                                                                                                <!-- DELETE DIRECTORS -->
                                               <div id="delete<?php echo $t['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content p-0 b-0">
                                                            <div class="panel panel-color panel-primary">
                                                                <div class="panel-heading">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                                    <h3 class="panel-title">Delete Selected Director</h3>
                                                                </div>
                                                                <div class="panel-body">
                                                                     <!-- Basic example -->
                                                                <div class="col-md-12">
                                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/delete_director/'.$t['id']);?>">
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

                                <!-- END DELETE DIRECTORS -->

                                <!-- UPDATE DIRECTORS -->
                                <div id="update<?php echo $t['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-0 b-0">
                                            <div class="panel panel-color panel-primary">
                                                <div class="panel-heading">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="ion ion-close"></span></button>
                                                    <h3 class="panel-title">Delete Selected Director</h3>
                                                </div>
                                                <div class="panel-body">
                                                     <!-- Basic example -->
                                                <div class="col-md-12">
                                                    <form role="form" method="post" enctype="multipart/data" action="<?php echo base_url('Admin/update_director/'.$t['id']);?>">
                                                            <div class="form-group">
                                                                <label for="name">Full Name</label>
                                                                <input type="text" class="form-control" name="name" id="name" value="<?php echo $t['title'].' '.$t['surname'].' '.$t['first_name'].' '.$t['middle_name'];?>" />
                                                            </div>
                                                            <div class="form-group">
                                                            <label for="department">Department</label>
                                                            <select type="text" name="department" class="form-control" id="department">
                                                             <option value="<?php echo $t['department_name'];?>"><?php echo $t['department_name'];?></option>
                                                             <?php
                                                             foreach($department as $dept):
                                                             ?>
                                                             <option value="<?php echo $dept['dept_id'];?>"><?php echo $dept['department_name'];?></option>
                                                             <?php endforeach; ?>
                                                            </select>
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
                                <!-- END&nbsp;UPDATE&nbsp;DIRECTORS-->
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




