
 <div class="main-content">

                 <div class="page-content">
                     <div class="container-fluid">
                       <div class="row">
                                                  <div class="col-xl-6">

                                                              <h4 class="card-title"> New Trains on the SGR railways are recorded here</h4>
                                                              <p class="card-title-desc">The   train information   must be vewd  before booking  a tarrain.</p>
                                                               <?php echo form_open_multipart('agents/store',$attributes); ?>
                                                              <form class="needs-validation" novalidate action="post">
                                                                  <div class="row">
                                                                      <div class="col-md-6">
                                                                          <div class="mb-3">
                                                                              <label class="form-label" for="validationCustom01">Train Name</label>
                                                                              <input type="text"  id="name" name="name"  class="form-control"  placeholder="Enter the train name" >
                                                                              <div class="valid-feedback">
                                                                                  Looks good!
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                  <label class="form-label" for="validationCustom01">Train Number</label>
                                                                                  <input type="number"  id="number" name="number"  class="form-control"  placeholder="Enter the trai train serial number" >
                                                                                  <div class="valid-feedback">
                                                                                      Looks good!
                                                                                  </div>
                                                                          </div>
                                                                          <div class="mb-3">
                                                                              <label class="form-label" for="validationCustom01">Train Capacity</label>
                                                                              <input type="text"  id="size" name="size" class="form-control"  placeholder="Enter the capacity  the train can carry" >
                                                                              <div class="valid-feedback">
                                                                                  Looks good!
                                                                              </div>
                                                                          </div>

                                                                          </div>
                                                                          <div class="mb-3">
                                                                              <label class="form-label" for="validationCustom01">Operation Terminols Number</label>
                                                                              <input type="number" id="term" name="term" class="form-control"  placeholder="Enter the terminol number the train begins" >
                                                                              <div class="valid-feedback">
                                                                                  Looks good!
                                                                              </div>




                                                                      </div>
                                                                      <!-- end col -->

                                                                      <!-- end col -->
                                                                  </div>
                                                                  <!-- end row -->


                                                                      <!-- end col -->


                                                                      <!-- end col -->
                                                                  </div>
                                                                  <!-- end row -->
                                                                  <a><button type="submit" class="btn btn-outline-primary waves-effect waves-light">update price</button></a>
                                                                  <a href="<?php echo base_url('index.php/agents/');?>"><button type="button" class="btn btn-outline-danger waves-effect waves-light">Go Back</button></a>



                                                              </form>
                                                              <!-- end form -->

                                                      <!-- end card -->
                                                  </div> <!-- end col -->
                                                  <!-- end col -->
                       </div> <!-- end row -->

                   </div> <!-- container-fluid -->
               </div>
               <!-- End Page-content -->
