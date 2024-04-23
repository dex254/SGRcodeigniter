<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                                       <h4 class="card-title">The Train station table</h4>
                                       <h2><a href="<?php echo base_url('index.php/contacts/create/');?>" ><button type="button" class="btn btn-warning waves-effect waves-light">ADD A Terminol</button></a>
                                       <p class="card-title-desc">The  table shows all the available train stations  and  you  can add new stations  above <code>If the terminol does  not  mach doring booking  then your  train booking  will fail</code>.</p>


                                           <div class="table-responsive">
                                               <table class="table table-primary table-striped mb-0">
                                                 <thead>
                                                     <tr>
                                                         <th>&</th>

                                                         <th>TerminolName</th>
                                                         <th>Terminol Number</th>

                                                         <th>Terminol Location</th>




                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                   <?php $i=1; foreach ($contacts as $contact): ?>
                                                 <tr>
                                                 <td><?php echo $i; $i++;?></td>
                                                 <td><?php echo $contact['name'];?></td>
                                                 <td><?php echo $contact['number'];?></td>
                                                 <td><?php echo $contact['loco'];?></td>


                                                 </tr>
                                                 <?php endforeach ?>


                                                 </tbody>

                                               </table>



                                                               </div>
                                                           </div>
                                                       </div>
