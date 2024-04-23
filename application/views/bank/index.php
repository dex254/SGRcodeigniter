<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">



                                                              <h4 class="card-title">list  of travellers who  have booked</h4>
                                                              <p class="card-title-desc">List of  alredy  booked members
                                                             <code>If your  name is not  on this list  you   have to  book again   more or  contact  the responsible personell!!!!!!!</code>.
                                                              </p>
                                                              <h2><a href="<?php echo base_url('index.php/bank/create/');?>"><button type="button" class="btn btn-outline-primary waves-effect waves-light">Book now</button></a></h2>


                                                                  <table class="table table-dark mb-0">
                                                                    <thead>
                                                                      <tr>
                                                                  <th>#</th>
                                                                  <th> Traveller Name</th>
                                                                  <th>From</th>
                                                                  <th>To</th>
                                                                  <th>Train Number</th>
                                                                  <th>Contacts</th>
                                                                  <th>Time Booked</th>
                                                                  <th>Date</th>
                                                                  <th>Amount in  sh</th>
                                                                  <th>Aproved or Pending</th>
                                                                  </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                  <?php $i=1; foreach ($banks as $contact): ?>
                                                                  <tr>
                                                                  <td><?php echo $i; $i++;?></td>
                                                                  <td><?php echo $contact['name'];?></td>
                                                                  <td><?php echo $contact['from'];?></td>
                                                                  <td><?php echo $contact['towads'];?></td>
                                                                  <td><?php echo $contact['train'];?></td>
                                                                  <td><?php echo $contact['phone'];?></td>
                                                                  <td><?php echo $contact['time'];?></td>
                                                                  <td><?php echo $contact['date'];?></td>
                                                                  <td><?php echo $contact['amount'];?></td>
                                                                  <td><?php echo $contact['nett'];?></td>
                                                                  <td>

                                                                  </td>
                                                                  </tr>
                                                                  <?php endforeach ?>
                                                                    </tbody>


                                                                  </table>




                                              </div>
                                            </div>
          <!-- end main content-->

      </div>
