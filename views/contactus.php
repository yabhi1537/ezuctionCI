<?php 

$this->load->view('includes/header');

?>
<style>
.responsive-map {
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative;
    height: 0;
}

.responsive-map iframe {
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    position: absolute;
}
</style>
<script
    src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=AIzaSyATlQ1xKy3-sMzy33Pt3dq2GCm6xIyMtKU&libraries=places">
</script>
<section class="pager-section">
    <div class="pager-content">
        <ul class="breadcrumbs has-link-effect">
            <li><a href="<?php echo base_url() ?>" itemprop="url">Home</a></li>
            <li><span><a href="<?php echo base_url('Contactus') ?>" style="font-weight: 800;">Contact us</a></span></li>
        </ul>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shelly-shape">
        <path class="shelly-shape--fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
        c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
        c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
    </svg>
</section>
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-e5bdd89 mdp-contact elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="e5bdd89" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default pt-4">
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-782af81"
            data-id="782af81" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-8edf1b7 elementor-widget elementor-widget-heading"
                    data-id="8edf1b7" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Contact us
                        </h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-0177884 elementor-widget elementor-widget-shelly-header-icons"
                    data-id="0177884" data-element_type="widget" data-widget_type="shelly-header-icons.default">
                    <div class="elementor-widget-container">
                        <div class="header-icons header-icons--vertical">
                            <ul>
                                <li>
                                    <div class="contact-icon">
                                        <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <h6>Call Us</h6>
                                        <span>+91<?php echo $contact[0]['number'] ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i aria-hidden="true" class="fas fa-clock"></i>
                                    </div>
                                    <div class="contact-info">
                                        <h6>Business hours</h6>
                                        <span><?php echo $contact[0]['hours'] ?></span>
                                    </div>
                                </li>
                                <!--<li>-->
                                <!--    <div class="contact-icon">-->
                                <!--        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>-->
                                <!--    </div>-->
                                <!--    <div class="contact-info">-->
                                <!--        <h6>Location</h6>-->
                                <!--        <span>Jankipuram, Lucknow</span>-->
                                <!--    </div>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-9297859"
            data-id="9297859" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-09bac5a elementor-widget elementor-widget-heading"
                    data-id="09bac5a" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Send Message</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-c77c70d elementor-widget elementor-widget-shelly-cf7"
                    data-id="c77c70d" data-element_type="widget" data-widget_type="shelly-cf7.default">
                    <div class="elementor-widget-container">
                        <div class="cta-form">
                            <div role="form" class="wpcf7" id="wpcf7-f1779-p163-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <div class="alert alert-danger" id="alertmessage"></div>
                                <form action="/contacts/#wpcf7-f1779-p163-o1" method="post">


                                    <label><span class="wpcf7-form-control-wrap" data-name="your-name"><input
                                                type="text" name="your-name" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false" placeholder="Your name"
                                                id='names'></span></label>

                                    <label><span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                                type="email" name="your-email" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false" placeholder="Your email"
                                                id="email"></span></label>

                                    <label><span class="wpcf7-form-control-wrap" data-name="your-message"><textarea
                                                name="your-message" cols="40" rows="10"
                                                class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                placeholder="Message" id="message"></textarea></span></label>

                                    <input type="button" value="Send a message"
                                        class="wpcf7-form-control has-spinner wpcf7-submit"
                                        onclick="saveFunction()"><span class="wpcf7-spinner"></span>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-content">
    <div class="page-container">
        <div class="page-content-markup">
            <div data-elementor-type="wp-page" data-elementor-id="163" class="elementor elementor-163">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-e57bdfa elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="e57bdfa" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5c67757"
                            data-id="5c67757" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-36507f1 elementor-widget elementor-widget-google_maps"
                                    data-id="36507f1" data-element_type="widget" data-widget_type="google_maps.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-custom-embed">
                                            <div class="responsive-map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889"
                                                    width="600" height="450" frameborder="0" style="border:0"
                                                    allowfullscreen></iframe>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function() {

    $("#alertmessage").hide();

});
</script>
<script>
function saveFunction() {
    var name = $("#names").val();
    var email = $("#email").val();
    var message = $("#message").val();
    if (name == "" && email == "" && message == "") {
        $("#alertmessage").show();
        $("#alertmessage").html("All Input filed Required");
        $("#alertmessage").fadeOut(4000);


    } else {
        $.ajax({
            url: "<?php echo base_url('Contactus/saveData') ?>",
            type: "POST",
            cache: false,
            data: {
                name: name,
                email: email,
                message: message
            },
            success: function(data) {
                swal({
                    title: "Thank You",
                    text: "Your Submission Has been Sent.",
                    icon: "success",
                    button: "Done",
                });
                    $("#names").val('');
                    $("#email").val('');
                    $("#message").val('');

            }
        });
    }


}
</script>

<?php 
       $this->load->view('includes/footer');
       
       ?>