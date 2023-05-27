<?php 
    $this->load->view('includes/header');
?>
        <!-- Header -->
        <!-- <div class="search-wrap w-100 d-flex flex-wrap align-items-center justify-content-center">
            <span class="search-cls-btn rounded-circle"><i class="fas fa-times"></i></span>
            <form class="w-100">
                <input type="text" placeholder="Search here....">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form> -->
        <!-- </div> -->
        <!-- Search Wrap -->
       <!--  <div class="rspn-hdr">
            <div class="rspn-mdbr">
                <div class="rspn-scil">
                    <a href="javascript:void(0);" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="javascript:void(0);" title="Google Plus" target="_blank"><i
                            class="fab fa-google-plus-g"></i></a>
                    <a href="javascript:void(0);" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="javascript:void(0);" title="Linkedin" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <form class="rspn-srch">
                    <input type="text" placeholder="Enter Your Keyword" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="lg-mn">
                <div class="logo"><a href="index.html" title="Home"><img src="<?php echo base_url() ?>assets/images/logo2.png" alt="Logo"
                            srcset="<?php echo base_url() ?>assets/images/retina-logo2.png"></a></div>
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a>
                        <ul class="children mb-0 list-unstyled">
                            <li><a href="index.html" title="">Homepage 1</a></li>
                            <li><a href="index2.html" title="">Homepage 2</a></li>
                            <li><a href="index3.html" title="">Homepage 3</a></li>
                            <li><a href="index4.html" title="">Homepage 4</a></li>
                            <li><a href="index5.html" title="">Homepage 5</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Listing</a>
                        <ul class="children mb-0 list-unstyled">
                            <li><a href="place-listing.html" title="">Place Listing</a></li>
                            <li><a href="listing-explore-map-sidebar.html" title="">Listing With Map Style 1</a></li>
                            <li><a href="place-layout-detail.html" title="">Listing Detail Style 1</a></li>
                            <li><a href="listing-explore-map-sidebar2.html" title="">Listing With Map Style 2</a></li>
                            <li><a href="place-layout-detail2.html" title="">Listing Detail Style 2</a></li>
                            <li><a href="add-listing.html" title="">Add Listing</a></li>
                            <li><a href="listing-review.html" title="">Listing Review</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                        <ul class="children mb-0 list-unstyled">
                            <li><a href="listing-layout.html" title="">Listing Style 1</a></li>
                            <li><a href="listing-layout2.html" title="">Listing Style 2</a></li>
                            <li><a href="event-detail.html" title="">Event Detail Style 1</a></li>
                            <li><a href="event-detail2.html" title="">Event Detail Style 2</a></li>
                            <li><a href="price-table.html" title="">Price Table</a></li>
                            <li><a href="gallery.html" title="">Gallery Style 1</a></li>
                            <li><a href="gallery2.html" title="">Gallery Style 2</a></li>
                            <li><a href="gallery3.html" title="">Gallery Style 3</a></li>
                            <li><a href="gallery-detail.html" title="">Gallery Detail</a></li>
                            <li><a href="login.html" title="">Login</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" title="">About us</a></li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Contact us</a>
                        <ul class="children mb-0 list-unstyled">
                            <li><a href="contact.html" title="">Contact us 1</a></li>
                            <li><a href="contact2.html" title="">Contact us 2</a></li>
                        </ul>
                    </li>
                </ul> -->
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
       <!--  <section>
            <div class="w-100 pt-180 pb-110 black-layer opc45 position-relative">
                <div class="fixed-bg" style="background-image: url(<?php echo base_url() ?>assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pg-tp-wrp text-center w-100">
                        <h1 class="mb-0">Teachers Registration</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Teachers Registration</li>
                        </ol> -->
                    <!-- </div> -->
                    <!-- Page Top Wrap -->
              <!--   </div>
            </div>
        </section> -->
        <section>
            <div class="w-100 gray-bg position-relative">
                <div class="login-register-wrap w-100">
                    
                    <div class="register-inner container">
                        <div class="title2 w-100 text-center pt-5 mt-2">
                            <h2 class="mb-0">Batches/Seats</h2>
                            <!--<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>-->
                        </div>
                       <?php

                        $success = $this->session->userdata('success');
                        if($success!=""){?>
                        <p style="color:green;text-align: center;"><?php echo  $this->session->flashdata('success') ?></p>
                        <?php } ?>
                        <?php
                        if($this->session->flashdata('error') !== "")
                        {
                        ?>
                        <p style="color:red;text-align: center;"><?php echo  $this->session->flashdata('error') ?></p>
                        <?php
                        }
                        ?>
                        <div>
                            <a href="<?php echo base_url('Batches/addbatch') ?>" class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i> Add Batches</a>
                            
                        </div>
                        <table class="table table-bordered table-stripped mb-5 mt-5">
                            <tr>
                                <th>Classes</th>
                                <th>Batch Start Time</th>
                                <th>Batch end Time</th>
                                <th>Total Seats </th>
                                <th>Available Seats</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                           
                            <?php 
                            // print_r($batchs);die();
                                if(!empty($batchs)){
                                    $i=1;
                                    foreach($batchs as $batches){   ?>
                            <tr>
                               <td><?php echo $batches['classes'] ?></td>
                               <?php 
                                $originalDate = $batches['totime'];
                                $newDate = date("h:i:A", strtotime($originalDate));
                               ?>
                               <td><?php echo $newDate ?></td>
                                <?php 
                                $maindate = $batches['fromtime'];
                                $fromdate = date("h:i:A", strtotime($maindate));
                               ?>
                               
                               <td><?php echo $fromdate ?></td>
                               <td><?php echo $batches['totalseats'] ?></td>
                               <td><?php echo $batches['availableseat'] ?></td>
                               <td><?php echo $batches['message'] ?></td>
                               <td>
                                   <a href="<?php echo base_url().'Batches/edit/'.$batches['id'] ?>" <i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                   
                                    <a href="<?php echo base_url().'Batches/delete/'.$batches['id'] ?>" <i class="fa fa-trash" aria-hidden="true"></i></a>  
                                    
                                </td>
                                
                            </tr>
                            <?php
                                $i++;
                            } } else{ ?>
                            <tr>
                                <td colspan="5">Record Not found</td>
                            </tr>
                            <?php } ?>
                           
                        </table>     
                    
                    </div>
                </div><!-- Login Register Wrap -->
            </div>
        </section>
        <?php 
    $this->load->view('includes/footer');
?>