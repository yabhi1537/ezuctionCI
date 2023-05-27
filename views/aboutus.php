    
    <?php  $this->load->view('includes/header'); ?>
        <section class="pager-section">
        <div class="pager-content">
            
            <?php 
            $currentURL = $this->uri->segment(1);
            ?>
            <ul class="breadcrumbs has-link-effect">
                <li><a href="<?php echo base_url() ?>" itemprop="url">Home</a></li>
                <?php if($currentURL=="Aboutus"){ ?>
                <li><span><a href="<?php echo base_url('Aboutus') ?>" style="font-weight: 800;">About us</a></span></li>
                <?php }else{ ?>
                    <li><span><a href="<?php echo base_url('Aboutus') ?>">About us</a></span></li>
                
                <?php } ?>
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
                                data-id="ede449b" data-element_type="widget"
                                data-widget_type="shelly-heading-split.default">
                                <div class="elementor-widget-container">
                                    <div class="site-heading">
                                        <h2 class="shelly-heading">
                                            <span><?php echo $about[0]['title'] ?></span> <br></h2>
                                          

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d1cf9b9 elementor-widget elementor-widget-text-editor"
                                data-id="d1cf9b9" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p><?php echo $about[0]['editor'] ?></p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
     <?php  $this->load->view('includes/footer'); ?>