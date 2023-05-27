    <?php 
   
    $this->load->view('includes/header');
    ?>
    <style>
.banner {
    background-image: url(<?php echo base_url('upload/banner/').$banner[0]['banner'] ?>);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    object-fit: cover;
    height: 510px;
}

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

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0;
}

p.teacher-qulification {
    text-overflow: ellipsis;

    display: block;
    overflow: hidden;
    width: 25em;
}

.blog-info.px-3.py-3 {
    min-height: 295px;
}
    </style>


    <div data-elementor-type="wp-page" data-elementor-id="121" class="elementor elementor-121">

        <section class=" banner d-flex align-items-center">
            <div class="container">
                <div class="w-100">
                    <div class="elementor-widget-container banner-cont">

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Regular Exam</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Competitive Exam</a>
                            </li>

                        </ul><!-- Tab panes -->
                        <div class="tab-content">

                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <form method="post" action="<?php echo base_url('MainController/filterData') ?>">
                                    <div
                                        class="elementor-divider top-search row banner-srch py-2 justify-content-around mx-0">

                                        <div
                                            class="field col-lg-2 d-flex align-items-center my-2 px-0 justify-content-center">
                                            <div class="slc-wp w-100">
                                                 <div class="dropdown bootstrap-select dropup">
                                                    <select class="border-0 rounded-0 tabindex= shadow-none" name="clasees" id="clasees">
                                                        <option value="">Classes</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="field loc col-lg-2 d-flex align-items-center my-2 px-0 justify-content-center">
                                            <div class="slc-wp w-100">
                                                <div class="dropdown bootstrap-select dropup">
                                                    <select class="border-0 rounded-0 tabindex= shadow-none"
                                                        name="courses" id="courses">
                                                        <option value="">Subject</option>
                                                        <?php 
                                                
                                                    // foreach($subject as $subjects ){
                                                        // $subj    = explode(",",$subjects['subject']);
                                                        // foreach($subj as $key =>$allsubject){
                                                        
                                                    
                                                ?>
                                                        <!--<option value="<?php echo $allsubject ?>"><?php echo $allsubject ?></option>-->
                                                        <?php
                                            //   } }
                                               ?>

                                                        <option value="Maths">Maths</option>
                                                        <option value="Hindi">Hindi</option>
                                                        <option value="English">English</option>
                                                        <option value="Science">Science</option>
                                                        <option value="Social Science">Social Science</option>
                                                        <option value="Accountancy">Accountancy</option>
                                                        <option value="Chemistry">Chemistry</option>
                                                        <option value="Statistics">Statistics</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Geography">Geography</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value="Sociology">Sociology</option>
                                                        <option value="Political Science">Political Science</option>
                                                        <option value="History">History</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Computer Science">Computer Science</option>
                                                        <option value="Informatics Practices">Informatics Practices
                                                        </option>
                                                        <option value="GATE / NET/ IIT-JAM">GATE / NET/ IIT-JAM</option>
                                                        <option value="JEE and NEET">JEE and NEET</option>
                                                        <option value="SSC/BANK/ RAILWAYS/GOVT. EXAM">SSC/BANK/
                                                            RAILWAYS/GOVT. EXAM</option>
                                                        <option value="DEFENCEEXAM">DEFENCE</option>
                                                        <option value="UPSC/PCS">UPSC/PCS</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="field slc col-lg-2 d-flex align-items-center my-2 px-0">
                                            <div class="slc-wp w-100">
                                                <div class="dropdown bootstrap-select dropup"><select
                                                        class="border-0 rounded-0 tabindex= shadow-none"
                                                        name="experience" id="experience">
                                                        <option value="">Experience</option>
                                                        <option value="0-5 years">0-5 years</option>
                                                        <option value="5-10 years">5-10 years</option>
                                                        <option value="10-15 years">10-15 years</option>
                                                        <option value="15-20 years">15-20 years</option>
                                                        <option value="More than 20 years">More than 20 years</option>
                                                        <?php 
                                                
                                                    // foreach($experience as $exp ){
                                                    
                                                ?>
                                                        <!--<option value="<?php echo $exp['total_techer_exp'] ?>"><?php echo $exp['total_techer_exp'] ?></option>-->
                                                        <?php
                                            //   }
                                               ?>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="field col-lg-2 d-flex align-items-center my-2 px-0 justify-content-center">
                                            <div class="slc-wp w-100">
                                                <div class="dropdown bootstrap-select dropup"><select
                                                        class="border-0 rounded-0 tabindex= shadow-none" name="location"
                                                        id="location">
                                                        <option value="">Location</option>

                                                        <?php  foreach($location as $locations ){ ?>

                                                        <option value="<?php echo $locations['distrcit'] ?>">
                                                            <?php echo $locations['distrcit'] ?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 px-0 my-2 d-flex align-items-center justify-content-center">
                                            <button class="thm-btn d-flex align-items-center rounded-0 h-100 "
                                                type="submit" id="filter"><i
                                                    class="fas fa-search pr-2"></i>Search</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane " id="tabs-2" role="tabpanel">
                                <form method="post" action="<?php echo base_url('MainController/filterData') ?>">
                                    <div
                                        class="elementor-divider top-search row banner-srch py-2 justify-content-between mx-0">

                                        <div
                                            class="field col-lg-3 -flex align-items-center my-2 px-0 justify-content-center">
                                            <div class="slc-wp w-100">
                                                <div class="dropdown bootstrap-select dropup"><select
                                                        class="border-0 rounded-0 tabindex= shadow-none" name="courses"
                                                        id="courses">
                                                        <option value="">Classes</option>

                                                        <option value="GATE / NET/ IIT-JAM">GATE / NET/ IIT-JAM</option>
                                                        <option value="JEE and NEET">JEE and NEET</option>
                                                        <option value="SSC/BANK/ RAILWAYS/GOVT. EXAM">SSC/BANK/
                                                            RAILWAYS/GOVT. EXAM</option>
                                                        <option value="DEFENCE">DEFENCE</option>
                                                        <option value="UPSC/PCS">UPSC/PCS</option>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="field slc col-lg-3 d-flex align-items-center my-2 px-0">
                                            <div class="slc-wp w-100">
                                                <div class="dropdown bootstrap-select dropup"><select
                                                        class="border-0 rounded-0 tabindex= shadow-none"
                                                        name="experience" id="experience">
                                                        <option value="">Experience</option>
                                                        <option value="0-5 years">0-5 years</option>
                                                        <option value="5-10 years">5-10 years</option>
                                                        <option value="10-15 years">10-15 years</option>
                                                        <option value="15-20 years">15-20 years</option>
                                                        <option value="More than 20 years">More than 20 years</option>
                                                        <?php 
                                                
                                                    // foreach($experience as $exp ){
                                                    
                                                ?>
                                                        <!--<option value="<?php echo $exp['total_techer_exp'] ?>"><?php echo $exp['total_techer_exp'] ?></option>-->
                                                        <?php
                                            //   }
                                               ?>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="field col-lg-3 d-flex align-items-center my-2 px-0 justify-content-center">
                                            <div class="slc-wp w-100">
                                                <div class="dropdown bootstrap-select dropup"><select
                                                        class="border-0 rounded-0 tabindex= shadow-none" select=""
                                                        name="location" id="location">
                                                        <option value="">Location</option>

                                                        <?php  foreach($location as $locations ){ ?>

                                                        <option value="<?php echo $locations['distrcit'] ?>">
                                                            <?php echo $locations['distrcit'] ?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="col-lg-3 px-0 my-2 d-flex align-items-center justify-content-center">
                                            <button class="thm-btn d-flex align-items-center rounded-0 h-100 "
                                                type="submit" id="filter"><i
                                                    class="fas fa-search pr-2"></i>Search</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>



        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-3f523fb site-hero elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="3f523fb" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;waves&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
            <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
	c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
	c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
                </svg>
            </div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0b6fc29"
                    data-id="0b6fc29" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6f5c95d elementor-widget elementor-widget-shelly-heading-split"
                            data-id="6f5c95d" data-element_type="widget"
                            data-widget_type="shelly-heading-split.default">
                            <div class="elementor-widget-container">
                                <div class="site-heading">
                                    <h1 class="shelly-heading">
                                        <span><?php echo $aboutportal[0]['title'] ?></span>
                                    </h1>

                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cf897a3 elementor-widget elementor-widget-text-editor"
                            data-id="cf897a3" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><?php echo $aboutportal[0]['description'] ?></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-60fc2c5 elementor-widget elementor-widget-shelly-search-box"
                            data-id="60fc2c5" data-element_type="widget" data-widget_type="shelly-search-box.default">
                            <div class="elementor-widget-container">
                                <div class="site-search-form">
                                <a  href="<?php echo base_url('/aboutus') ?>">
                                     <spane class="btn-default px-4" target="_blank" rel="nofollow">Read
                                        More </spane> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3d12621 elementor-hidden-phone"
                    data-id="3d12621" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2b650d5 fadeInUp elementor-widget elementor-widget-shelly-hero-image"
                            data-id="2b650d5" data-element_type="widget" data-widget_type="shelly-hero-image.default">
                            <div class="elementor-widget-container">
                           
                                <div class="">
                                <figure class="fadeInUp">
                                        <img src="<?php echo base_url('upload/blog/'). $aboutportal[0]['images'] ?>" alt="">
                                    </figure>
                                    
                                    <!-- <div class="color-accent fadeInUp">
                                        <span class="color-accent-motion"
                                            style="transform-style: preserve-3d; transform-origin: center center 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"></span>
                                    </div>
                                    <figure class="fadeInUp">
                                        <img src="assets/images/about2.png" alt="">
                                    </figure>
                                    <div class="color-accent fadeInUp">
                                        <span class="color-accent-motion"
                                            style="transform-style: preserve-3d; transform-origin: center center 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"></span>
                                    </div>
                                    <figure class="fadeInUp">
                                        <img src="assets/images/about3.png" alt="">
                                    </figure>
                                    <div class="color-accent fadeInUp">
                                        <span class="color-accent-motion"
                                            style="transform-style: preserve-3d; transform-origin: center center 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"></span>
                                    </div>
                                    <figure class="fadeInUp">
                                        <img src="assets/images/about4.png" alt="">
                                    </figure>
                                    <div class="color-accent fadeInUp">
                                        <span class="color-accent-motion"
                                            style="transform-style: preserve-3d; transform-origin: center center 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"></span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-f7d6667 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="f7d6667" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c789b0f"
                    data-id="c789b0f" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ede449b elementor-widget elementor-widget-shelly-heading-split"
                            data-id="ede449b" data-element_type="widget"
                            data-widget_type="shelly-heading-split.default">
                            <div class="elementor-widget-container">
                                <div class="site-heading">
                                    <h2 class="shelly-heading">
                                        Welcome to <span>EduKxn.com</span> </h2>

                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d1cf9b9 elementor-widget elementor-widget-text-editor"
                            data-id="d1cf9b9" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Explore the coachings on your fingertips.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-f2a4c81 site-features elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="f2a4c81" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">

                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-21b5f2d"
                    data-id="21b5f2d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-dec3f8e elementor-widget elementor-widget-shelly-feature-image-box animated fadeInUp"
                            data-id="dec3f8e" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                            data-widget_type="shelly-feature-image-box.default">
                            <div class="elementor-widget-container px-2">
                                <div class="site d-flex justify-content-between align-items-center px-3 mb-3">
                                    <div>
                                        <h2>Teacher’s Search</h2>
                                    </div>
                                    <div><a class="btn-default" href="#" target="_blank" rel="nofollow">View All </a>
                                    </div>
                                </div>
                                <div class="site-feature">
                                    <div class="row">
                                        <div class="col-lg-2 col-6 my-3" onclick="mathFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>"
                                                id="mathses">

                                                <img src="<?php echo base_url() ?>assets/images/school-solid-48.png"
                                                    alt="" style="max-width: 150px;">
                                                <!--<i class="fa fa-book" aria-hidden="true"></i>-->
                                                <h6 class="mb-0" id="math">Maths</h6>
                                                <input type="hidden" name="courses" id="mathes" value="maths" />

                                            </form>
                                        </div>
                                        <div class="col-lg-2 col-6 my-3" onclick="chemiFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>"
                                                id="chemis">

                                                <img src="<?php echo base_url()?>assets/images/university.png"
                                                    style="max-width: 150px;" alt="">
                                                <h6 class="mb-0">Chemistry</h6>
                                                <input type="hidden" name="courses" id="mathes" value="Chemistry" />

                                            </form>
                                        </div>
                                        <div class="col-lg-2 col-6 my-3" onclick="physFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>"
                                                id="physcs">

                                                <img src="<?php echo base_url()?>assets/images/book.png" alt=""
                                                    style="max-width: 150px;">
                                                <h6 class="mb-0">Physics</h6>
                                                <input type="hidden" name="courses" value="Physics" />

                                            </form>
                                        </div>
                                        <div class="col-lg-2 col-6 my-3" onclick="biolgFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>" id="biolg">

                                                <img src="<?php echo base_url()?>assets/images/setting.png" alt=""
                                                    style="max-width: 150px;">
                                                <h6 class="mb-0">Biology</h6>
                                                <input type="hidden" name="courses" value="Biology" />

                                            </form>
                                        </div>
                                        <div class="col-lg-2 col-6 my-3" onclick="acctFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>" id="acct">

                                                <img src="<?php echo base_url()?>assets/images/school-solid-48.png"
                                                    alt="" style="max-width: 150px;">
                                                <h6 class="mb-0">Accounts</h6>
                                                <input type="hidden" name="courses" value="Accounts" />

                                            </form>
                                        </div>
                                        <div class="col-lg-2 col-6 my-3" onclick="buisnessFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>"
                                                id="buisness">

                                                <img src="<?php echo base_url()?>assets/images/tv.png" alt=""
                                                    style="max-width: 150px;">
                                                <h6 class="mb-0">Buisness</h6>
                                                <input type="hidden" name="courses" value="Buisness" />

                                            </form>
                                        </div>
                                        <div class="col-lg-2 col-6 my-3" onclick="EconomisFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>"
                                                id="Economis">

                                                <img src="<?php echo base_url()?>assets/images/iit.png" alt=""
                                                    style="max-width: 150px;">
                                                <h6 class="mb-0">Economis</h6>
                                                <input type="hidden" name="courses" value="Economis" />
                                            </form>
                                        </div>
                                        <div class="col-lg-2 col-6 my-3" onclick = "EnglishFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>"
                                                id="English">

                                                <img src="<?php echo base_url()?>assets/images/university.png" alt=""
                                                    style="max-width: 150px;">
                                                <h6 class="mb-0">Informatics Practices <br> and English</h6>
                                                <input type="hidden" name="courses" value="English" />
                                            </form>
                                        </div>

                                        <div class="col-lg-2 col-6 my-3" onclick="SociologyFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>"
                                                id="Sociology">

                                                <img src="<?php echo base_url()?>assets/images/book.png" alt=""
                                                    style="max-width: 150px;">
                                                <h6 class="mb-0">Sociology</h6>
                                                <input type="hidden" name="courses" value="Sociology" />

                                            </form>
                                        </div>
                                        <div class="col-lg-2 col-6 my-3" onclick="GeographyFunction()">
                                            <form method="post"
                                                action="<?php echo base_url('MainController/filterData') ?>"
                                                id="Geography">

                                                <img src="<?php echo base_url()?>assets/images/tv.png" alt=""
                                                    style="max-width: 150px;">
                                                <h6 class="mb-0">Geography &amp;<br> Psychology</h6>
                                                <input type="hidden" name="courses" value="Geography" />
                                            </form>
                                        </div>


                                        <!--                                        <form method="post" action="<?php echo base_url('MainController/filterData') ?>" id="English">-->
                                        <!--                                        <div class="col-lg-2 mx-2 my-3" onclick="EnglishFunction()">-->
                                        <!--                                           <img src="<?php echo base_url()?>assets/images/university.png" alt="" style="max-width: 150px;">-->
                                        <!--                                            <h6 class="mb-0" >Informatics Practices and English</h6>-->
                                        <!--                                            <input type="hidden" name="courses"  value="English"/>-->
                                        <!--                                        </div>-->
                                        <!--                                        </form>-->
                                        <!--                                        <form method="post" action="<?php echo base_url('MainController/filterData') ?>" id="Sociology"  >-->
                                        <!--                                        <div class="col-lg-2 mx-2 my-3" style="position: absolute;-->

                                        <!--left: 91px;" onclick="SociologyFunction()">-->
                                        <!--                                           <img src="<?php echo base_url()?>assets/images/book.png" alt="" style="max-width: 150px; ">-->
                                        <!--                                            <h6 class="mb-0" >Sociology</h6>-->
                                        <!--                                            <input type="hidden" name="courses"  value="Sociology"/>-->
                                        <!--                                        </div>-->
                                        <!--                                        </form>-->
                                        <!--                                        <form method="post" action="<?php echo base_url('MainController/filterData') ?>" id="Geography">-->
                                        <!--                                        <div class="col-lg-2 mx-2 my-3" onclick="GeographyFunction()" style="    position: absolute;-->
                                        <!--left: 273px;" >-->
                                        <!--                                           <img src="<?php echo base_url()?>assets/images/tv.png" alt="" style="max-width: 150px;">-->
                                        <!--                                            <h6 class="mb-0" >Geography &amp; Psychology</h6>-->
                                        <!--                                            <input type="hidden" name="courses"  value="Geography"/>-->
                                        <!--                                        </div>-->
                                        <!--                                        </form>-->
                                        <!--                                        <form method="post" action="<?php echo base_url('MainController/filterData') ?>" id="Philosophy">-->
                                        <!--                                        <div class="col-lg-2 mx-2 my-3" onclick="PhilosophyFunction()" style="position: absolute;-->
                                        <!--left: 434px;">-->
                                        <!--                                           <img src="<?php echo base_url()?>assets/images/tv.png" alt="" style="max-width: 150px;">-->
                                        <!--                                            <h6 class="mb-0" >Philosophy</h6>-->
                                        <!--                                            <input type="hidden" name="courses"  value="Philosophy"/>-->
                                        <!--                                        </div>-->
                                        <!--                                        </form>-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-27a88e7 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="27a88e7" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-db54488"
                    data-id="db54488" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-aab2005 elementor-widget elementor-widget-shelly-heading-split"
                            data-id="aab2005" data-element_type="widget"
                            data-widget_type="shelly-heading-split.default">
                            <div class="elementor-widget-container">
                                <div class="site-heading">
                                    <h2 class="shelly-heading">
                                        Upcoming <span>Event</span> </h2>

                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a46a85f elementor-widget elementor-widget-text-editor"
                            data-id="a46a85f" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><?php echo $events[0]->description ?></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-18b7cd1 fadeInUp elementor-hidden-phone elementor-hidden-tablet elementor-widget elementor-widget-shelly-double-gallery"
                            data-id="18b7cd1" data-element_type="widget"
                            data-widget_type="shelly-double-gallery.default">
                            <div class="elementor-widget-container">
                                <div class="double-gallery">
                                    <figure class="fadeInUp">
                                        <img src="<?php echo base_url('upload/blog/'). $events[0]->images  ?>" alt="">
                                    </figure>
                                    <div class="color-accent fadeInUp">
                                        <span class="color-accent-motion"></span>
                                    </div>
                                    <figure class="fadeInUp">
                                        <img src="<?php echo base_url('upload/blog/'). $events[1]->images  ?>" alt="">
                                    </figure>
                                    <div class="color-accent fadeInUp">
                                        <span class="color-accent-motion"></span>
                                    </div>
                                    <figure class="fadeInUp">
                                        <img src="<?php echo base_url('upload/blog/'). $events[2]->images  ?>" alt="">
                                    </figure>
                                    <div class="color-accent fadeInUp">
                                        <span class="color-accent-motion"></span>
                                    </div>
                                    <div class="color-accent fadeInUp">
                                        <span class="color-accent-motion"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ae8350a"
                    data-id="ae8350a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4543d71 elementor-widget elementor-widget-shelly-courses-feed"
                            data-id="4543d71" data-element_type="widget" data-widget_type="shelly-courses-feed.default">
                            <div class="elementor-widget-container">
                                <section class="events-section events-section--shift">
                                    <div class="events-list">
                                        <?php
                                        foreach($events as $key => $value){
                                            ?>
                                        <div class="events-card ">
                                            <div>
                                                <div class="events-info">
                                                    <div class="events-info--date">
                                                        <span class="events-info--date--days"
                                                            title="2022-12-30"><?php echo $value->dates ?></span>
                                                        <span class="events-info--date--time"
                                                            title="2022-12-30"><?php echo $value->time ?></span>
                                                    </div>
                                                    <span class="events-info--price"><?php echo $value->price ?></span>
                                                </div>
                                                
                                                <div class="events-title">
                                                <h3>
                                                        <span href="" title="Explore Watercolor Illustration"><?php echo $value->title ?></span>
                                                    </h3>
                                                    <h4>
                                                        <a href="<?php echo $events[0]->links ?>" title="Explore Watercolor Illustration"><?php echo $value->location ?></a>
                                                    </h4>
                                                </div>
                                                <div class="events-footer">
                                                    <div class="events-footer--place">
                                                   
                                                        <span class="events-footer--place--location"
                                                            title="25 Grafton St, Worcester"><?php echo $value->location ?></span>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>

                                        
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-d54dbd6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="d54dbd6" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4797c2d"
                    data-id="4797c2d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a9dc067 elementor-widget elementor-widget-shelly-classes-feed"
                            data-id="a9dc067" data-element_type="widget" data-widget_type="shelly-classes-feed.default">
                            <div class="elementor-widget-container">
                            <div class="site-heading text-center">
                              <h2 class="shelly-heading"> BLOGS  </h2>
                                        
                                </div>

                                <div class="row classes-carousel" style=" margin-top: 60px;">
                                    <?php 
                                foreach($blogs as $key => $value){
                                    $newDate = date('M, d', strtotime($value->create_at));
                                    ?>
                     <div class="col-lg-5 mb-5" style="max-width: 65.66667%;">
                <article
                    class="blog-post video-post post-34 post type-post status-publish format-video has-post-thumbnail hentry category-lessons category-shelly tag-class tag-teachers post_format-post-format-video">
                    <div class="blog-thumbnail">
                        <a href="<?php echo base_url('blog/details/'.$value->id); ?>">
                            <img width="400" height="400" alt=""
                               
                                src="<?php echo base_url('upload/blog/').$value->images?>"
                                data-ll-status="loaded" style="height: 211px;" /></a>
                    </div>
                    <div class="blog-info py-2 px-3">
                        <h6 class="blog-title"><a href="<?php echo base_url('blog/details/'.$value->id); ?>"><?php echo $value->title  ?>
                            </a></h6>
                        <div class="blog-meta">
                            
                            <ul>
                                <li class="blog-meta--date">
                                    <a href="<?php echo base_url('blog/details/'.$value->id); ?>"><?php echo $newDate ?></a>
                                </li>
                                <!-- <li class="blog-meta--tags">
                                    <a href="<?php echo base_url('blog/details/'.$value->id); ?>" rel="tag">Class</a>, <a href="#" rel="tag">Teachers</a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="post-excerpt">
                            <!-- wp:paragraph -->
                            <p><?php echo $value->heading ?>
                            </p>
                        </div>
                    </div>
                    <div class="blog-footer mb-0 pt-3 pb-2">
                        <a href="<?php echo base_url('blog/details/'.$value->id); ?>" class="blog-footer--read-more">Read more <i class="fa fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </article>
            </div>

                                    <!--<div class="col-lg-3 col-sm-6 col-md-6">-->
                                    <!--    <div class="classes-col">-->
                                    <!--        <div class="blog-info px-3 py-3">-->
                                    <!--            <div class="d-flex justify-content-around">-->
                                    <!--                <img class="w-25 rounded-circle h-25"-->
                                    <!--                    src="<?php echo base_url('upload/blog/').$blogs->images  ?>"-->
                                    <!--                    alt="">-->
                                    <!--                <h4 class="blog-title"><a-->
                                    <!--                        href="<?php echo base_url('blog/details/'.$blogs->id); ?>"><?php echo $blogs->title   ?></a><span-->
                                    <!--                        class="d-block h6 py-2">IPS Head of Department</span></h4>-->

                                    <!--            </div>-->
                                    <!--            <div class="blog-meta justify-content-center">-->
                                    <!--                <ul>-->
                                    <!--                    <li class="blog-meta--date">-->
                                    <!--                        <a-->
                                    <!--                            href="<?php echo base_url('blog/details/'.$blogs->id); ?>"><?php echo $newDate  ?></a>-->
                                    <!--                    </li>-->

                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--            <div class="post-excerpt">-->
                                                    <!-- wp:paragraph -->
                                    <!--                <p><?php echo $blogs->heading   ?>-->
                                    <!--                </p>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                        <!--classes-col end-->
                                    <!--</div>-->

                                    <?php
                                }
                                ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-ab38780 elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="ab38780" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-29e96ee"
                    data-id="29e96ee" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-05ef5d0 elementor-widget elementor-widget-shelly-heading-split"
                            data-id="05ef5d0" data-element_type="widget"
                            data-widget_type="shelly-heading-split.default">
                            <div class="elementor-widget-container">
                                <div class="site-heading">
                                    <h2 class="shelly-heading">
                                        Our <span>Facilities </span> </h2>

                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-376a683 elementor-widget elementor-widget-text-editor"
                            data-id="376a683" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Such a transparent initiative for all the teacher of Lucknow that provides all the
                                    information related to teachers and coaching center’s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="elementor-section elementor-top-section elementor-element elementor-element-e428f05 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="e428f05" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9f92390"
                    data-id="9f92390" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-bacdd19 zoomIn elementor-hidden-phone elementor-widget elementor-widget-shelly-masonry-gallery"
                            data-id="bacdd19" data-element_type="widget"
                            data-widget_type="shelly-masonry-gallery.default">
                            <div class="elementor-widget-container">
                            <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <?php foreach($photo as $img) ?>
                                           <img src="<?php echo base_url('upload/facility/').$img['image']; ?>" alt="">
                                        </a>
                                    </div>
                                <!-- <div class="masonry-gallery">
                                    

                                    <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <img src="assets/images/gallery6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <img src="assets/images/gallery2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <img src="assets/images/gallery3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <img src="assets/images/gallery4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <img src="assets/images/gallery5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <img src="assets/images/gallery7.png" alt="">
                                        </a>
                                    </div>
                                    <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <img src="assets/images/gallery8.jpg" alt="">
                                        </a>
                                    </div>
                                  
                                    <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <img src="assets/images/gallery10.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="masonry-gallery--image zoomIn">
                                        <a data-elementor-open-lightbox="yes"
                                            data-elementor-lightbox-slideshow="217ee89" data-elementor-lightbox-title=""
                                            href="#">
                                            <img src="assets/images/gallery1.jpg" alt="">
                                        </a>
                                    </div>
                                    <span class="masonry-gallery--color-accent color-accent-motion zoomIn"></span>
                                    <span class="masonry-gallery--color-accent color-accent-motion zoomIn"></span>
                                    <span class="masonry-gallery--color-accent color-accent-motion zoomIn"></span>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-e9bea78 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="e9bea78" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-38ca7f1"
                    data-id="38ca7f1" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-af89d0f elementor-widget elementor-widget-shelly-heading-split"
                            data-id="af89d0f" data-element_type="widget"
                            data-widget_type="shelly-heading-split.default">
                            <div class="elementor-widget-container">
                                <div class="site-heading">
                                    <h2 class="shelly-heading">
                                        Our Listed <span>Teachers / Coachings</span> </h2>

                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-aa78767 elementor-widget elementor-widget-text-editor"
                            data-id="aa78767" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>The portal is for teachers across the Lucknow to hone their professional capabilities
                                    and get access to quality teaching aids.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-d54dbd6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="d54dbd6" data-element_type="section">
            <!--<h2 class="text-center mt-5 pt-4">REVIEWS</h2>-->
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4797c2d"
                    data-id="4797c2d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a9dc067 elementor-widget elementor-widget-shelly-classes-feed"
                            data-id="a9dc067" data-element_type="widget" data-widget_type="shelly-classes-feed.default">
                            <div class="elementor-widget-container">


                                <div class="row classes-carousel">



                                    <?php  
                                        //   print_r();
                                        foreach($teachers as $key=> $teacher ){  $techid =   $teacher['id'];?> 
                                        

                                  <?php if($teacher['status']=="1"){ ?>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="teacher">
                                            <div class="teacher-img">
                                                <a href="<?php echo base_url('teacher-profile/').$teacher['id'] ?>">
                                                    <img width="270" height="405"
                                                        src="<?php echo base_url() ?>upload/<?php echo $teacher['image'] ?>"
                                                        class="w-100 wp-post-image teacher-img-img" alt=""
                                                        loading="lazy"
                                                        srcset="<?php echo base_url() ?>upload/<?php echo $teacher['image'] ?> 270w"
                                                        sizes="(max-width: 270px) 100vw, 270px" /> </a>
                                                <div class="sc-div">

                                                    <img src="assets/img/heart-regular-24.png" alt="">
                                                </div>
                                                <?php 
                                                                
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
                                                <div class="sc-div2">
                                                    <?php echo $offerdata ?>
                                                </div>
                                                <?php } ?>


                                            </div>
                                            
                                            
                                            <div class="teacher-info classes-col2 text-left">
                                        
                                                <h3 class="teacher-info-border my-0 py-2 px-3">
                                                    <a href="<?php echo base_url('teacher-profile/').$teacher['id'] ?>">
                                            
                                                                <span><?php echo $teacher['name'] ?></span> 
                                                               <?php if($teacher['paidstatus']=="1"){ ?>
                                                               <img src="<?php echo base_url() ?>assets/img/check-circle-solid-24.png" class="px-2" alt="">
                                                               <?php }else { if($teacher['paidstatus']=="0") {  ?>
                                                                 <img src="" class="px-2" alt="">
                                                               <?php } } ?>
                                                            </a>
                                                </h3>
                                                <p class="px-3 py-1 teacher-qulification">
                                                    <span class="pr-2"><strong>Qualification</strong></span>
                                                    <?php echo $teacher['highest_qualification'] ?></p>
                                                <h6 class="px-3 my-0 py-0">Class: <img
                                                        src="assets/img/book-solid-24.png" alt=""
                                                        class="px-2"><?php echo $teacher['class']?></h6>
                                                        
                                                <div class="d-flex teacher-info-board">
                                                    <div
                                                        class="py-2 px-2 teacher-info-span d-flex align-items-center text-center">
                                                        <p class="px-2"><span
                                                                class="pr-2"><strong>Board</strong></span><img
                                                                class="teacher-info-img"
                                                                src="assets/img/building-regular-24.png" alt="">
                                                            <?php echo $teacher['board'] ?>
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
                                                <h6 class="px-3 teacher-info-border my-0 pb-2">Fees : <span
                                                        class="teacher-price px-2">
                                                        <?php echo $teacher['price'] ?>.00</span></h6>
                                                <div class="teacher-info-board justify-content-center text-center">
                                                    <a class="btn-default w-100 send-msg hidden-data-get" id="btn" target="_blank"
                                                        rel="nofollow"
                                                        data-id="<?php echo $teacher['id'] ?>"
                                                        data-techid="<?php echo $teacher['name'] ?>"
                                                        data-email="<?php echo $teacher['email'] ?>">Book a trial Class</a>
                                                </div>
                                       
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <!--teacher end-->
                                    </div>

                                   
                                    <?php } ?>

                                </div>
                                <div class="classes-carousel--button"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal" class="modal fade" tabindex="-1">
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
                                    <input type="hidden" class="form-control" id="hiddenid" name="hiddenid">
                                    <input type="hidden" class="form-control" id="hiddenemail" name="hiddenemail"> 
                                    <input type="text" class="form-control" id="techname" name="techname">
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
                                        required> Dear Sir/Mam, You have received one request for a trail class.  Please check your message on edukxn.com .
                                        </textarea>
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
        </section>





    </div>
    <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon">
        <div data-elementor-type="section" data-elementor-id="658" class="elementor elementor-658">
            <!--   <section class="career">-->
            <!--    <div class="elementor-section elementor-top-section elementor-element elementor-element-2c16447 cta-section elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default mb-0" data-id="2c16447" data-element_type="section">-->
            <!--        <div class="elementor-container elementor-column-gap-default">-->
            <!--            <div class="container">-->
            <!--                <div class="row justify-content-around py-5 my-4 d-flex align-items-center text-center">-->
            <!--                    <div class="col-lg-2 col-7 my-2 py-2">-->
            <!--                        <h5 class="my-0 py-3">Class 6th to 12th</h5>-->
            <!--                        <h6>IIT/JEE</h6>-->
            <!--                    </div>-->
            <!--                    <div class="col-lg-2 col-7 my-2 py-2">-->
            <!--                        <h5 class="my-0 py-3">C.B.S.E</h5>-->
            <!--                        <h6>NEET</h6>-->
            <!--                    </div>-->
            <!--                    <div class="col-lg-2 col-7 my-2 py-2">-->
            <!--                        <h5 class="my-0 py-3">U.P. Board</h5>-->
            <!--                        <h6>Classroom/Board exam</h6>-->
            <!--                    </div>-->
            <!--                    <div class="col-lg-2 col-7 my-2 py-2">-->
            <!--                        <h5 class="my-0 py-3">I.C.S.E</h5>-->
            <!--                        <h6>IIT/JEE</h6>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->

            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d54dbd6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="d54dbd6" data-element_type="section">
                <h2 class="text-center mt-5 pt-4">Reviews</h2>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4797c2d"
                        data-id="4797c2d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a9dc067 elementor-widget elementor-widget-shelly-classes-feed"
                                data-id="a9dc067" data-element_type="widget"
                                data-widget_type="shelly-classes-feed.default">
                                <div class="elementor-widget-container">


                                    <div class="row classes-carousel">
                                        <?php foreach($review as $reviews){   ?>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="classes-col">
                                                <div class="blog-info px-3 py-3">
                                                    <div class="d-flex justify-content-around">
                                                        <img class="w-25 rounded-circle h-25"
                                                            src="<?php echo base_url('upload/reviews/').$reviews['image'] ?>"
                                                            alt="">
                                                        <h4 class="blog-title"><?php echo $reviews['title'] ?></h4>

                                                    </div>
                                                    <div class="post-excerpt">
                                                        <p><?php echo $reviews['desc'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!-- <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="classes-col">
                                                <div class="blog-info px-3 py-3">
                                                    <div class="d-flex justify-content-around">
                                                        <img class="w-25 rounded-circle h-25"
                                                            src="<?php echo base_url('assets/images/profile.png') ?>"
                                                            alt="">
                                                        <h4 class="blog-title">Computer for SSC </h4>

                                                    </div>
                                                    <div class="blog-meta justify-content-center">

                                                    </div>
                                                    <div class="post-excerpt">
                                                        <p>I use <a href="<?php echo base_url() ?>">eduKxn.com</a> to
                                                            allow students to directly book a trial class with me and
                                                            explore my coaching.

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="classes-col">
                                                <div class="blog-info px-3 py-3">
                                                    <div class="d-flex justify-content-around">
                                                        <img class="w-25 rounded-circle h-25"
                                                            src="<?php echo base_url('assets/images/profile.png') ?>"
                                                            alt="">
                                                        <h4 class="blog-title">IIT-JAM Solutions </h4>

                                                    </div>
                                                    <div class="blog-meta justify-content-center">

                                                    </div>
                                                    <div class="post-excerpt">
                                                        <p><a href="<?php echo base_url() ?>">eduKxn.com</a> has been a
                                                            game changer for coachings as well as for students. <a
                                                                href="<?php echo base_url() ?>">eduKxn.com</a> is
                                                            definitely going to help students in finding right coaching
                                                            in their local area or across boundaries and make informed
                                                            decisions.

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                    </div>
                                    <div class="classes-carousel--button"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--   <section class="bolg pb-5">
                <h2 class="text-center my-5">BLOGS</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <article class="blog-post video-post post-34 post type-post status-publish format-video has-post-thumbnail hentry category-lessons category-shelly tag-class tag-teachers post_format-post-format-video">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <img width="870" height="580" class="w-100 entered lazyloaded" alt="" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png 870w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-300x200.png 300w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-1024x683.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-768x512.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-270x180.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4.png 1440w" data-lazy-sizes="(max-width: 870px) 100vw, 870px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png" src="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png" data-ll-status="loaded" sizes="(max-width: 870px) 100vw, 870px" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png 870w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-300x200.png 300w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-1024x683.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-768x512.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-270x180.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4.png 1440w"><noscript><img
                                                width="870" height="580"
                                                src="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png"
                                                class="w-100" alt=""
                                                srcset="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png 870w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-300x200.png 300w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-1024x683.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-768x512.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-270x180.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4.png 1440w"
                                                sizes="(max-width: 870px) 100vw, 870px" /></noscript> </a>
                                </div>
                                <div class="blog-info py-2 px-3">
                                    <h6 class="blog-title"><a href="#">Organized Classroom Blog
                                            </a></h6>
                                    <div class="blog-meta">
                                        <div class="blog-meta--author">
                                            <figure class="blog-meta--author--img">
                                                <a href="#">
                                                    <img alt="" src="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=96&amp;d=mm&amp;r=g" data-lazy-srcset="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo entered lazyloaded" height="96" width="96" data-lazy-src="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=96&amp;d=mm&amp;r=g" data-ll-status="loaded" srcset="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=192&amp;d=mm&amp;r=g 2x"><noscript><img
                                                            alt=''
                                                            src='https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=96&#038;d=mm&#038;r=g'
                                                            srcset='https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=192&#038;d=mm&#038;r=g 2x'
                                                            class='avatar avatar-96 photo' height='96'
                                                            width='96' /></noscript> </a>
                                            </figure>
                                            <a class="blog-meta--author--link" href="#" title="merkulove">
                                                <span>merkulove</span>
                                            </a>
                                        </div>
                                        <ul>
                                            <li class="blog-meta--date">
                                                <a href="#">November 28, 2020</a>
                                            </li>
                                            <li class="blog-meta--tags">
                                                <a href="#" rel="tag">Class</a>, <a href="#" rel="tag">Teachers</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-excerpt">
                                        
                                        <p>Donec hendrerit mauris sed tellus consequat, vitae eleifend risus posuere.
                                            Fusce vulputate du
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-footer mb-0 pt-4 pb-3">
                                    <a href="#" class=" blg-btn">Read more </i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4">
                            <article class="blog-post video-post post-34 post type-post status-publish format-video has-post-thumbnail hentry category-lessons category-shelly tag-class tag-teachers post_format-post-format-video">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <img width="870" height="580" class="w-100 entered lazyloaded" alt="" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png 870w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-300x200.png 300w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-1024x683.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-768x512.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-270x180.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4.png 1440w" data-lazy-sizes="(max-width: 870px) 100vw, 870px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png" src="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png" data-ll-status="loaded" sizes="(max-width: 870px) 100vw, 870px" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png 870w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-300x200.png 300w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-1024x683.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-768x512.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-270x180.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4.png 1440w"><noscript><img
                                                width="870" height="580"
                                                src="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png"
                                                class="w-100" alt=""
                                                srcset="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png 870w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-300x200.png 300w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-1024x683.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-768x512.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-270x180.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4.png 1440w"
                                                sizes="(max-width: 870px) 100vw, 870px" /></noscript> </a>
                                </div>
                                <div class="blog-info py-2 px-3">
                                    <h6 class="blog-title"><a href="#">Organized Classroom Blog
                                            </a></h6>
                                    <div class="blog-meta">
                                        <div class="blog-meta--author">
                                            <figure class="blog-meta--author--img">
                                                <a href="#">
                                                    <img alt="" src="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=96&amp;d=mm&amp;r=g" data-lazy-srcset="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo entered lazyloaded" height="96" width="96" data-lazy-src="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=96&amp;d=mm&amp;r=g" data-ll-status="loaded" srcset="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=192&amp;d=mm&amp;r=g 2x"><noscript><img
                                                            alt=''
                                                            src='https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=96&#038;d=mm&#038;r=g'
                                                            srcset='https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=192&#038;d=mm&#038;r=g 2x'
                                                            class='avatar avatar-96 photo' height='96'
                                                            width='96' /></noscript> </a>
                                            </figure>
                                            <a class="blog-meta--author--link" href="#" title="merkulove">
                                                <span>merkulove</span>
                                            </a>
                                        </div>
                                        <ul>
                                            <li class="blog-meta--date">
                                                <a href="#">November 28, 2020</a>
                                            </li>
                                            <li class="blog-meta--tags">
                                                <a href="#" rel="tag">Class</a>, <a href="#" rel="tag">Teachers</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-excerpt">
                                        
                                        <p>Donec hendrerit mauris sed tellus consequat, vitae eleifend risus posuere.
                                            Fusce vulputate du
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-footer mb-0 pt-4 pb-3 ">
                                    <a href="#" class="blg-btn">Read more </i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4">
                            <article class="blog-post video-post post-34 post type-post status-publish format-video has-post-thumbnail hentry category-lessons category-shelly tag-class tag-teachers post_format-post-format-video">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <img width="870" height="580" class="w-100 entered lazyloaded" alt="" data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png 870w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-300x200.png 300w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-1024x683.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-768x512.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-270x180.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4.png 1440w" data-lazy-sizes="(max-width: 870px) 100vw, 870px" data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png" src="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png" data-ll-status="loaded" sizes="(max-width: 870px) 100vw, 870px" srcset="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png 870w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-300x200.png 300w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-1024x683.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-768x512.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-270x180.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4.png 1440w"><noscript><img
                                                width="870" height="580"
                                                src="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png"
                                                class="w-100" alt=""
                                                srcset="https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-870x580.png 870w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-300x200.png 300w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-1024x683.png 1024w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-768x512.png 768w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4-270x180.png 270w, https://shelly.merku.love/wp-content/uploads/2020/11/blog-large4.png 1440w"
                                                sizes="(max-width: 870px) 100vw, 870px" /></noscript> </a>
                                </div>
                                <div class="blog-info py-2 px-3">
                                    <h6 class="blog-title"><a href="#">Organized Classroom Blog
                                            </a></h6>
                                    <div class="blog-meta">
                                        <div class="blog-meta--author">
                                            <figure class="blog-meta--author--img">
                                                <a href="#">
                                                    <img alt="" src="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=96&amp;d=mm&amp;r=g" data-lazy-srcset="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo entered lazyloaded" height="96" width="96" data-lazy-src="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=96&amp;d=mm&amp;r=g" data-ll-status="loaded" srcset="https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=192&amp;d=mm&amp;r=g 2x"><noscript><img
                                                            alt=''
                                                            src='https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=96&#038;d=mm&#038;r=g'
                                                            srcset='https://secure.gravatar.com/avatar/e93e4ec871762e0480e9a2693d78d2b6?s=192&#038;d=mm&#038;r=g 2x'
                                                            class='avatar avatar-96 photo' height='96'
                                                            width='96' /></noscript> </a>
                                            </figure>
                                            <a class="blog-meta--author--link" href="#" title="merkulove">
                                                <span>merkulove</span>
                                            </a>
                                        </div>
                                        <ul>
                                            <li class="blog-meta--date">
                                                <a href="#">November 28, 2020</a>
                                            </li>
                                            <li class="blog-meta--tags">
                                                <a href="#" rel="tag">Class</a>, <a href="#" rel="tag">Teachers</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-excerpt">
                                        
                                        <p>Donec hendrerit mauris sed tellus consequat, vitae eleifend risus posuere.
                                            Fusce vulputate du
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-footer mb-0 pt-4 pb-3">
                                    <a href="#" class="blg-btn">Read more</i>
                                    </a>
                                </div>
                            </article>
                        </div>
                       
                    </div>
                </div>
            </section>-->

            <br>
            <br>
            <!-- wp:paragraph -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script type="text/javascript">

            // function openModel(st) {
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
                var countm = mobile.length;
                if (countm > 10) {

                    $('#recipientphone').val('');
                    $('#message').html('Enter Proper Number');
                    $("#message").show().delay(2000).fadeOut();
                }

            }
            </script>

            <script>
            function mathFunction() {
                $("#mathses").submit();
            }

            function chemiFunction() {
                $("#chemis").submit();
            }

            function physFunction() {
                $("#physcs").submit();
            }

            function biolgFunction() {
                $("#biolg").submit();
            }

            function acctFunction() {
                $("#acct").submit();
            }

            function buisnessFunction() {
                $("#buisness").submit();
            }

            function EconomisFunction() {
                $("#Economis").submit();
            }

            function EnglishFunction() {
                $("#English").submit();
            }

            function SociologyFunction() {
                $("#Sociology").submit();
            }

            function GeographyFunction() {
                $("#Geography").submit();
            }

            function PhilosophyFunction() {
                $("#Philosophy").submit();
            }
            </script>

            <?php 

       $this->load->view('includes/footer');
   ?>