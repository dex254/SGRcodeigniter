<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                                                    <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>You  can update   trains arrivals  deperture   to aid in booking</h5>
                                                     <?php echo form_open_multipart('tax/store',$attributes); ?>
                                                    <form>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Terminol Number</label>
                                                            <div class="col-sm-9">
                                                              <input type="number"  id="number"  name="number"  class="form-control"  placeholder="Enter  the Terminol  number as per  the Terminols table">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Train  Entry Time</label>
                                                            <div class="col-sm-9">
                                                                <input type="time"  id="inside" name="inside"  class="form-control"  placeholder="Pich the  train time Entry">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Out Train Time</label>
                                                            <div class="col-sm-9">
                                                              <input type="time"  id="outside"  name="outside" class="form-control"  placeholder="Pick frequent exit time">
                                                            </div>
                                                        </div><div class="row mb-4">
                                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Date</label>
                                                            <div class="col-sm-9">
                                                              <input type="date"  id="date"  name="date" class="form-control"  placeholder="Select date  today">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">From</label>
                                                            <div class="col-sm-9">
                                                              <input type="text"  id="from"  name="from" class="form-control"  placeholder="Write Train exit location">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">To</label>
                                                            <div class="col-sm-9">
                                                              <input type="text"  id="towads"  name="towads" class="form-control"  placeholder="Enter the trains destination">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Price</label>
                                                            <div class="col-sm-9">
                                                              <input type="number"  id="amount"  name="amount" class="form-control"  placeholder="Enter the trains destination">
                                                            </div>
                                                        </div>


                                                                <div>
                                                                    <button type="submit" class="btn btn-primary w-md">Upload</button>
                                                                    <a href="<?php echo base_url('index.php/tax/');?>"><button type="button" class="btn btn-info waves-effect waves-light">Back</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                              <!-- end col -->
                                        </div> <!-- end row -->
                                      </div> <!-- end cardbody -->
                             </div> <!-- end card -->
                         </div> <!-- end col -->
                     </div><!-- end row -->
