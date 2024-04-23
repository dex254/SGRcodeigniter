<div class="main-content">

               <div class="page-content">
                   <div class="container-fluid">

                       <!-- start page title -->

                       <!-- end page title -->



                                       <h4 class="card-title">Trains information table</h4>
                                       <a href="<?php echo base_url('index.php/agents/create/');?>"><button type="button" class="btn btn-outline-secondary waves-effect">Add a new train here</button></a>
                                       <p class="card-title-desc">The tarins informationmust  be   before  offering a booking.
                                       </p>

                                       <div class="table-responsive">
                                           <table class="table mb-0">
                                             <thead>
                                               <tr>
                                             <th>No</th>
                                             <th>Train Name</th>
                                             <th>Train Number</th>
                                             <th>Train Capacity</th>
                                             <th>Operation Terminol Number</th>



                                             </tr>
                                             </thead>
                                             <tbody>
                                             <?php $i=1; foreach ($agents as $contact): ?>
                                               <tr>
                                               <td><?php echo $i; $i++;?></td>

                                               <td><?php echo $contact['name'];?></td>
                                               <td><?php echo $contact['number'];?></td>
                                               <td><?php echo $contact['size'];?></td>

                                               <td><?php echo $contact['term'];?></td>


                                               </tr>
                                               <?php endforeach ?>

                                               <thead>
                                                 <tr>
                                               <th>No</th>
                                               <th>Train Name</th>
                                               <th>Train Number</th>
                                               <th>Train Capacity</th>
                                               <th>Operation Terminol Number</th>



                                               </tr>
                                               </thead>

                                               </tbody>
                                           </table>


                         </div>
                      <!-- end row -->

                  </div> <!-- container-fluid -->
              </div>
              <footer class="footer">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-sm-12">
                              © <script>document.write(new Date().getFullYear())</script> SGR <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Alex.</span>
                          </div>
                      </div>
                  </div>
              </footer>
              <!-- End Page-content -->
