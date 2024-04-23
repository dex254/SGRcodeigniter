<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
    <div class="col-xl-6">

                <h4 class="card-title">You can book for an SGR train from this point</h4>
                <p class="card-title-desc">Booking for your  your train will be done here just aswer the siple questions.</p>
                    <?php echo form_open_multipart('bank/store',$attributes); ?>
                <form class="custom-validation" action="post">
                                      <div class="mb-3">
                        <label class="form-label">Traveller Name</label>
                        <input type="text" id="name"  name="name" class="form-control"  placeholder="Enter travellers Name"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">From</label>
                        <div>
                            <input type="text" id="from" name="from" class="form-control"
                                    placeholder="Enter the place you are travelling from"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">To</label>
                            <div>
                                <input type="text" id="towads" name="towads" class="form-control"
                                        placeholder="Enter the destination"/>
                            </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Train Number</label>
                        <div>
                            <input type="number" id="train" name="train" class="form-control"
                                    placeholder="Enter the train number of  your  choice"/>
                        </div>

                </div>

                    <div class="mb-3">
                        <label class="form-label">Contact</label>
                        <div>
                            <input type="number"  id="phone" name="phone" class="form-control"
                                    parsley-type="email" placeholder="Enter your phone number"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Time</label>
                        <div>
                            <input type="time" id="time" name="time" class="form-control"
                                    placeholder="Pick the time you have booked"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <div>
                            <input data-parsley-type="digits" type="date"
                                   id="date" name="date"  class="form-control"
                                    placeholder="Enter date today"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <div>
                            <input data-parsley-type="digits" type="number"
                                   id="amount" name="amount"  class="form-control"
                                    placeholder="Enter the ammount payable"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Aproved or pending</label>
                        <div>
                            <input data-parsley-type="digits" type="text"
                                   id="nett" name="nett"  class="form-control"
                                    placeholder="Yes if approved and  NO if pending"/>
                        </div>
                    </div>

                    </div>

                    </div>

                    </div>
                    <div class="mb-0">
                        <div>

                            <button type="reset" class="btn btn-secondary waves-effect">
                                councel
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Request
                            </button>
                            <a href="<?php echo base_url('index.php/bank/');?>"> <button type="button" class="btn btn-outline-dark waves-effect waves-light">back to table</button></a>
                        </div>
                    </div>
                </form>
                <!-- end form -->

    </div> <!-- end col -->
  </div> <!-- end row -->

                 </div> <!-- container-fluid -->
             </div>
             <!-- End Page-content -->
