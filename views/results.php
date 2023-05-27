    
    <?php  $this->load->view('includes/header'); ?>
    <style>
            
            img {
    vertical-align: middle;
    height: 116px!important;
}
a.top-right {
    position: absolute;
    top: -14px;
    left: 145px;
}
        
    </style>
        <section class="pager-section">
        <div class="pager-content">
            <ul class="breadcrumbs has-link-effect">
                <li><a href="<?php echo base_url() ?>" itemprop="url">Home</a></li>
                <li><span><a href="<?php echo base_url('Aboutus') ?>">Teachers</a></span></li>
            </ul>
            <h1>Upload Gallery</h1>
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
                                            Welcome to <span>EduKxn.com</span> </h2>

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d1cf9b9 elementor-widget elementor-widget-text-editor"
                                data-id="d1cf9b9" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Ecosystem blended learning off-the-shelf learning storytelling explainer
                                        animation completion criteria.</p>
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
            <form action="<?php echo base_url('Result/saveimage') ?>" method="post" enctype="multipart/form-data" class="mt-4 text-center"> 
                            <label class="my-2" >Upload Results</label>
                            <div class="d-flex justify-content-center align-items-center "><div id="dropzone">
                                                  <div class="">
                                                      <img src="assets/img/upload-regular-48.png"></div>
                                                  <input type="file" name="image" accept="image/png, application/pdf">
                                                </div>
                            <button class="my-3 mx-5" type="submit" name="sumit">Submit</button></div>
            </form>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-f2a4c81 site-features elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f2a4c81" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    

                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-21b5f2d" data-id="21b5f2d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-dec3f8e elementor-widget elementor-widget-shelly-feature-image-box animated fadeInUp" data-id="dec3f8e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="shelly-feature-image-box.default">
                                <div class="elementor-widget-container">
                                    <div class="site d-flex justify-content-between align-items-center px-3 mb-3">
                                        
                                    </div>
                                    <div class="site-feature">
                                        <div class="row justify-content-between">
                                        <?php if(!empty($results)){ foreach($results as $result){ ?>
                                            
                                            <div class="col-lg-2 mx-2 my-3">
                                                <img src="<?php echo base_url('upload/results/') ?><?php echo $result['image'] ?>" alt="" height="300" width="150"><br>
                                                <a class="top-right" href="<?php echo base_url('Result/delete/').$result['id'] ?>"><i style="color:red;" class="fa fa-trash" aria-hidden="true"></i></a>

                                            </div>
                                        <?php } }else{ ?>
                                         <table>
                                             <tr>
                                                 <td colspan="5">Images Not found</td>
                                             </tr>
                                         </table>
                                        <?php } ?>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </section>
    
    
     <?php  $this->load->view('includes/footer'); ?>