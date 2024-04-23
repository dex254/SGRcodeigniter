
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                      <div class="row">
                           <div class="col-xl-6">
                               <div class="card">
                                   <div class="card-body">
                                       <h4 class="card-title">you can say want you   want publically here</h4>
                                       <p class="card-title-desc"> here   is  a puplic place  were you  can get  to say what you wish to  say</p>
                                       <?php echo form_open_multipart('chart/store',$attributes); ?>
                                   <form class="custom-validation" action="post">




                                           </div>

                                           <div class="mb-3">
                                               <label class="form-label"><?php echo $login['fullName'];?></label>
                                               <div>
                                                   <input  type="text"  id="fullName"  name="fullName"
                                                           class="form-control"
                                                           placeholder="<?php echo $login['fullName'];?>"/>
                                               </div>
                                           </div>
                                           <div class="mb-3">
                                               <label class="form-label">date</label>
                                               <div>
                                                   <input  type="date"  id="date" name="date"
                                                           class="form-control"
                                                           placeholder="thee date sent"/>
                                               </div>
                                           </div>
                                           <div class="mb-3">
                                               <label class="form-label">To</label>
                                               <div>
                                                   <input  type="text"  id="name" name="name"
                                                           class="form-control"
                                                           placeholder="message adress too who"/>
                                               </div>
                                           </div>
                                           <div class="mb-3">
                                               <label class="form-label">text</label>
                                               <div>
                                                   <input  type="text"  action="outfill" id="text" name="text"
                                                           class="form-control"
                                                           placeholder="give your opinion"/>
                                               </div>
                                           </div>

                                           <div class="mb-0">
                                               <div>

                                                   <a href="<?php echo base_url('index.php/chart/');?>"><button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       send
                                                   </button></a>
                                                  <a href="<?php echo base_url('index.php/chart/');?>"> <button type="button" class="btn btn-secondary waves-effect">
                                                       view
                                                   </button></a>
                                               </div>
                                           </div>
                                       </form>
                                       <!-- end form -->
                                   </div>
                               </div>
                           </div>
                         </div> <!-- end row -->

     </div> <!-- container-fluid -->
 </div>
 <!-- End Page-content -->




</div>
<!-- end main content-->

</div><!-- en
