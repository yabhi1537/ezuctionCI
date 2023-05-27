<?php 
   $this->load->view('includes/header');
   ?>
<link rel='stylesheet' id=''
    href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css' media='all' />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
.carousel-wrap {
    margin: 90px auto;
    padding: 0 5%;
    width: 80%;
    position: relative;
}

.success-msg {
    background: #e0efda;
    color: #040a4a;
    border: 1px solid #c6dfb2;
    text-align: center;
    position: absolute;
    left: 7px;
    top: 718px;
    width: 244px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0;
}

/* fix blank or flashing items on carousel */
.owl-carousel .item {
    position: relative;
    z-index: 100;
    -webkit-backface-visibility: hidden;
}

/* end fix */
.owl-nav>div {
    margin-top: -26px;
    position: absolute;
    top: 50%;
    color: #cdcbcd;
}

.owl-nav i {
    font-size: 52px;
}

.owl-nav .owl-prev {
    left: -30px;
}

.owl-nav .owl-next {
    right: -30px;
}

.carousel-wrap {
    margin: 0px auto;
    padding: 0 5%;
    width: 95%;
    position: relative;
}

.owl-item .item img {
    width: 98px;
    height: 120px;
}

.owl-carousel .owl-item img {
    display: block;
    width: 100%;
    -webkit-transform-style: preserve-3d;
    height: 120px !important;
}

.view-prof {
    height: 95px;
    width: 95px;
    object-fit: cover;
}

.star-rating {
    /* border:solid 1px #ccc; */
    display: flex;
    flex-direction: row-reverse;
    font-size: 1.5em;
    justify-content: space-around;
    padding: 0 .2em;
    text-align: center;
    width: 5em;
}

.star-rating input {
    display: none;
}

.star-rating label {
    color: #ccc;
    cursor: pointer;
    font-size: 40px;
}

.star-rating :checked~label {
    color: #f90;
}

.star-rating label:hover,
.star-rating label:hover~label {
    color: #fc0;
}
</style>
<section class="pager-section blog-version">
    <div class="pager-content pb-0">
        <ul class="breadcrumbs has-link-effect">
            <li><a href="<?php echo base_url() ?>" itemprop="url">Home</a></li>
            <li><a href="<?php echo base_url('coaching-center') ?>" itemprop="url">Teachers</a></li>

        </ul>

        <h1><?php echo $profile['name']; ?></h1>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shelly-shape">
        <path class="shelly-shape--fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
         c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
         c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
    </svg>
</section>
<section class="page-content pb-4 mb-5">
    <div class="page-container">
        <div class="teacher-single-page">
            <div class="row">
                <div class="col-lg-4">
                    <div class="teacher-img">
                        <?php if($profile['image'] ==""){ ?>
                        <img width="1376" height="2064" src="<?php echo base_url() ?>assets/images/profile.png"
                            class="attachment-full size-full wp-post-image" alt=""
                            data-lazy-srcset="https://shelly.merku.love/wp-content/assets/image/profile.png 1376w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1365x2048.png 1365w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-270x405.png 270w"
                            data-lazy-sizes="(max-width: 1376px) 100vw, 1376px"
                            data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/teacher5.png" />
                        <?php }else{ ?>

                        <img width="1376" height="2064"
                            src="<?php echo base_url() ?>/upload/<?php echo $profile['image'] ?>"
                            class="attachment-full size-full wp-post-image" alt=""
                            data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/teacher5.png 1376w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1365x2048.png 1365w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-270x405.png 270w"
                            data-lazy-sizes="(max-width: 1376px) 100vw, 1376px"
                            data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/teacher5.png" />

                        <?php } ?>
                        <noscript><img width="1376" height="2064"
                                src="https://shelly.merku.love/wp-content/uploads/2020/11/teacher5.png"
                                class="attachment-full size-full wp-post-image" alt=""
                                srcset="https://shelly.merku.love/wp-content/uploads/2020/11/teacher5.png 1376w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1365x2048.png 1365w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-270x405.png 270w"
                                sizes="(max-width: 1376px) 100vw, 1376px" /></noscript>

                    </div>
                </div>
                <div class="col-lg-8">
                    <?php 
                $varcount = count($results);
                
                    if($varcount < 3 ){
                    
                        for($i=0; $i < $varcount; $i++){ 
                
            
                    ?>


                    <img class="view-prof"
                        src="<?php echo base_url('upload/results/') ?><?php echo $results[$i]['image'] ?>" height="80"
                        width="80">

                    <?php } }else{ ?>
                    <div class="carousel-wrap">
                        <div class="owl-carousel">


                            <?php 
                $varcount = count($results);
                
                for($i=0; $i < $varcount; $i++){ 
                
                ?>


                            <div class="item"><img class="imgtdg"
                                    src="<?php echo base_url('upload/results/') ?><?php echo $results[$i]['image'] ?>">
                            </div>

                            <?php }  ?>


                        </div>
                    </div>
                    <?php } ?>
                    <div class="teacher-content">
                        <div class="tech-details">
                            <div class="row d-flex">
                                <h3>Profile</h3>
                            </div>
                            <ul>
                                <?php
                                  $stuentid = $this->session->userdata('sid'); 
                                if(empty($stuentid)){ ?>
                                <?php if(!empty($first_character)){ ?>
                                <li>
                                    <?php  if($first_character=="1"){ ?>
                                    <div class="star-rating">
                                        <input type="radio"  value="5" />
                                        <label for="5-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="4" />
                                        <label for="4-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="3" />
                                        <label for="3-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="2" />
                                        <label for="2-stars" class="star">&#9733;</label>
                                        <input type="radio"  checked />
                                        <label for="1-star" class="star">&#9733;</label>
                                    </div>
                                    <?php }else if($first_character=="2"){ ?>
                                    <div class="star-rating m-0 p-0">
                                        <input type="radio"  value="5" />
                                        <label for="5-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="4" />
                                        <label for="4-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="3" />
                                        <label for="3-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="2" checked />
                                        <label for="2-stars" class="star">&#9733;</label>
                                        <input type="radio"  />
                                        <label for="1-star" class="star">&#9733;</label>
                                    </div>
                                    <?php }else if($first_character=="3"){ ?>
                                    <div class="star-rating">
                                        <input type="radio"  value="5" />
                                        <label for="5-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="4" />
                                        <label for="4-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="3" checked />
                                        <label for="3-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="2" />
                                        <label for="2-stars" class="star">&#9733;</label>
                                        <input type="radio"  />
                                        <label for="1-star" class="star">&#9733;</label>
                                    </div>
                                    <?php }else if($first_character=="4"){ ?>
                                    <div class="star-rating">
                                        <input type="radio"  value="5" />
                                        <label for="5-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="4" checked />
                                        <label for="4-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="3" />
                                        <label for="3-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="2" />
                                        <label for="2-stars" class="star">&#9733;</label>
                                        <input type="radio"  />
                                        <label for="1-star" class="star">&#9733;</label>
                                    </div>
                                    <?php }else if($first_character=="5"){ ?>
                                    <div class="star-rating">
                                        <input type="radio"  value="5" checked />
                                        <label for="5-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="4" />
                                        <label for="4-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="3" />
                                        <label for="3-stars" class="star">&#9733;</label>
                                        <input type="radio"  value="2" />
                                        <label for="2-stars" class="star">&#9733;</label>
                                        <input type="radio"  />
                                        <label for="1-star" class="star">&#9733;</label>
                                    </div>

                                    <?php } ?>

                                </li>
                                <?php } }?>
                                <?php if(!empty($profile['teacher_id'])){ ?>
                                <li>
                                    <h6>Teacher ID</h6>
                                    <span><b><?php echo $profile['teacher_id'] ?></b></span>
                                </li>
                                <?php } ?>
                                <li>
                                    <h6>Name</h6>
                                    <span><?php echo $profile['name'] ?></span><?php if($profile['paidstatus']=="1"){ ?>
                                    <img src="<?php echo base_url() ?>assets/img/check-circle-solid-24.png" class="px-2"
                                        alt="">
                                    <?php } ?>
                                </li>
                                <li>
                                    <h6>Email</h6>
                                    <span><?php echo $profile['email'] ?> </span>
                                </li>
                                <li>
                                    <h6>Phone No.</h6>
                                    <span><?php echo $profile['phone'] ?> </span>
                                </li>
                                <li>
                                    <h6>Gender</h6>
                                    <span><?php echo $profile['gender'] ?> </span>
                                </li>
                                <li>
                                    <h6>Qualification</h6>
                                    <span><?php echo $profile['highest_qualification'] ?>
                                        <?php echo $profile['otherhighest_qualification'] ?> </span>
                                </li>
                                <li>
                                    <h6>Type of Batch</h6>
                                    <span><?php echo $profile['batch'] ?> </span>
                                </li>
                                <li>
                                    <h6>Class</h6>
                                    <span><img class="teacher-info-img" src="../assets/img/building-regular-24.png"
                                            alt=""><?php echo $profile['class'] ?></span>
                                </li>
                                <li>
                                    <h6>Subject</h6>
                                    <span> <img src="../assets/img/book-solid-24.png"
                                            alt=""><?php echo $profile['subject'] ?> </span>
                                </li>
                                <li>
                                    <h6>Board</h6>
                                    <span> <?php echo $profile['board'] ?> </span>
                                </li>
                                <li>
                                    <h6>Overall Teaching Exp</h6>
                                    <span> <?php echo $profile['total_techer_exp'] ?> </span>
                                </li>
                                <li>
                                    <h6>Fees</h6>
                                    <?php if(isset($profile['price'])){ ?>
                                    <span><?php echo $profile['price'] ?></span>
                                    <?php } ?>
                                </li>


                                <li>
                                    <h6>Mode of Delivery</h6>
                                    <span><?php echo $profile['mode'] ?> </span>
                                </li>

                                <?php if(isset($batches['availableseat'])){ ?>
                                <li>
                                    <h6>Available Seats</h6>
                                    <span><?php echo $batches['availableseat']  ?></span>
                                </li>
                                <?php } ?>

                                <?php 
                             $id =  $profile['id'];
                            $query = "SELECT * FROM `batches` WHERE teach_id='$id'";
                            $sql = $this->db->query($query);
                            
                            $batchess = $sql->result();
                            $mysub="";
                            foreach($batchess as $key=>$bathes){
                                
                                $mysub .= $bathes->message.",";
                              
                            }
                            $bachtesdata =  rtrim($mysub,",");
                            
                        ?>

                                <li>
                                    <h6>Offers</h6>
                                    <span><?php echo $bachtesdata  ?></span>
                                </li>


                            </ul>
                            <?php  if(!empty($batches)){ ?>
                            <table class="mt-3">
                                <tr>
                                    <th>Class</th>

                                    <th>Start Batch time</th>

                                    <th>End Batch time</th>

                                    <th>Available Seats</th>


                                </tr>
                                <?php 
                                    if(!empty($batches)){ 
                                        $i=1;
                                    foreach($batches as $batch){  ?>
                                <th><?php echo $batch['classes'] ?></th>
                                <?php 
                                    $mtime = date ('h:i:A ',strtotime($batch['totime']));
                                    $ltime = date ('h:i:A ',strtotime($batch['fromtime']));
                                    
                                    ?>
                                <th><?php echo $mtime ?></th>
                                <th><?php echo $ltime ?></th>
                                <th><?php echo $batch['availableseat'] ?></th>
                                <tr>

                                </tr>
                                <?php 
                            $i++;
                         } } else{ ?>
                                <tr>
                                    <th colspan="5">Recond not found</th>
                                </tr>
                                <?php } ?>

                            </table>
                            <?php } ?>

                            <div class="col-md-12 teacher-info-board justify-content-between d-flex text-center mt-3">
                                <!--<a class="btn-default w-100 send-msg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#" target="_blank" rel="nofollow">Send Message </a>-->
                                <a class="btn-default send-msg btn" id="btn" target="_blank" rel="nofollow"
                                    onClick="openModel(<?php echo $profile['id'] ?>)">Book a trial Class </a>
                                <button type="button" class="btn-default w-20 send-msg" onclick="withoutJquery();">Share
                                    Profile</button>

                            </div>

                            <?php 
                            $stuentid = $this->session->userdata('sid');
                            if(!empty($stuentid)){
                            ?>
                            <h3 class="mt-2 mb-2">Reviews</h3>
                            <hr>
                            <div class="star-rating">
                                <input type="radio" id="5-stars" name="rating" value="5" onchange="saveRatinng(5)" />
                                <label for="5-stars" class="star">&#9733;</label>
                                <input type="radio" id="4-stars" name="rating" value="4" onchange="saveRatinng(4)" />
                                <label for="4-stars" class="star">&#9733;</label>
                                <input type="radio" id="3-stars" name="rating" value="3" onchange="saveRatinng(3)" />
                                <label for="3-stars" class="star">&#9733;</label>
                                <input type="radio" id="2-stars" name="rating" value="2" onchange="saveRatinng(2)" />
                                <label for="2-stars" class="star">&#9733;</label>
                                <input type="radio" id="1-star" name="rating" value="1" onchange="saveRatinng(1)" />
                                <label for="1-star" class="star">&#9733;</label>
                            </div>
                            <form action="" id='textes' class="mb-4">

                                <div id="textmessage" class="alert alert-danger">

                                </div>

                                <input type="hidden" name="ratings" id="rates" value="">
                                <textarea name="review" id="review" cols="10" rows="3"
                                    class="form-control mb-2"></textarea>
                                <button type="button"
                                    onclick="saveFunction(<?php echo $stuentid ?>,<?php echo $profile['id'] ?>)">Submit
                                    Your Review</button>
                            </form>
                            <?php } ?>



                            <div id="myModal" class="modal fade" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <form class="text-left" method="post"
                                            action="<?php echo base_url('InquireController') ?>">
                                            <div class="modal-body">

                                                <div class="form-group ">
                                                <input type="hidden" value="<?php echo $profile['email'] ?>" class="form-control" id=""
                                                        name="hiddenemail">
                                                        <input type="hidden" value="<?php echo $profile['name'] ?>" class="form-control" id=""
                                                        name="techname"> 
                                                         
                                                    <input type="hidden" class="form-control" id="hiddenid"
                                                        name="hiddenid">
                                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" name="recipient_mail"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Phone No:</label>
                                                    <input type="number" class="form-control" name="phone"
                                                        id="recipient-name" minlength="10" maxlength="10" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                    <textarea class="form-control" id="message-text" name="message"
                                                        required>Dear Sir/Ma'am, I want to take trial class, please let me know the details for your trial classes.</textarea>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Send message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <br>
               <div id="myModals" class="modal fade" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                 
                        <form class="text-left" method="post" action="<?php echo base_url('InquireController') ?>">
                            <div class="modal-body">

                                <div class="form-group">
                                <!-- <input type="text" value="<?php echo $profile['name'] ?>" class="form-control" id=""
                                                        name="techname"> -->
                                    <input type="hidden" class="form-control" id="hiddenid" name="hiddenid">
                                    <input type="hidden" class="form-control" id="hiddenemail" name="hiddenemail">
                                    <input type="hidden" class="form-control" id="techname" name="techname">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" name="name" id="recipient-name" required>
                                    <?php echo form_error('name') ?>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" name="recipient_mail" id="recipient-name"
                                        required>
                                    <?php echo form_error('recipient_mail') ?>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Phone No:</label>
                                    <input type="number" inputmode="numeric" class="form-control" name="phone"
                                        id="recipientphone" required onkeyup="myValidation()">
                                    <?php echo form_error('phone') ?>
                                </div>
                                <span id="message" style="color:red;"></span>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" name="message"
                                        required>Dear Sir/Ma'am, I want to take trial class, please let me know the details for your trial classes.</textarea>
                                    <?php echo form_error('message') ?>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary send-msge">Send message</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>

                            <?php 
                            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                                    
                              ?>
                            <span id="copyText2" style="display:none;"> <?php echo $actual_link ?></span>



                            <span id="message"></span>

                        </div>
                        <p><?php echo $profile['intro']  ?>.</p>
                        <!--<div class="skills-tech">-->
                        <!--   <h3>Personal Skills</h3>-->
                        <!--   <div class="progress-row">-->
                        <!--      <h6>Teaching</h6>-->
                        <!--      <div class="progress">-->
                        <!--         <div class="progress-bar bg-clr1" role="progressbar" style="width: 100%; visibility: visible;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
                        <!--      </div>-->
                        <!--      <span>100% </span>-->
                        <!--   </div>-->
                        <!--   <div class="progress-row">-->
                        <!--      <h6>Speaking</h6>-->
                        <!--      <div class="progress">-->
                        <!--         <div class="progress-bar bg-clr2" role="progressbar" style="width: 80%; visibility: visible;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>-->
                        <!--      </div>-->
                        <!--      <span>80% </span>-->
                        <!--   </div>-->
                        <!--   <div class="progress-row">-->
                        <!--      <h6>Family Support</h6>-->
                        <!--      <div class="progress">-->
                        <!--         <div class="progress-bar bg-clr3" role="progressbar" style="width: 85%; visibility: visible;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>-->
                        <!--      </div>-->
                        <!--      <span>85% </span>-->
                        <!--   </div>-->
                        <!--   <div class="progress-row">-->
                        <!--      <h6>Children&#039;s Well-being</h6>-->
                        <!--      <div class="progress">-->
                        <!--         <div class="progress-bar bg-clr4" role="progressbar" style="width: 90%; visibility: visible;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>-->
                        <!--      </div>-->
                        <!--      <span>90% </span>-->
                        <!--   </div>-->
                        <!--</div>-->
                        <!--<p>Quisque congue ultrices nibh, id consectetur velit consectetur ut. Suspendisse porttitor vulputate imperdiet. Proin rhoncus, mauris sit amet consectetur laoreet, mauris mi volutpat urna, at molestie urna libero quis leo. Pellentesque ut molestie nisi. Suspendisse ut nulla eleifend ligula vulputate tincidunt sed eget orci.</p>-->
                        <!--<p>Pellentesque aliquam varius malesuada. Proin id massa vitae eros elementum egestas id sit amet elit. Praesent convallis ligula ac urna rhoncus euismod. Vestibulum maximus luctus magna, in sollicitudin lorem tincidunt id. Nunc aliquam nibh sagittis nibh luctus blandit. Quisque nec dignissim metus. Suspendisse eget turpis ante. Fusce non iaculis sem.</p>-->

                    </div>
                </div>
            </div>
        </div>


        <div class="teachers-section teacher-page">
            <div class="section-title">
                <h2 class="my-4">Other Teachers</h2>
                <span class="color-accent-motion"></span>
                <span class="color-accent-motion"></span>
                <span class="color-accent-motion"></span>
            </div>
            <!--section-title end-->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-00d84c2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="00d84c2" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-21e7078"
                        data-id="21e7078" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d42a3fe elementor-widget elementor-widget-shelly-theachers-feed"
                                data-id="d42a3fe" data-element_type="widget"
                                data-widget_type="shelly-theachers-feed.default">
                                <div class="elementor-widget-container">

                                    <div class="teachers-section-grid">
                                        <div class="teachers">
                                            <div class="row">
                                                <?php  foreach($limit as $key => $techers){ ?>
                                                    <?php if($techers['status']=="1"){ ?>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="teacher">
                                                        <div class="teacher-img">
                                                            <a
                                                                href="<?php echo base_url('teacher-profile/').$techers['id'] ?>">
                                                                <img width="270" height="405"
                                                                    src="<?php echo base_url() ?>upload/<?php echo $techers['image'] ?>"
                                                                    class="w-100 wp-post-image teacher-img-img" alt=""
                                                                    loading="lazy"
                                                                    srcset="<?php echo base_url() ?>upload/<?php echo $techers['image'] ?> 270w"
                                                                    sizes="(max-width: 270px) 100vw, 270px"> </a>
                                                            <!--<div class="sc-div">-->

                                                            <!--    <img src="../assets/img/heart-regular-24.png" alt="">-->
                                                            <!--</div>-->
                                                            <div class="sc-div2">
                                                                <p class="text-white"><?php echo $techers['messages'] ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                               
                                                        <div class="teacher-info classes-col2 text-left">
                                                            <h3 class="teacher-info-border my-0 py-2 px-3">
                                                                <a
                                                                    href="<?php echo base_url('teacher-profile/').$techers['id'] ?>">
                                                                    <span><?php echo $techers['name'] ?></span> 
                                                                    <?php if($techers['paidstatus'] =="1"){ ?>
                                                               <img src="<?php echo base_url() ?>assets/img/check-circle-solid-24.png" class="px-2" alt="">
                                                               <?php }else { if($techers['paidstatus']=="0") {  ?>
                                                                 <img src="" class="px-2" alt="">
                                                               <?php } }  ?>
                                                                </a>
                                                            </h3>
                                                          
                                                            <p class="px-3 py-2"><span
                                                                    class="pr-2"><strong>Qualification</strong></span>
                                                                <?php echo $techers['highest_qualification'] ?>
                                                                <?php echo $techers['otherhighest_qualification'] ?>
                                                            </p>
                                                            <h6 class="px-3 my-0 py-2">Class: <img
                                                                    src="../assets/img/book-solid-24.png" alt=""
                                                                    class="px-2"><?php echo $techers['class'] ?></h6>
                                                            <div class="d-flex teacher-info-board">
                                                                <div
                                                                    class="py-2 px-2 teacher-info-span d-flex align-items-center text-center">
                                                                    <p class="px-2"><span
                                                                            class="pr-2"><strong>Subjects</strong></span><img
                                                                            class="teacher-info-img"
                                                                            src="../assets/img/building-regular-24.png"
                                                                            alt=""> <?php echo $techers['board'] ?>
                                                                        <!-- span class="px-2"><img src="assets/img/building-house-regular-24.png"
                                                                            alt="" class="teacher-info-img"> ICSE</span> -->
                                                                    </p>
                                                                    <!--  <span class="px-2"><img src="assets/img/building-house-regular-24.png"
                                                                            alt="" class="teacher-info-img"> ICSE</span>  -->
                                                                    <!-- <span class="px-2"><img
                                                                            src="assets/img/bank-solid-24.png" class="teacher-info-img" alt="">
                                                                        IGCSE</span> -->
                                                                    <!--  <span class="px-2"><img
                                                                            src="assets/img/body-regular-24.png" class="teacher-info-img" alt="">
                                                                        SSC</span> -->
                                                                    <!-- <span class="px-2"><img
                                                                            src="assets/img/school-solid-24.png"  class="teacher-info-img" alt="">
                                                                        University</span> -->
                                                                </div>
                                                            </div>
                                                            <h6 class="px-3 teacher-info-border my-0 py-3">Price : <span
                                                                    class="teacher-price px-2">
                                                                    <?php echo $techers['price'] ?></span></h6>
                                                             <!-- <div
                                                                  class="teacher-info-board justify-content-center text-center">
                                                                  <a class="btn-default w-100 send-msg"
                                                                    href="<?php echo base_url('TeachersController') ?>"
                                                                    onclick="changeStatus(16)" rel="nofollow">Book a trial Class </a>
                                                             </div> -->
                                                            <div class="teacher-info-board justify-content-center text-center">
                                                                <a class="btn-default w-100 send-msg hidden-data-get" id="btn" target="_blank"
                                                                rel="nofollow"
                                                                data-id="<?php echo $techers['id'] ?>"
                                                                data-name="<?php echo $techers['name'] ?>"
                                                                data-email="<?php echo $techers['email'] ?>">Book a trial Class </a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--teacher end-->
                                                </div>
                                                <?php } } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/826a7e3dce.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
      $('.hidden-data-get').on('click',function(){
                var id = $(this).attr('data-id');
                var names = $(this).attr('data-name');
                var email = $(this).attr('data-email'); 
                var hdnid = $("#hiddenid").val(id);
                var hdnnam = $("#techname").val(names);
                var recipient = $("#hiddenemail").val(email);
                 $("#myModals").modal('show');
            })


$(document).ready(function() {
    $("#textes").hide();
    $("#textmessage").hide();



});

function saveRatinng(values) {
    $("#rates").val(values);
    $("#textes").show();
}

function saveFunction(sid, techid) {
    var rting = $("#rates").val();
    var review = $("#review").val();
    if (rting == "") {
        $("#textmessage").show();
        $("#textmessage").html("Please Give Rating Then You Can Submit");
        $("#textmessage").fadeout(1000);

    } else {
        $.ajax({
            url: "<?php echo base_url('students/RatingController') ?>",
            type: "POST",
            cache: false,
            data: {
                studentid: sid,
                teachid: techid,
                review: review,
                rting: rting
            },
            success: function(data) {


                Swal.fire(
                    'Thank You!',
                    'Your rating has been save succesfully!',
                    'success'
                )
                window.location.reload();

            }
        });
    }

}
</script>

<script>
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        "<i class='fa fa-caret-left'></i>",
        "<i class='fa fa-caret-right'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
</script>

<script>
function withoutJquery() {

    console.time('time1');
    var temp = $("<input>");
    $("body").append(temp);
    temp.val($('#copyText2').text()).select();
    document.execCommand("copy");
    temp.remove();
    console.timeEnd('time1');
    $("#message").addClass('success-msg').html("Link Ready to Share");

    $("#message").show().delay(1000).fadeOut();
}


function openModel(st) {

    var hdnid = $("#hiddenid").val(st);
    $("#myModal").modal('show');
}
</script>

<?php 
   $this->load->view('includes/footer');
   ?>