<div class="main-content">

                <div class="page-content">

                               <div class="card">
                                   <div class="card-body">
                                       <h4 class="card-title">The train shedule table</h4>
                                       <h2><a href="<?php echo base_url('index.php/tax/create/');?>"><button type="button" class="btn btn-outline-secondary waves-effect">update The table</button></a></h2>
                                       <p class="card-title-desc">The  tarin shedule <code>.Check this table before Booking</code> Wlcome and enjoy.</p>

                                       <div class="table-responsive">
                                           <table class="table table-bordered border-primary mb-0">

                                               <thead>
                                                 <tr>
                                                     <th>!!</th>
                                                     <th>Terminol Number</th>
                                                     <th>Train Entry Time</th>
                                                     <th>Train Exit Time</th>
                                                     <th>Date</th>
                                                     <th>From</th>
                                                     <th>To</th>
                                                     <th>Price</th>


                                                 </tr>
                                             </thead>
                                             <tbody>
                                             <?php $i=1; foreach ($tax as $contact): ?>
                                             <tr>
                                             <td><?php echo $i; $i++;?></td>
                                             <td><?php echo $contact['number'];?></td>
                                             <td><?php echo $contact['inside'];?></td>
                                             <td><?php echo $contact['outside'];?></td>
                                             <td><?php echo $contact['date'];?></td>
                                             <td><?php echo $contact['from'];?></td>
                                             <td><?php echo $contact['towads'];?></td>
                                             <td><?php echo $contact['amount'];?></td>

                                             <?php endforeach ?>
                                             </tbody>
                                               </tbody>
                                           </table>
                                       </div>

                                   </div>
                               </div>
                           </div>

                        </div>
                    </div>
