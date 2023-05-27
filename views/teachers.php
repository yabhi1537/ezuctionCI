<?php
   $this->load->view('includes/header');
   
   ?>
       <style>
        
        .modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 99999!important;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}
p.limited-text {
    text-overflow: ellipsis;
    
    display: block;
    overflow: hidden;
    width: 25em;
}



.sc-div {
  position: absolute;
  bottom: 26.9rem;
  right: 21rem;
  width: 114px;
  background: linear-gradient(180deg, var(--shelly-color-primary), var(--shelly-color-accent));
  z-index: 8;
  text-align: center;
  border-radius: 2rem;
  padding: 2px;
}
.sc-div2{
    top: 0;
    right: 33px;
    width: 27%;
    background: linear-gradient(180deg, #056dfe, #f37335);
    z-index: 99;
    text-align: center;
    padding: 0px;
    font-size: 12px;
}
@media only screen and (min-width: 360px) and (max-width: 768px){
    .sc-div2{
        top: 0 !important;
    right: -14px !important;
    width: 27%;
    background: linear-gradient(180deg, #056dfe, #f37335);
    z-index: 99;
    text-align: center;
    padding: 0px;
    font-size: 12px;
    }
}
        
    </style>
<section class="pager-section">
   <div class="pager-content">
       <?php 
            $currentURL = $this->uri->segment(1);
            ?>
            
      <ul class="breadcrumbs has-link-effect">
         <li><a href="<?php echo base_url() ?>" itemprop="url">Home</a></li>
         <?php if($currentURL=="Teachers"){ ?>
         <li><span><a href="<?php echo base_url('coaching-center') ?>" style="font-weight: 800;">Teachers</a></span></li>
         <?php }else{ ?>
         
         <li><span><a href="<?php echo base_url('coaching-center') ?>">Teachers</a></span></li>
         
         <?php } ?>
      </ul>
   </div>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shelly-shape">
      <path class="shelly-shape--fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
         c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
         c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
   </svg>
</section>
<section class="page-content">
   <div class="page-container">
      <div class="page-content-markup">
         <div data-elementor-type="wp-page" data-elementor-id="486" class="elementor elementor-486">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-a4cce53 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a4cce53" data-element_type="section">
               <div class="elementor-container elementor-column-gap-no">
                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-90ea1cc" data-id="90ea1cc" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5b6b70d elementor-widget elementor-widget-shelly-theachers-feed" data-id="5b6b70d" data-element_type="widget" data-widget_type="shelly-theachers-feed.default">
                           <div class="elementor-widget-container">
                              <div class="teachers-section-grid">
                                 <div class="teachers">
                                    <div class="row">
                                           
                                          <?php
                                           // print_r($discount[0]['message']);
                                            foreach($teachers as  $teacher){
                                            
                                            ?>
                                            
                                            <?php if($teacher['status']=="1"){ ?>
                                         <div class="col-lg-4 col-md-6 col-sm-12 px-0">
                                             
                                          <div class="teacher">
                                                <div class="teacher-img">
                                                    <a href="<?php echo base_url('teacher-profile/').$teacher['id'] ?>">
                                                                    <?php  if($teacher['image']==""){ ?>
                                                                    <img width="270" height="405"
                                                                    src="<?php echo base_url() ?>assets/images/profile.png"
                                                                    class="w-100 wp-post-image teacher-img-img" alt="" loading="lazy"
                                                                    srcset="<?php echo base_url() ?>assets/images/profile.png 270w"
                                                                    sizes="(max-width: 270px) 100vw, 270px" /> 
                                                                    <?php }else{ ?>
                                                                    
                                                                    <img width="270" height="405"
                                                                    src="<?php echo base_url() ?>upload/<?php echo $teacher['image'] ?>"
                                                                    class="w-100 wp-post-image teacher-img-img" alt="" loading="lazy"
                                                                    srcset="<?php echo base_url() ?>upload/<?php echo $teacher['image'] ?> 270w"
                                                                    sizes="(max-width: 270px) 100vw, 270px" /> 
                                                                    
                                                                    <?php } ?>
                                                                    </a>
                                                                    
                                                    <?php if(($teacher['teacher_id'])!=""){ ?>
                                                    <div class="sc-div">
                                                       <?php echo $teacher['teacher_id'] ?>
                                                    </div>
                                                    
                                                    <div class=" sc-div2">
                                                            <?php 
                                                                $techid = $teacher['id'];
                                                                $sqlq = "SELECT * FROM `batches` WHERE teach_id='$techid'";
                                                                $querys = $this->db->query($sqlq);
                                                                $batdata = $querys->result();
                                                                $mydata="";
                                                                foreach($batdata as $key =>$value){
                                                                
                                                                    $mydata .= $value->message.",";
                                                                }
                                                                $offerdata =  rtrim($mydata,",");
                                                               
                                                            
                                                            ?>
                                                            
                                                        
                                                        <?php if(!empty($offerdata)){ ?>
                                                        <p class="text-white my-1"> <?php echo $offerdata ?></p>
                                                        <?php } ?>
                                                    </div>
                                                    <?php } ?>
                                                   
                                                    
                                                   
                                                    
                                                </div>
                                                <div class="teacher-info classes-col2 text-left">
                                                    <h3 class="teacher-info-border my-0 py-2 px-3">
                                                        <a
                                                            href="<?php echo base_url('teacher-profile/').$teacher['id'] ?>">
                                                            <?php echo $teacher['name'] ?>
                                                            <?php if($teacher['paidstatus']=="1"){ ?>
                                                               <img src="<?php echo base_url() ?>assets/img/check-circle-solid-24.png" class="px-2" alt="">
                                                               <?php }else { if($teacher['paidstatus']=="0") {  ?>
                                                                 <img src="" class="px-2" alt="">
                                                               <?php } } ?>
                                                               </a>
                                                    </h3>
                                        
                                                    <p class="px-3 py-2 teacher-qulification"><span class="pr-2"><strong>Qualification</strong></span>
                                                                <?php echo $teacher['highest_qualification'] ?> <?php echo $teacher['otherhighest_qualification'] ?></p>
                                                    <h6 class="px-3 my-0 py-0">Class: <img
                                                                    src="assets/img/book-solid-24.png" alt=""
                                                                    class="px-2"><?php echo $teacher['class']?></h6>
                                                                    
                                                            <div class="d-flex teacher-info-board">
                                                        <div class="py-0 px-2 teacher-info-span d-flex align-items-center text-center">
                                                                    <p class="px-2"><span class="pr-2"><strong>Board</strong></span><img class="teacher-info-img"
                                                                            src="assets/img/building-regular-24.png"
                                                                            alt=""> <?php echo $teacher['board'] ?> <!-- span class="px-2"><img src="assets/img/building-house-regular-24.png"
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
                                                    
                                                    <h6 class="px-3 teacher-info-border my-0 pb-2">Fees : <span
                                                            class="teacher-price px-2">&#8377; <?php echo $teacher['price'] ?></span></h6>
                                                    
                                                            <div class="teacher-info-board justify-content-center text-center">
                                              
                                                         <!--<a class="btn-default w-100 send-msg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#" target="_blank" rel="nofollow">Send Message </a>-->
                                                         <a class="btn-default w-100 send-msg hidden-data-get" id="btn" target="_blank"
                                                            rel="nofollow"
                                                            data-id="<?php echo $teacher['id'] ?>"
                                                            data-techid="<?php echo $teacher['name'] ?>"
                                                            data-email="<?php echo $teacher['email'] ?>"> Book a trial  Class </a>
                                                         </div>
                                                </div>
                                            </div>
                                          <!--teacher end-->
                                       </div>
                                       <?php } } ?>
                                       
                                       <div id="myModal" class="modal fade" tabindex="-1">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">×</span>
                                                                            </button>
                                                                          </div>
                                                                    
                                                                          <form class="text-left" method="post" action="<?php echo base_url('InquireController') ?>">
                                                                          <div class="modal-body">
                                                                            
                                                                              <div class="form-group">
                                                                              
                                                                              <input type="text" class="form-control" id="hiddenemail" name="hiddenemail">
                                                                                  <input type="text" class="form-control" id="hiddenid" name="hiddenid">
                                                                                  <input type="text" class="form-control" id="techname" name="techname">
                                                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                                                <input type="text" class="form-control" name="name" id="recipient-name" required>
                                                                                                                                                              </div>
                                                                               <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label">Email:</label>
                                                                                <input type="email" class="form-control" name="recipient_mail" required >
                                                                                                                                                              </div>
                                                                           
                                                                                    <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label">Phone No:</label>
                                                                               <input type="text" class="textfield" value="" id="extra7" name="phone" required onkeypress="return isNumber(event)"  />
                                                                              </div>
                                                                                <span id="message" style="color:red;"></span>
                                                                              <div class="form-group">
                                                                                <label for="message-text" class="col-form-label">Message:</label>
                                                                                <textarea class="form-control" id="message-text" name="message" required>Dear Sir/Mam, You have received one request for a trail class.  Please check your message on edukxn.com .
                                                                                         Regards,
                                                                                         Edukxn.com</textarea>
                                                                                 </div>
                                                                           
                                                                          </div>
                                                                          <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary send-msge">Book a trial Class</button>
                                                                          </div>
                                                                           </form>
                                                                        </div>
                                                                      </div>
                                                                   </div>    
                                                                   
                                       <!--<div class="col-lg-3 col-md-6 col-sm-12">-->
                                       <!--   <div class="teacher">-->
                                       <!--      <div class="teacher-img">-->
                                       <!--         <a href="https://shelly.merku.love/teacher/faadi-al-rahman/">-->
                                       <!--            <img width="270" height="405" src="https://shubhvaniitsolutions.in/techers/upload/techert21.png" class="w-100 wp-post-image" alt="" loading="lazy" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/img6-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-1365x2048.png 1365w, https://shelly.merku.love/wp-content/uploads/2020/11/img6.png 1376w" data-lazy-sizes="(max-width: 270px) 100vw, 270px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/img6-270x405.png" />-->
                                       <!--            <noscript><img width="270" height="405" src="https://shelly.merku.love/wp-content/uploads/2020/11/img6-270x405.png" class="w-100 wp-post-image" alt="" loading="lazy" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/img6-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/img6-1365x2048.png 1365w, https://shelly.merku.love/wp-content/uploads/2020/11/img6.png 1376w" sizes="(max-width: 270px) 100vw, 270px" /></noscript>-->
                                       <!--         </a>-->
                                               
                                       <!--      </div>-->
                                       <!--      <div class="teacher-info">-->
                                       <!--         <h3>-->
                                       <!--            <a href="https://shelly.merku.love/teacher/faadi-al-rahman/">-->
                                       <!--            Faadi Al Rahman                                        </a>-->
                                       <!--         </h3>-->
                                       <!--         <a href="#" class="teacher-info--category">Instructor</a>-->
                                       <!--      </div>-->
                                       <!--   </div>-->
                                          <!--teacher end-->
                                       <!--</div>-->
                                       <!--<div class="col-lg-3 col-md-6 col-sm-12">-->
                                       <!--   <div class="teacher">-->
                                       <!--      <div class="teacher-img">-->
                                       <!--         <a href="https://shelly.merku.love/teacher/chikelu-obasea/">-->
                                       <!--            <img width="270" height="405" src="https://shubhvaniitsolutions.in/techers/upload/techert21.png" class="w-100 wp-post-image" alt="" loading="lazy" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/img7-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img7-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img7-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img7-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img7-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/img7.png 1336w" data-lazy-sizes="(max-width: 270px) 100vw, 270px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/img7-270x405.png" />-->
                                       <!--            <noscript><img width="270" height="405" src="https://shelly.merku.love/wp-content/uploads/2020/11/img7-270x405.png" class="w-100 wp-post-image" alt="" loading="lazy" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/img7-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img7-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img7-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img7-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img7-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/img7.png 1336w" sizes="(max-width: 270px) 100vw, 270px" /></noscript>-->
                                       <!--         </a>-->
                                                
                                       <!--      </div>-->
                                       <!--      <div class="teacher-info">-->
                                       <!--         <h3>-->
                                       <!--            <a href="https://shelly.merku.love/teacher/chikelu-obasea/">-->
                                       <!--            Chikelu Obasea                                        </a>-->
                                       <!--         </h3>-->
                                       <!--         <a href="#" class="teacher-info--category">Art Teacher</a>-->
                                       <!--      </div>-->
                                       <!--   </div>-->
                                          <!--teacher end-->
                                       <!--</div>-->
                                       <!--<div class="col-lg-3 col-md-6 col-sm-12">-->
                                       <!--   <div class="teacher">-->
                                       <!--      <div class="teacher-img">-->
                                       <!--         <a href="https://shelly.merku.love/teacher/katayama-fumiki/">-->
                                       <!--            <img width="270" height="405" src="https://shubhvaniitsolutions.in/techers/upload/techert21.png" class="w-100 wp-post-image" alt="" loading="lazy" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/img8-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img8-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img8-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img8-768x1151.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img8-1025x1536.png 1025w, https://shelly.merku.love/wp-content/uploads/2020/11/img8.png 1204w" data-lazy-sizes="(max-width: 270px) 100vw, 270px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/img8-270x405.png" />-->
                                       <!--            <noscript><img width="270" height="405" src="https://shelly.merku.love/wp-content/uploads/2020/11/img8-270x405.png" class="w-100 wp-post-image" alt="" loading="lazy" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/img8-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img8-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img8-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img8-768x1151.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img8-1025x1536.png 1025w, https://shelly.merku.love/wp-content/uploads/2020/11/img8.png 1204w" sizes="(max-width: 270px) 100vw, 270px" /></noscript>-->
                                       <!--         </a>-->
                                                
                                       <!--      </div>-->
                                       <!--      <div class="teacher-info">-->
                                       <!--         <h3>-->
                                       <!--            <a href="https://shelly.merku.love/teacher/katayama-fumiki/">-->
                                       <!--            Katayama Fumiki                                        </a>-->
                                       <!--         </h3>-->
                                       <!--         <a href="#" class="teacher-info--category">Teacher</a>-->
                                       <!--      </div>-->
                                       <!--   </div>-->
                                          <!--teacher end-->
                                       <!--</div>-->
                                       <!--<div class="col-lg-3 col-md-6 col-sm-12">-->
                                       <!--   <div class="teacher">-->
                                       <!--      <div class="teacher-img">-->
                                       <!--         <a href="https://shelly.merku.love/teacher/dai-jiang/">-->
                                       <!--            <img width="270" height="405" src="https://shubhvaniitsolutions.in/techers/upload/techert21.png" class="w-100 wp-post-image" alt="" loading="lazy" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1365x2048.png 1365w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5.png 1376w" data-lazy-sizes="(max-width: 270px) 100vw, 270px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-270x405.png" />-->
                                       <!--            <noscript><img width="270" height="405" src="https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-270x405.png" class="w-100 wp-post-image" alt="" loading="lazy" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5-1365x2048.png 1365w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher5.png 1376w" sizes="(max-width: 270px) 100vw, 270px" /></noscript>-->
                                       <!--         </a>-->
                                                
                                       <!--      </div>-->
                                       <!--      <div class="teacher-info">-->
                                       <!--         <h3>-->
                                       <!--            <a href="https://shelly.merku.love/teacher/dai-jiang/">-->
                                       <!--            Dai Jiang                                        </a>-->
                                       <!--         </h3>-->
                                       <!--         <a href="#" class="teacher-info--category">English Teacher</a>-->
                                       <!--      </div>-->
                                       <!--   </div>-->
                                          <!--teacher end-->
                                       <!--</div>-->
                                       <!--<div class="col-lg-3 col-md-6 col-sm-12">-->
                                       <!--   <div class="teacher">-->
                                       <!--      <div class="teacher-img">-->
                                       <!--         <a href="https://shelly.merku.love/teacher/hubert-franck/">-->
                                       <!--            <img width="270" height="405" src="https://shubhvaniitsolutions.in/techers/upload/techert21.png" class="w-100 wp-post-image" alt="" loading="lazy" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-768x1151.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-1025x1536.png 1025w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6.png 1342w" data-lazy-sizes="(max-width: 270px) 100vw, 270px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-270x405.png" />-->
                                       <!--            <noscript><img width="270" height="405" src="https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-270x405.png" class="w-100 wp-post-image" alt="" loading="lazy" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-768x1151.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6-1025x1536.png 1025w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher6.png 1342w" sizes="(max-width: 270px) 100vw, 270px" /></noscript>-->
                                       <!--         </a>-->
                                               
                                       <!--      </div>-->
                                       <!--      <div class="teacher-info">-->
                                       <!--         <h3>-->
                                       <!--            <a href="https://shelly.merku.love/teacher/hubert-franck/">-->
                                       <!--            Hubert Franck                                        </a>-->
                                       <!--         </h3>-->
                                       <!--         <a href="#" class="teacher-info--category">Instructor</a>-->
                                       <!--      </div>-->
                                       <!--   </div>-->
                                          <!--teacher end-->
                                       <!--</div>-->
                                       <!--<div class="col-lg-3 col-md-6 col-sm-12">-->
                                       <!--   <div class="teacher">-->
                                       <!--      <div class="teacher-img">-->
                                       <!--         <a href="https://shelly.merku.love/teacher/vincent-luggers/">-->
                                       <!--            <img width="270" height="405" src="https://shubhvaniitsolutions.in/techers/upload/techert21.png" class="w-100 wp-post-image" alt="" loading="lazy" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7.png 1101w" data-lazy-sizes="(max-width: 270px) 100vw, 270px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-270x405.png" />-->
                                       <!--            <noscript><img width="270" height="405" src="https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-270x405.png" class="w-100 wp-post-image" alt="" loading="lazy" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/teacher7.png 1101w" sizes="(max-width: 270px) 100vw, 270px" /></noscript>-->
                                       <!--         </a>-->
                                               
                                       <!--      </div>-->
                                       <!--      <div class="teacher-info">-->
                                       <!--         <h3>-->
                                       <!--            <a href="https://shelly.merku.love/teacher/vincent-luggers/">-->
                                       <!--            Vincent Luggers                                        </a>-->
                                       <!--         </h3>-->
                                       <!--         <a href="#" class="teacher-info--category">Art Teacher</a>-->
                                       <!--      </div>-->
                                       <!--   </div>-->
                                          <!--teacher end-->
                                       <!--</div>-->
                                       <!--<div class="col-lg-3 col-md-6 col-sm-12">-->
                                       <!--   <div class="teacher">-->
                                       <!--      <div class="teacher-img">-->
                                       <!--         <a href="https://shelly.merku.love/teacher/masood-el-toure/">-->
                                       <!--            <img width="270" height="405" src="https://shubhvaniitsolutions.in/techers/upload/techert21.png" class="w-100 wp-post-image" alt="" loading="lazy" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/img5-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/img5.png 1120w" data-lazy-sizes="(max-width: 270px) 100vw, 270px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/img5-270x405.png" />-->
                                       <!--            <noscript><img width="270" height="405" src="https://shelly.merku.love/wp-content/uploads/2020/11/img5-270x405.png" class="w-100 wp-post-image" alt="" loading="lazy" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/img5-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/img5.png 1120w" sizes="(max-width: 270px) 100vw, 270px" /></noscript>-->
                                       <!--         </a>-->
                                                
                                       <!--      </div>-->
                                       <!--      <div class="teacher-info">-->
                                       <!--         <h3>-->
                                       <!--            <a href="https://shelly.merku.love/teacher/masood-el-toure/">-->
                                       <!--            Masood El Toure                                        </a>-->
                                       <!--         </h3>-->
                                       <!--         <a href="#" class="teacher-info--category">Teacher</a>-->
                                       <!--      </div>-->
                                       <!--   </div>-->
                                          <!--teacher end-->
                                       <!--</div>-->
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
      <div class="clearfix"></div>
   </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

		// function openModel(st)
		// {
		    
		//     var hdnid = $("#hiddenid").val(st);
		//     $("#myModal").modal('show');
		// }
      $('.hidden-data-get').on('click',function(){
                var id = $(this).attr('data-id');
                var email = $(this).attr('data-email');
                var techid = $(this).attr('data-techid');
                var hdnid = $("#hiddenid").val(id);
                var recipient = $("#hiddenemail").val(email);
                var techname = $("#techname").val(techid);
                 $("#myModal").modal('show');
            })

		
		
		
function myValidation() {
var mobile = $('#recipientphone').val();
     var countm =  mobile.length;
     if(countm > 10){
         
         $('#recipientphone').val('');
         $('#message').html('Enter Proper Number');
          $("#message").show().delay(2000).fadeOut();
     }

}
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


</script>

<?php
   $this->load->view('includes/footer');
   
   ?>