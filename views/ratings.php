    <?php  $this->load->view('includes/header'); ?>
    <style>
img {
    vertical-align: middle;
    height: 116px !important;
}

a.top-right {
    position: absolute;
    top: -14px;
    left: 145px;
}

#accordion {

    font-family: "Times New Roman", Times, serif;
    font-size: 19px;
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
    </style>
    <section class="pager-section">
        <div class="pager-content">
            <ul class="breadcrumbs has-link-effect">
                <li><a href="<?php echo base_url() ?>" itemprop="url">Home</a></li>
                <li><span><a href="<?php echo base_url('Aboutus') ?>">Teachers</a></span></li>
            </ul>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shelly-shape">
            <path class="shelly-shape--fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
        c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
        c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
        </svg>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-f7d6667 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="f7d6667" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c789b0f"
                data-id="c789b0f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ede449b elementor-widget elementor-widget-shelly-heading-split"
                        data-id="ede449b" data-element_type="widget" data-widget_type="shelly-heading-split.default">

                    </div>
                    <div class="elementor-element elementor-element-d1cf9b9 elementor-widget elementor-widget-text-editor"
                        data-id="d1cf9b9" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <h3>Ratings and Review</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <div class="elementor-widget-container">
                            <div class="site d-flex justify-content-between align-items-center px-3 mb-3">

                            </div>
                            <div id="accordion" class="accordion">
                                <div class="card mb-0">
                                    <?php if(!empty($ratings)){ $i=0; foreach($ratings as $key=> $rats){ ?>
                                    <div class="card-header collapsed" data-toggle="collapse"
                                        href="#collapseOne<?php echo $i ?>">

                                        <a class="card-title">
                                            <?php echo $rats['name'] ?>
                                        </a>
                                    </div>
                                    <div id="collapseOne<?php echo $i ?>" class="card-body collapse"
                                        data-parent="#accordion" style="font-weight:bold;">
                                        <?php if($rats['rating']=='1'){ ?>
                                        <div class="star-rating">
                                            <input type="radio" value="5" />
                                            <label for="5-stars" class="star">&#9733;</label>
                                            <input type="radio" value="4" />
                                            <label for="4-stars" class="star">&#9733;</label>
                                            <input type="radio" value="3" />
                                            <label for="3-stars" class="star">&#9733;</label>
                                            <input type="radio" value="2" />
                                            <label for="2-stars" class="star">&#9733;</label>
                                            <input type="radio" checked />
                                            <label for="1-star" class="star">&#9733;</label>
                                        </div>
                                        <?php }else if($rats['rating']=='2'){ ?>

                                        <div class="star-rating">
                                            <input type="radio" value="5" />
                                            <label for="5-stars" class="star">&#9733;</label>
                                            <input type="radio" value="4" />
                                            <label for="4-stars" class="star">&#9733;</label>
                                            <input type="radio" value="3" />
                                            <label for="3-stars" class="star">&#9733;</label>
                                            <input type="radio" value="2" checked />
                                            <label for="2-stars" class="star">&#9733;</label>
                                            <input type="radio" />
                                            <label for="1-star" class="star">&#9733;</label>
                                        </div>

                                        <?php }else if($rats['rating']=='3'){ ?>

                                        <div class="star-rating">
                                            <input type="radio" value="5" />
                                            <label for="5-stars" class="star">&#9733;</label>
                                            <input type="radio" value="4" />
                                            <label for="4-stars" class="star">&#9733;</label>
                                            <input type="radio" value="3" checked />
                                            <label for="3-stars" class="star">&#9733;</label>
                                            <input type="radio" value="2" />
                                            <label for="2-stars" class="star">&#9733;</label>
                                            <input type="radio" />
                                            <label for="1-star" class="star">&#9733;</label>
                                        </div>

                                        <?php }else if($rats['rating']=='4'){ ?>
                                        <div class="star-rating">
                                            <input type="radio" value="5" />
                                            <label for="5-stars" class="star">&#9733;</label>
                                            <input type="radio" value="4" checked />
                                            <label for="4-stars" class="star">&#9733;</label>
                                            <input type="radio" value="3" />
                                            <label for="3-stars" class="star">&#9733;</label>
                                            <input type="radio" value="2" />
                                            <label for="2-stars" class="star">&#9733;</label>
                                            <input type="radio" />
                                            <label for="1-star" class="star">&#9733;</label>
                                        </div>

                                        <?php }else if($rats['rating']=='5'){ ?>
                                        <div class="star-rating">
                                            <input type="radio" value="5" checked />
                                            <label for="5-stars" class="star">&#9733;</label>
                                            <input type="radio" value="4" />
                                            <label for="4-stars" class="star">&#9733;</label>
                                            <input type="radio" value="3" />
                                            <label for="3-stars" class="star">&#9733;</label>
                                            <input type="radio" value="2" />
                                            <label for="2-stars" class="star">&#9733;</label>
                                            <input type="radio" />
                                            <label for="1-star" class="star">&#9733;</label>
                                        </div>

                                        <?php } ?>
                                        <p>
                                            <?php echo $rats['review'] ?>
                                        </p><br>
                                        <?php 
                                        $originalDate = $rats['created_at'];
                                        $newDate = date("d-M-Y H:i:s", strtotime($originalDate));
                                        ?>
                                        <span>Rating Time : <?php echo $newDate ?></span>
                                    </div>
                                    <?php $i++; } }else{?>

                                    <h3>No Ratings found</h3>

                                    <?php } ?>
                                    <!-- <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo">
                                        <a class="card-title">
                                            Item 2
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat
                                            craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                            haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree">
                                        <a class="card-title">
                                            Item 3
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. samus labore sustainable VHS.
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>


    <?php  $this->load->view('includes/footer'); ?>