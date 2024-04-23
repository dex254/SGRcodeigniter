 <?php echo form_open_multipart('contacts/store',$attributes); ?>
 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                      <div class="col-xl-6">
                              <div class="card">
                                  <div class="card-body">

                                      <h4 class="card-title">You can addd a new terminola on this list</h4>
                                      <p class="card-title-desc">Here  is were the Terminol attendants can add terminolas  in the systemm to aid  the process of  booking .</p>
                                          <?php echo form_open_multipart('contacts/store',$attributes); ?>
                                      <form action="post" class="custom-validation">

                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Terminol Name</label>
                                              <div>
                                                  <input type="text" id="name"  name="name" class="form-control" placeholder="Enter  the name of the terminol"/>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Terminol Number</label>
                                              <div>
                                                  <input type="number"  id="number" name="number"class="form-control"
                                                          placeholder="Enter  the terminol number"/>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Terminol Location</label>
                                              <div>
                                                  <input type="text"  id="loco"  name="loco"  class="form-control"  placeholder="Eenter  The terminolslocation"/>
                                              </div>
                                          </div>




                                          <div class="mb-0">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                      Upload
                                                  </button>
                                                  <a href="<?php echo base_url('index.php/contacts/');?>">"<button type="button" class="btn btn-secondary waves-effect">
                                                      back
                                                  </button></a>
                                              </div>
                                          </div>
                                      </form>
                                      <!-- end form -->
                                  </div>
                              </div>
                          </div> <!-- end col -->
                      </div> <!-- end row -->

                  </div> <!-- container-fluid -->
              </div>
              <!-- End Page-content -->




          </div>
          <!-- end main content-->

      </div>
      <!-- END layout-wrapper -->
