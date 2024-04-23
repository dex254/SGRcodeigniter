<!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4>Amin Table</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">SGR Admin Table</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">View Admin </li>
                                        </ol>
                                </div>
                            </div>

                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Amins only are in this  table</h4>
                                        <p class="card-title-desc">Amins only are listed in this table.</p>


                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                  <thead>
                                                  <tr>
                                                      <th>@</th>
                                                      <th>Name</th>
                                                      <th>Username</th>
                                                      <th>Phone Number</th>
                                                      <th>Email</th>
                                                      <th>status</th>
                                                      <th>Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                <?php $i=1; foreach ($users as $user): ?>
                                                  <tr>
                                                      <td><?php echo $i; $i++;?></td>
                                                      <td><?php echo $user['fname'].' '.$user['lname'];?></td>
                                                      <td><?php echo $user['username'];?></td>
                                                      <td><?php echo $user['phone'];?></td>
                                                        <td><?php echo $user['email'];?></td>
                                                      <td><span class="badge badge-success"><?php echo $user['status'];?></span></td>
                                                      <td>
                                                        <a href="<?php echo base_url('index.php/users/view/'.$user['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                                                        <a href="<?php echo base_url('index.php/users/destroy/'.$user['id']);?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></a>
                                                      </td>
                                                  </tr>
                                                    <?php endforeach ?>
                                              </tbody>
                                                </table>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                     <a href="<?php echo base_url('index.php/users/create/');?>
