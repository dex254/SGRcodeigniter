<!-- ============================================================== -->
           <div class="main-content">

               <div class="page-content">
                   <div class="container-fluid">

                       <!-- start page title -->
                       <div class="row">
                           <div class="col-sm-6">
                               <div class="page-title-box">
                                   <h4>chart point</h4>
                                       <ol class="breadcrumb m-0">
                                           <li class="breadcrumb-item"><a href="javascript: void(0);">dex</a></li>
                                           <li class="breadcrumb-item"><a href="javascript: void(0);">chaer</a></li>
                                           <li class="breadcrumb-item active">charts</li>
                                       </ol>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="state-information d-none d-sm-block">
                                   <div class="state-graph">
                                       <div id="header-chart-1"></div>
                                       <div class="info">chaer rate</div>
                                   </div>
                                   <div class="state-graph">
                                       <div id="header-chart-2"></div>
                                       <div class="info">chart rates441</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- end page title -->

                       <div class="row">
                           <div class="col-12">
                               <div class="card">
                                   <div class="card-body">

                                       <h4 class="card-title">chart with  members</h4>
                                       <p class="card-title-desc">here you can get to talk with other businessmen and  women.
                                       </p>


                                       <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                         <thead>
                                           <tr>



                                         </tr>
                                         </thead>
                                         <tbody>
                                         <?php $i=1; foreach ($chart as $contact): ?>
                                         <tr>
                                         <p><?php echo $i; $i++;?><p>
                                         <h4><?php echo $contact['fullName'];?></h4>
                                         <h2>DAY:</h2><h4><?php echo $contact['date'];?></h4>
                                        <h2>MESSEGE TO:</h2> <h4>  <?php echo $contact['name'];?></h4>
                                         <h2>TEXT:</h2><h4>  <?php echo $contact['text'];?></h4>
                                         <h4><a href="<?php echo base_url('index.php/chart/create/');?>"><button type="button" class="btn btn-outline-primary waves-effect waves-light">replay</button></a>


                                         </tr>
                                         <?php endforeach ?>
                                         </tbody>
                                         <a href="<?php echo base_url('index.php/chart/create/');?>"><button type="button" class="btn btn-outline-primary waves-effect waves-light">replay</button></a>



                                       </div>
                              </div>
                          </div>
                          <!-- end col -->
                      </div>
                      <!-- end row -->

                  </div> <!-- container-fluid -->
              </div>
              <!-- End Page-content
            </div>
                  <!-- end col -->
              </div>
              <!-- end row -->

          </div> <!-- container-fluid -->
      </div>
      <!-- End
