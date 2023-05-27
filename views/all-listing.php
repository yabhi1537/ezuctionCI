<?php
   $this->load->view('includes/header');

   
   ?>
<style>
.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 99999 !important;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}

p.teacher-qulification {
    text-overflow: ellipsis;

    display: block;
    overflow: hidden;
    width: 25em;
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

/* .star-rating label:hover,
.star-rating label:hover~label {
    color: #fc0;
} */
</style>


<!--    <section class=" banner d-flex align-items-center">-->
<!--    <div class="container">-->
<!--        <div class="w-100">-->
<!--            <div class="elementor-widget-container banner-cont">-->

<!--               <ul class="nav nav-tabs" role="tablist">-->
<!--                	<li class="nav-item">-->
<!--                		<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Regular Exam</a>-->
<!--                	</li>-->
<!--                	<li class="nav-item">-->
<!--                		<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Competitive Exam</a>-->
<!--                	</li>-->

<!--                </ul><!-- Tab panes -->
<!--                <div class="tab-content">-->

<!--                	<div class="tab-pane active" id="tabs-1" role="tabpanel">-->
<!--                		<form method="post" action="<?php echo base_url('MainController/filterData') ?>" >-->
<!--                <div class="elementor-divider top-search row banner-srch py-2 justify-content-between">-->

<!--                    <div class="field col-lg-2 d-flex align-items-center my-2 px-0 justify-content-center">-->
<!--                        <div class="slc-wp w-100">-->
<!--                            <div class="dropdown bootstrap-select dropup"><select-->
<!--                                    class="border-0 rounded-0 tabindex= shadow-none" select="" name="clasees" id="clasees" required>-->
<!--                                    <option disabled selected>Classes</option>-->

<!--                                            <option value="6">6</option>-->
<!--                                            <option value="7">7</option>-->
<!--                                            <option value="8">8</option>-->
<!--                                            <option value="9">9</option>-->
<!--                                            <option value="10">10</option>-->
<!--                                            <option value="11">11</option>-->
<!--                                            <option value="12">12</option>-->
<!--                                </select>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="field loc col-lg-2 d-flex align-items-center my-2 px-0 justify-content-center">-->
<!--                        <div class="slc-wp w-100">-->
<!--                            <div class="dropdown bootstrap-select dropup">-->
<!--                                <select-->
<!--                                    class="border-0 rounded-0 tabindex= shadow-none" name="courses" id="courses">-->
<!--                                    <option disabled selected>Courses</option>-->

<!--                                             <option value="Maths">Maths</option>-->
<!--                                            <option value="Hindi">Hindi</option>-->
<!--                                            <option value="English">English</option>-->
<!--                                            <option value="Science">Science</option>-->
<!--                                </select>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="field slc col-lg-2 d-flex align-items-center my-2 px-0">-->
<!--                        <div class="slc-wp w-100">-->
<!--                            <div class="dropdown bootstrap-select dropup"><select-->
<!--                                    class="border-0 rounded-0 tabindex= shadow-none" name="board" id="board">-->
<!--                                    <option disabled selected>Board</option>-->
<!--                                             <option value="ICSE">I.C.S.E.</option>-->
<!--                                            <option value="CBSE">CBSE</option>-->
<!--                                            <option value="State Board">State Board</option>-->
<!--                                </select>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="field slc col-lg-2 d-flex align-items-center my-2 px-0">-->
<!--                        <div class="slc-wp w-100">-->
<!--                            <div class="dropdown bootstrap-select dropup"><select-->
<!--                                    class="border-0 rounded-0 tabindex= shadow-none" name="experience" id="experience">-->
<!--                                    <option disabled selected>Experience</option>-->
<!--                                            <option value="0-5 years">0-5 years</option>-->
<!--                                            <option value="5-10 years">5-10 years</option>-->
<!--                                            <option value="10-15 years">10-15 years</option>-->
<!--                                            <option value="15-20 years">15-20 years</option>-->
<!--                                            <option value="More than 20 years">More than 20 years</option>-->

<!--                                </select>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                     <div class="field col-lg-2 d-flex align-items-center my-2 px-0 justify-content-center">-->
<!--                        <div class="slc-wp w-100">-->
<!--                            <div class="dropdown bootstrap-select dropup"><select-->
<!--                                    class="border-0 rounded-0 tabindex= shadow-none" select="" name="location" id="location" required>-->
<!--                                    <option disabled selected>Location</option>-->


<!--                                    <?php  foreach($location as $locations ){ ?>-->

<!--                                            <option value="<?php echo $locations['distrcit'] ?>"><?php echo $locations['distrcit'] ?></option>-->

<!--                                    <?php } ?> -->
<!--                                </select>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="col-lg-2 px-0 my-2 d-flex align-items-center justify-content-center">-->
<!--                        <button class="thm-btn d-flex align-items-center rounded-0 h-100 " type="submit" id="filter"><i-->
<!--                                class="fas fa-search pr-2" ></i>Search</button>-->
<!--                    </div>-->

<!--                </div>-->
<!--                </form>-->
<!--                	</div>-->

<!--                	<div class="tab-pane " id="tabs-2" role="tabpanel">-->
<!--                		 <form method="post" action="<?php echo base_url('MainController/filterData') ?>" >-->
<!--                <div class="elementor-divider top-search row banner-srch py-2 justify-content-between">-->

<!--                    <div class="field col-lg-4 -flex align-items-center my-2 px-0 justify-content-center">-->
<!--                        <div class="slc-wp w-100">-->
<!--                            <div class="dropdown bootstrap-select dropup"><select-->
<!--                                    class="border-0 rounded-0 tabindex= shadow-none" name="clasees" id="clasees">-->
<!--                                    <option disabled selected>Classes</option>-->

<!--                                            <option value="gate">GATE / NET/ IIT-JAM</option>-->
<!--                                            <option value="jee">JEE and NEET</option>-->
<!--                                            <option value="ssc">SSC/BANK/ RAILWAYS/GOVT. EXAM</option>-->
<!--                                            <option value="defence">DEFENCE</option>-->
<!--                                            <option value="upsc">UPSC/PCS</option>-->

<!--                                </select>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->


<!--                    <div class="field slc col-lg-4 d-flex align-items-center my-2 px-0">-->
<!--                        <div class="slc-wp w-100">-->
<!--                            <div class="dropdown bootstrap-select dropup"><select-->
<!--                                    class="border-0 rounded-0 tabindex= shadow-none" name="experience" id="experience">-->
<!--                                    <option disabled selected>Experience</option>-->
<!--                                            <option value="0-5 years">0-5 years</option>-->
<!--                                            <option value="5-10 years">5-10 years</option>-->
<!--                                            <option value="10-15 years">10-15 years</option>-->
<!--                                            <option value="15-20 years">15-20 years</option>-->
<!--                                            <option value="More than 20 years">More than 20 years</option>-->

<!--                                </select>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 px-0 my-2 d-flex align-items-center justify-content-center">-->
<!--                        <button class="thm-btn d-flex align-items-center rounded-0 h-100 " type="submit" id="filter"><i-->
<!--                                class="fas fa-search pr-2" ></i>Search</button>-->
<!--                    </div>-->

<!--                </div>-->
<!--                </form>-->
<!--                	</div>-->

<!--                </div>-->


<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="pager-section">
    <div class="pager-content py-2">
        <ul class="breadcrumbs has-link-effect">
            <li><a href="<?php echo base_url() ?>" itemprop="url">Home</a></li>
            <li><span><a href="<?php echo base_url('Teachers') ?>" itemprop="url">Teachers</a></span></li>
        </ul>

        <?php if(count($searchdata)!="0"){ ?>
        <h4 style="margin-bottom: -23px;">
            <u><?php  echo count($searchdata); ?> Results found</u>
        </h4>
        <?php } ?>
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
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-a4cce53 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="a4cce53" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-90ea1cc"
                            data-id="90ea1cc" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5b6b70d elementor-widget elementor-widget-shelly-theachers-feed"
                                    data-id="5b6b70d" data-element_type="widget"
                                    data-widget_type="shelly-theachers-feed.default">
                                    <div class="elementor-widget-container">
                                        <div class="teachers-section-grid">
                                            <div class="teachers">
                                                <div class="row">
                                                    <?php
                                           
                                        //   print_r($searchdata);
                                          
                                            if(!empty($searchdata)){
                                                foreach($searchdata as $key => $datasearch){ ?>

                                                     <?php if($datasearch->status =="1"){ ?>
                                                    <div class="col-lg-12 col-md-6 col-sm-12 mb-5">
                                                        <div class="teacher all-teach-list">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <div class="teacher-img">
                                                                        <a class="justify-content-center"
                                                                            href="<?php echo base_url('teacher-profile/').$datasearch->id ?>">
                                                                            <img width="270" height="405"
                                                                                src="<?php echo base_url() ?>upload/<?php echo $datasearch->image ?>"
                                                                                class="w-100 wp-post-image teacher-img-img"
                                                                                alt="" loading="lazy"
                                                                                srcset="<?php echo base_url() ?>upload/<?php echo $datasearch->image ?> 270w"
                                                                                sizes="(max-width: 270px) 100vw, 270px" />
                                                                        </a>
                                                                        <div class="sc-div">

                                                                            <!--<img src="<?php echo base_url('assets/img/heart-regular-24.png') ?>" alt="">-->
                                                                            EK22-11<?php echo $datasearch->id ?>
                                                                        </div>
                                                                        <?php 
                                                                $techid = $datasearch->id;
                                                                $sqlq = "SELECT * FROM `batches` WHERE teach_id='$techid'";
                                                                $querys = $this->db->query($sqlq);
                                                                $batdata = $querys->result();
                                                                $mydata="";
                                                                foreach($batdata as $key =>$value){
                                                                
                                                                    $mydata .= $value->message.",";
                                                                }
                                                                $offerdata =  rtrim($mydata,",");
                                                               
                                                            
                                                            ?>

                                                                        <?php 
                                                        if(!empty($offerdata)){
                                                    ?>
                                                                        <div class="all-teach-list sc-div2 ">
                                                                            <?php echo $offerdata ?>
                                                                        </div>
                                                                        <?php } ?>

                                                                        <a class="mt-2 btn btn-default justify-content-center"
                                                                            href="<?php echo base_url('teacher-profile/').$datasearch->id ?>">View
                                                                            Profile</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <div
                                                                        class="teacher-info classes-col2 text-left mt-5">
                                                                        <h3 class="teacher-info-border my-0 py-2 px-3">
                                                                            <a
                                                                                href="<?php echo base_url('teacher-profile/').$datasearch->id ?>">
                                                                                <?php echo $datasearch->name ?>  
                                                                                <?php if($datasearch->paidstatus =="1"){ ?>
                                                                                <img src="<?php echo base_url() ?>assets/img/check-circle-solid-24.png" class="px-2" alt="">
                                                                                <?php }else { if($datasearch->paidstatus=="0") {  ?>
                                                                                    <img src="" class="px-2" alt="">
                                                                                <?php } } ?> 
                                                                                </a>
                                                                        </h3>

                                                                        <p class="px-3 py-1 teacher-qulification my-1">
                                                                            <span
                                                                                class="pr-2"><strong>Qualification</strong></span>
                                                                            <?php echo $datasearch->highest_qualification ?>
                                                                        </p>
                                                                        <h6 class="px-3 my-0 py-1">Class: <img
                                                                                src="assets/img/book-solid-24.png"
                                                                                alt=""
                                                                                class="px-2"><?php echo $datasearch->class?>
                                                                        </h6>

                                                                        <div class="d-flex teacher-info-board ">
                                                                            <div
                                                                                class="py-1 px-2 teacher-info-span d-flex align-items-center text-center">
                                                                                <p class="px-2 my-0"><span
                                                                                        class="pr-2"><strong>Board</strong></span><img
                                                                                        class="teacher-info-img"
                                                                                        src="assets/img/building-regular-24.png"
                                                                                        alt="">
                                                                                    <?php echo $datasearch->board ?>
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
                                                                        <?php if(!empty($datasearch->price)){ ?>
                                                                        <h6 class="px-3 teacher-info-border my-0 py-2">
                                                                            Fees : <span class="teacher-price px-2"
                                                                                style="color: black;">
                                                                                <?php echo $datasearch->price ?></span>
                                                                        </h6>
                                                                        <?php } ?>


                                                                        <h6 class="px-3 my-0 py-2">Location : <span
                                                                                class="teacher-price px-2"
                                                                                style="color: #494949;">
                                                                                <?php echo $datasearch->area ?></span>
                                                                        </h6>

                                                                        <h6 class="px-3 my-0 py-2">Mode : <span
                                                                                class="teacher-price px-2"
                                                                                style="color: #494949;">
                                                                                <?php echo $datasearch->mode ?></span>
                                                                        </h6>


                                                                        <!--<div class="teacher-info-board justify-content-center text-center">-->
                                                                        <!--<a class="btn-default w-100 send-msg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#" target="_blank" rel="nofollow">Send Message </a>-->
                                                                        <!--     <a class="btn-default w-100 send-msg" id="btn" target="_blank" rel="nofollow" onClick="openModel(<?php echo $datasearch->id ?>)">Book a trial Class </a>-->


                                                                        <!--</div>-->
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                  <?php 
                                                                  $sqlrat = "SELECT * FROM `ratings` WHERE techid='$techid'";
         
                                                                  $queryrat = $this->db->query($sqlrat);
                                                                  $ratingdata = $queryrat->num_rows();
                                                                    
                                                                //   print_r($ratingdata);die();
                                                                  ?>
                                                                  
                                                                    <div class="star-rating">
                                                                        <input type="radio" value="5" <?php  echo   ($ratingdata == 5)? "checked" : ""; ?>  />
                                                                        <label for="5-stars"
                                                                            class="star">&#9733;</label>
                                                                        <input type="radio" value="4" <?php  echo  ($ratingdata == 4)? "checked" : ""; ?> />
                                                                        <label for="4-stars"
                                                                            class="star">&#9733;</label>
                                                                        <input type="radio" value="3" <?php  echo  ($ratingdata == 3)? "checked" : ""; ?>/>
                                                                        <label for="3-stars"
                                                                            class="star">&#9733;</label>
                                                                        <input type="radio" value="2" <?php  echo  ($ratingdata == 2)? "checked" : ""; ?> />
                                                                        <label for="2-stars"
                                                                            class="star">&#9733;</label>
                                                                        <input type="radio" value="1" <?php  echo  ($ratingdata == 1)? "checked" : ""; ?> />
                                                                        <label for="1-star" class="star">&#9733;</label>
                                                                    </div>
                                                                    
                                                                    <div class="col-lg-12">
                                                                        <div
                                                                            class="teacher-info-board teacher-info-board-btn  justify-content-center text-center" style="margin-top: 23%">
                                                                            <!--<a class="btn-default w-100 send-msg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#" target="_blank" rel="nofollow">Send Message </a>-->
                                                                            <a class="btn-default w-100 send-msg"
                                                                                id="btn" target="_blank" rel="nofollow"
                                                                                onClick="openModel(<?php echo $datasearch->id ?>)">Book a
                                                                                 trial Class </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--<div class="teacher-img">-->
                                                                <!--    <a href="<?php echo base_url('teacher-profile/').$datasearch->id ?>">-->
                                                                <!--                <img width="270" height="405"-->
                                                                <!--                    src="<?php echo base_url() ?>upload/<?php echo $datasearch->image ?>"-->
                                                                <!--                    class="w-100 wp-post-image teacher-img-img" alt="" loading="lazy"-->
                                                                <!--                    srcset="<?php echo base_url() ?>upload/<?php echo $datasearch->image ?> 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/img5.png 1120w"-->
                                                                <!--                    sizes="(max-width: 270px) 100vw, 270px" /> </a>-->
                                                                <!--    <div class="sc-div">-->

                                                                <!--        <img src="<?php echo base_url('assets/img/heart-regular-24.png') ?>" alt="">-->
                                                                <!--    </div>-->
                                                                <!--    <div class="sc-div2">-->
                                                                <!--        <p class="text-white"><img src="<?php echo base_url('assets/img/unlock.png') ?>" alt=""> Now Open</p>-->
                                                                <!--    </div>-->
                                                                <!--</div>-->
                                                                <!--<div class="teacher-info classes-col2 text-left">-->
                                                                <!--    <h3 class="teacher-info-border my-0 py-2 px-3">-->
                                                                <!--        <a-->
                                                                <!--            href="<?php echo base_url('teacher-profile/').$datasearch->id ?>">-->
                                                                <!--            <?php echo $datasearch->name ?><img-->
                                                                <!--                src="assets/img/check-circle-solid-24.png"-->
                                                                <!--                class="px-2" alt=""> </a>-->
                                                                <!--    </h3>-->

                                                                <!--    <p class="px-3 py-2 teacher-qulification"><span class="pr-2"><strong>Qualification</strong></span>Iam <?php echo $datasearch->name ?>, I have completed my-->
                                                                <!--                <?php echo $datasearch->highest_qualification ?> in..</p>-->
                                                                <!--    <h6 class="px-3 my-0 py-2">Class: <img-->
                                                                <!--                    src="assets/img/book-solid-24.png" alt=""-->
                                                                <!--                    class="px-2"><?php echo $datasearch->class?></h6>-->

                                                                <!--            <div class="d-flex teacher-info-board">-->
                                                                <!--        <div class="py-2 px-2 teacher-info-span d-flex align-items-center text-center">-->
                                                                <!--                    <p class="px-2"><span class="pr-2"><strong>Subjects</strong></span><img class="teacher-info-img"-->
                                                                <!--                            src="assets/img/building-regular-24.png"-->
                                                                <!--                            alt=""> <?php echo $datasearch->board ?> <!-- span class="px-2"><img src="assets/img/building-house-regular-24.png"-->
                                                                <!--                            alt="" class="teacher-info-img"> ICSE</span> -->
                                                                <!--                        </p> -->
                                                                <!--  <span class="px-2"><img src="assets/img/building-house-regular-24.png"
                                                <!--                    alt="" class="teacher-info-img"> ICSE</span>  -->
                                                                <!-- <span class="px-2"><img
                                                <!--                    src="assets/img/bank-solid-24.png" class="teacher-info-img" alt="">-->
                                                                <!--                IGCSE</span> -->
                                                                <!--  <span class="px-2"><img
                                                <!--                    src="assets/img/body-regular-24.png" class="teacher-info-img" alt="">-->
                                                                <!--                SSC</span> -->
                                                                <!-- <span class="px-2"><img
                                                <!--                    src="assets/img/school-solid-24.png"  class="teacher-info-img" alt="">-->
                                                                <!--                University</span> -->

                                                                <!--        </div>-->


                                                                <!--    </div>-->
                                                                <!--    <h6 class="px-3 teacher-info-border my-0 py-3">Fees : <span-->
                                                                <!--            class="teacher-price px-2"> <?php echo $datasearch->price ?>.00</span></h6>-->
                                                                <!--<div class="teacher-info-board justify-content-center text-center">-->
                                                                <!--<a class="btn-default w-100 send-msg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#" target="_blank" rel="nofollow">Send Message </a>-->
                                                                <!--     <a class="btn-default w-100 send-msg" id="btn" target="_blank" rel="nofollow" onClick="openModel(<?php echo $datasearch->id ?>)">Book a trial Class </a>-->


                                                                <!--</div>-->
                                                                <!--</div>-->
                                                            </div>
                                                            <!--teacher end-->

                                                        </div>

                                                        <?php } } }else{ ?>

                                                        <p style="font-weight:bold; position: absolute; bottom: 60px;">
                                                            No
                                                            Result Found</p>

                                                        <?php } ?>
                                                        <div id="myModal" class="modal fade" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            New
                                                                            message</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>

                                                                    <form class="text-left" method="post"
                                                                        action="<?php echo base_url('InquireController') ?>">
                                                                        <div class="modal-body">

                                                                            <div class="form-group">
                                                                                <input type="hidden"
                                                                                    class="form-control" id="hiddenid"
                                                                                    name="hiddenid">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Name:</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="name" id="recipient-name"
                                                                                    required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Email:</label>
                                                                                <input type="email" class="form-control"
                                                                                    name="recipient_mail" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Phone No:</label>
                                                                                <input type="number"
                                                                                    class="form-control" name="phone"
                                                                                    id="recipientphone" required
                                                                                    onkeyup="myValidation()">
                                                                            </div>
                                                                            <span id="message"
                                                                                style="color:red;"></span>
                                                                            <div class="form-group">
                                                                                <label for="message-text"
                                                                                    class="col-form-label">Message:</label>
                                                                                <textarea class="form-control"
                                                                                    id="message-text" name="message"
                                                                                    required>Dear Sir/Ma'am, I want to take trial class, please let me know the details for your trial classes.</textarea>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Send
                                                                                message</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <!--    <div class="col-lg-3 col-md-6 col-sm-12">-->
                                                        <!--   <div class="teacher">-->
                                                        <!--      <div class="teacher-img">-->
                                                        <!--         <a href="#">-->
                                                        <!--            <img width="270" height="405" src="https://shubhvaniitsolutions.in/techers/upload/techert21.png" class="w-100 wp-post-image" alt="" data-lazy-srcset="https://shubhvaniitsolutions.in/techers/upload/techert21.png " data-lazy-sizes="(max-width: 270px) 100vw, 270px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/img5-270x405.png" />-->
                                                        <!--            <noscript><img width="270" height="405" src="https://shelly.merku.love/wp-content/uploads/2020/11/img5-270x405.png" class="w-100 wp-post-image" alt="" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/img5-270x405.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-200x300.png 200w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-683x1024.png 683w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-768x1152.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/img5-1024x1536.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/img5.png 1120w" sizes="(max-width: 270px) 100vw, 270px" /></noscript>-->
                                                        <!--         </a>-->

                                                        <!--      </div>-->
                                                        <!--      <div class="teacher-info">-->
                                                        <!--         <h3>-->
                                                        <!--            <a href="#">-->
                                                        <!--            Polina Kerston                                        </a>-->
                                                        <!--         </h3>-->
                                                        <!--         <a href="#" class="teacher-info--category">English Teacher</a>-->
                                                        <!--      </div>-->
                                                        <!--   </div>-->
                                                        <!--teacher end-->
                                                        <!--</div>-->
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
function openModel(st) {

    var hdnid = $("#hiddenid").val(st);
    $("#myModal").modal('show');
}

function myValidation() {
    var mobile = $('#recipientphone').val();
    var countm = mobile.length;
    if (countm > 10) {

        $('#recipientphone').val('');
        $('#message').html('Enter Proper Number');
        $("#message").show().delay(2000).fadeOut();
    }

}
</script>
<?php
   $this->load->view('includes/footer');
   
   ?>