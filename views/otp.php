<?php 
   $this->load->view('includes/header');
   ?>
<style>

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
<section>
    <div class="w-100 gray-bg position-relative">
        <div class="login-register-wrap w-100">

        </div>
        <!-- Login Register Wrap -->
    </div>
</section>
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-576ad41 elementor-section-content-middle elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="576ad41" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1355c5b"
            data-id="1355c5b" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-39199f7 elementor-widget elementor-widget-image"
                    data-id="39199f7" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img width="500" height="500"
                            src="https://shelly.merku.love/wp-content/uploads/2020/11/abt2.png"
                            class="attachment-large size-large entered lazyloaded" alt=""
                            data-lazy-srcset="https://shelly.merku.love/wp-content/uploads/2020/11/abt2.png 575w, https://shelly.merku.love/wp-content/uploads/2020/11/abt2-291x300.png 291w"
                            data-lazy-sizes="(max-width: 575px) 100vw, 575px"
                            data-lazy-src="https://shelly.merku.love/wp-content/uploads/2020/11/abt2.png"
                            data-ll-status="loaded" sizes="(max-width: 575px) 100vw, 575px"
                            srcset="https://shelly.merku.love/wp-content/uploads/2020/11/abt2.png 575w, https://shelly.merku.love/wp-content/uploads/2020/11/abt2-291x300.png 291w"><noscript><img
                                width="575" height="592"
                                src="https://shelly.merku.love/wp-content/uploads/2020/11/abt2.png"
                                class="attachment-large size-large" alt=""
                                srcset="https://shelly.merku.love/wp-content/uploads/2020/11/abt2.png 575w, https://shelly.merku.love/wp-content/uploads/2020/11/abt2-291x300.png 291w"
                                sizes="(max-width: 575px) 100vw, 575px" /></noscript>
                    </div>
                </div>
            </div>
        </div>
        <div class="register-inner container justify-content-center pl-4">
            <div class="title2 w-100 pt-5 mt-2">

                <h2 class="mb-0">Enter OTP</h2>
            </div>

            <form class="w-100 row " method="post" action="<?php echo base_url('MainController/checlOtp') ?>">

                <div class="col-lg-10">
                    <div class="">
                        <div class="register-wrap w-100 pt-5">
                            <?php
            $success = $this->session->userdata('success');
            if($success!=""){?>
                            <div class="alert alert-success"><?php echo $success ?></div>
                            <?php } ?>
                            <?php
            $error = $this->session->userdata('error');
            if($error!=""){?>
                            <div class="alert alert-danger"><?php echo $error ?></div>
                            <?php } ?>

                            <div class="register-inner" style="margin: 0 auto;">
                                <div class="row mrg20">
                                    <div class="col-md-12 col-sm-12 col-lg-12 p-0">
                                        <label class="form-group">Enter OTP</label>
                                        <input class="rounded-pill" type="number" name="otp"
                                            placeholder="Enter Valid OTP" required>
                                        <span style="color: red;"><?php echo form_error('email') ?></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12 mt-50 my-5">
                                        <button class="thm-btn rounded-pill" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {

    $(".msg-alert").show().delay(4000).fadeOut()
});
</script>
<?php 
   $this->load->view('includes/footer');
   ?>