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

.registr-main {
    overflow-x: hidden;
}
</style>

<style>
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    background-color: transparent;
    border: none;
    border-right: 1px solid #aaa;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    color: #999;
    cursor: pointer;
    font-size: 1em;
    font-weight: bold;
    padding: 0 4px;
    position: absolute;
    left: 0;
    top: -8px !important;
}
.compulsary{
    color: red;
}
.help-text {
    color: red;
    font-size: 14px;
    font-family: auto;
    margin-top: -27px;
}

.registr-main {
    overflow-x: hidden;
}
</style>
<section class="registr-main">
    <div class="w-100 gray-bg position-relative">
        <div class="login-register-wrap w-100">

            <div class="register-inner container">
                <div class="title2 w-100 text-center pt-5 mt-2">
                    <h2 class="mb-4">Student Registration</h2>
                </div>
                <?php
                                $success = $this->session->userdata('success');
                                if($success!=""){?>
                <div class="alert alert-success"><?php echo $success ?></div>
                <?php } ?>

                <?php 
                            $error = $this->session->userdata('error');
                         if($error!=""){?>
                <div class="alert alert-danger text-center" id="error"><?php echo $error ?></div>
                <?php } ?>



                <form action="<?php echo base_url('students/Register/saveRecord') ?>" class="mb-4" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Name <span class="compulsary">*</span></label>
                            <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Email id</label>
                            <input type="email" name="email" placeholder="Enter Email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Mobile Number<span class="compulsary">*</span></label>
                            <input type="number" name="number" id="number" placeholder="Enter Mobile Number"
                                class="form-control" onChange="return validatePhone();" required>
                            <label id='email_message'></label>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Gender<span class="compulsary">*</span></label><br>
                            <input type="radio" name="gender" class="ml-4" value="Male" required> Male
                            <input type="radio" name="gender" class="ml-4" value="Female" required> Female
                            <input type="radio" name="gender" class="ml-4" value="Other" required> Other

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">DOB</label>
                            <input type="date" name="dob" placeholder="Enter DOB" class="form-control" >
                        </div>
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">School Name<span class="compulsary">*</span></label>
                            <input type="school" name="schoolname" placeholder="Enter School Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Class<span class="compulsary">*</span></label>
                            <select name="class" id="class" class="form-control" required>
                                <option value="">--Select Class--</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Subject for Tution<span class="compulsary">*</span></label>
                            <select name="tution" id="tution" class="form-control" required>
                                <option value="">Select Subject</option>
                                <option value="Hindi">Hindi</option>
                                <option value="English">English</option>
                                <option value="Maths">Maths</option>
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
                                <option value="Comouter Science">Comouter Science</option>
                                <option value="Infomatics Practices">Infomatics Practices</option>
                                <option value="GATE / NET / IIT-JAM">GATE / NET / IIT-JAM</option>
                                <option value="JEE and NEET">JEE and NEET</option>
                                <option value="DEFENCE">DEFENCE</option>
                                <option value="UPSC/PCS">UPSC/PCS</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Address</label>
                            <input type="text" name="address" placeholder="Enter Address" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Area</label>
                            <input type="text" name="area" placeholder="Enter Area" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Pin Code</label>
                            <input type="number" name="pincode" placeholder="Enter Pin Code" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">District</label>
                            <input type="text" name="district" placeholder="Enter District" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">State</label>
                            <input type="text" name="state" placeholder="Enter State" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="mb-2 ml-3">Password<span class="compulsary">*</span></label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="thm-btn rounded-pill text-center">Submit </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
function validatePhone() {

    var mynumber = document.getElementById('number').value;


    if (mynumber != '') {
        if (!mynumber.match(/^\d*(?:\.\d{1,2})?$/)) {
            document.getElementById('email_message').style.color = 'red';
            document.getElementById('email_message').innerHTML = 'Please match requested Email format';
            document.getElementById('number').style.border = '1px solid red';
            $('#number').val('');
            return false;
        } else if (mynumber.length < 10 || mynumber.length > 12) {
            document.getElementById('email_message').style.color = 'red';
            document.getElementById('email_message').innerHTML = 'Mobile Number Must be 10 Digits';
            document.getElementById('number').style.border = '1px solid red';
            $('#number').val('');
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('students/Register/checkPhone') ?>",
                async: false,
                cache: false,
                data: {
                    number: mynumber
                },
                success: function(response) {

                    if (response == "failed") {
                        document.getElementById('email_message').style.color = 'red';
                        document.getElementById('email_message').innerHTML =
                            'Mobile Number already Used Try another.';
                        document.getElementById('number').style.border = '1px solid red';
                        $('#number').val('');
                        return false;
                    } else {
                        console.log(response);
                        document.getElementById('email_message').innerHTML = 'response';
                        document.getElementById('email_message').innerHTML = '';
                        document.getElementById('number').style.border = '1px solid green';
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
        }
    }
}
</script>
<script>
$(function() {

    $('#dropzone').on('dragover', function() {
        $(this).addClass('hover');
    });

    $('#dropzone').on('dragleave', function() {
        $(this).removeClass('hover');
    });

    $('#dropzone input').on('change', function(e) {
        var file = this.files[0];

        $('#dropzone').removeClass('hover');



        $('#dropzone').addClass('dropped');
        $('#dropzone img').remove();

        if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
            var reader = new FileReader(file);

            reader.readAsDataURL(file);

            reader.onload = function(e) {
                var data = e.target.result,
                    $img = $('<img />').attr('src', data).fadeIn();

                $('#dropzone div').html($img);
            };
        } else {
            var ext = file.name.split('.').pop();

            $('#dropzone div').html(ext);
        }
    });
});
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    $('.form-control-rgistr').select2();
});

$(document).ready(function() {
    $('#inputState1').select2();
});

$(document).ready(function() {
    $('#inputState12').select2();
});

$(document).ready(function() {
    $('#inputState13').select2();
});

$(document).ready(function() {
    $('#inputState14').select2();
});
$(document).ready(function() {
    $('#inputState80').select2();
});
</script>
<script>
$(document).ready(function() {
    $("#error").show().delay(4000).fadeOut();
});

$(document).ready(function() {
    $("#both").click(function() {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });
});
</script>
<?php 
    $this->load->view('includes/footer');
?>