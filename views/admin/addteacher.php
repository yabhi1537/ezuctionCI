<?php 

    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');


?>

<!-- Main Sidebar Container -->

<style>
.compulsary {
    color: red;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Teacher</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Teacher</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">

                        <form action="<?php echo base_url('admin/TeacherController/saveData') ?>" method="post"
                            enctype="multipart/form-data">

                            <?php
                            $success = $this->session->userdata('success');
                            if($success!=""){?>
                            <div class="alert alert-success"><?php echo $success ?></div>
                            <?php } ?>
                            <?php
                            $failure = $this->session->userdata('failure');
                            if($failure!=""){?>
                            <div class="alert alert-danger"><?php echo $failure ?></div>
                            <?php } ?>

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Name<span class="compulsary">*</span> </label>
                                        <input type="text" name="names" class="form-control" placeholder="Enter Name"
                                            required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email<span class="compulsary">*</span> </label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email"
                                            id="email" required onChange="return validateEmail();">
                                        <label id='email_message'></label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Gender<span class="compulsary">*</span>
                                        </label><br>
                                        <input type="radio" name="gender" class="ml-5" value="male" required> Male
                                        <input type="radio" name="gender" class="ml-5" value="female" required> Female
                                        <input type="radio" name="gender" class="ml-5" value="other" required> Other
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Phone Number<span class="compulsary">*</span>
                                        </label>
                                        <input type="number" name="mobile" class="form-control"
                                            placeholder="Enter Mobile Number" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Brief Introduction<span
                                                class="compulsary">*</span> </label>
                                        <textarea name="intro" id="" cols="30" rows="1" class="form-control"
                                            placeholder="Enter Brief Introduction" required></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Highest Qualification<span
                                                class="compulsary">*</span> </label>
                                        <select name="hqualification" id="hqualification" class="form-control">
                                            <option value="Graduation">Graduation</option>
                                            <option value="Post-Graduation">Post-Graduation</option>
                                            <option value="Phd">Ph.D</option>
                                            <option value="Post Doc">Post Doc</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Other Highest Qualification</label>
                                        <input type="text" name="otherhigh" class="form-control" id="exampleInputEmail1"
                                            placeholder="Other Highest Qualification">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Type of Batch<span class="compulsary">*</span>
                                        </label><br>
                                        <input type="radio" name="batch" class="ml-5" value="Regular" required> Regular
                                        <input type="radio" name="batch" class="ml-5" value="Comptetitive" required>
                                        Comptetitive

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Type of Institute<span
                                                class="compulsary">*</span> </label><br>
                                        <input type="radio" name="institute" class="ml-5" value="indivisual" required>
                                        Indivisual
                                        <input type="radio" name="institute" class="ml-5" value="coaching" required>
                                        Coaching Center
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Mode of Delivery<span
                                                class="compulsary">*</span> </label><br>
                                        <input type="radio" name="mode" class="ml-5" value="offline" required> Offline
                                        Only
                                        <input type="radio" name="mode" class="ml-5" value="online" required> Online
                                        Only
                                        <input type="radio" name="mode" class="ml-5" value="offlineandonline" required>
                                        Offline and Online Both
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Overall Teaching Exp <span
                                                class="compulsary">*</span> </label>
                                        <select class="form-control" name="teacherexp" id="teacherexp">
                                            <option value="0-5 Years">0-5 Years</option>
                                            <option value="5-10 Years">5-10 Years</option>
                                            <option value="10-15 Years">10-15 Years</option>
                                            <option value="15-20 Years">15-20 Years</option>
                                            <option value="More than 20 Years">More than 20 Years</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputState">Class <span class="compulsary">*</span> </label>
                                        <select id="inputState13" class="form-control" name="class[]"
                                            multiple="multiple">
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

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Board <span class="compulsary">*</span> </label>
                                        <select id="inputState15" class="form-control" name="board[]"
                                            multiple="multiple">
                                            <option value="ICSE">I.C.S.E</option>
                                            <option value="CBSE">CBSE</option>
                                            <option value="State Board">State Board</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Subject<span class="compulsary">*</span> </label>
                                        <select id="inputState14" class="subject form-control" name="subject[]"
                                            multiple="multiple">
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
                                            <option value="Informatics Practices">Informatics Practices</option>
                                            <option value="GATE / NET/ IIT-JAM">GATE / NET/ IIT-JAM</option>
                                            <option value="JEE and NEET">JEE and NEET</option>
                                            <option value="SSC/BANK/ RAILWAYS/GOVT. EXAM">SSC/BANK/ RAILWAYS/GOVT. EXAM
                                            </option>
                                            <option value="DEFENCEEXAM">DEFENCE</option>
                                            <option value="UPSC/PCS">UPSC/PCS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Coaching Address<span
                                                class="compulsary">*</span> </label>
                                        <input type="text" name="coaching" class="form-control"
                                            placeholder="Enter Coaching Address" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Area<span class="compulsary">*</span> </label>
                                        <input type="text" name="area" class="form-control" placeholder="Enter Area" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Pincode<span class="compulsary">*</span>
                                        </label>
                                        <input type="text" name="pincode" class="form-control"
                                            placeholder="Enter Pincode" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">District<span class="compulsary">*</span>
                                        </label>
                                        <input type="text" name="district" class="form-control" id=""
                                            placeholder="Enter District" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">State<span class="compulsary">*</span> </label>
                                        <input type="text" name="state" class="form-control" placeholder="Enter State" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Lankmark </label>
                                        <input type="text" name="landmark" class="form-control"
                                            placeholder="Enter Landmark">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Refer by </label>
                                        <input type="text" name="refer" class="form-control"
                                            placeholder="Enter Reference Id">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Enter Password<span class="compulsary">*</span>
                                        </label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Enter Password" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Profile </label>
                                    <input type="file" name="image" class="form-control" placeholder="Enter Title">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">

                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->


<?php 
 
 $this->load->view('admin/includes/footer');
 
 ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('#inputState13').select2();
});
$(document).ready(function() {
    $('#inputState14').select2();
});
$(document).ready(function() {
    $('#inputState15').select2();
});
</script>

<script>
function validateEmail() {
    var myemail = document.getElementById('email').value;
    if (myemail != '') {
        if (!myemail.match(/^[a-zA-Z0-9.!#$%&’*+=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
            document.getElementById('email_message').style.color = 'red';
            document.getElementById('email_message').innerHTML = 'Please match requested Email format';
            document.getElementById('email').style.border = '1px solid red';
            $('#email').val('');
            return false;
        } else if (myemail.length < 1 || myemail.length > 50) {
            document.getElementById('email_message').style.color = 'red';
            document.getElementById('email_message').innerHTML = 'Email id must be between 5 to 50 characters';
            document.getElementById('email').style.border = '1px solid red';
            $('#email').val('');
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('admin/TeacherController/checkEmail') ?>",
                async: false,
                cache: false,
                data: {
                    email: myemail
                },
                success: function(response) {
                    if (response == "failed") {
                        document.getElementById('email_message').style.color = 'red';
                        document.getElementById('email_message').innerHTML =
                            'Email already used, please try another.';
                        document.getElementById('email').style.border = '1px solid red';
                        $('#email').val('');
                        return false;
                    } else {
                        console.log(response);
                        document.getElementById('email_message').innerHTML = 'response';
                        document.getElementById('email_message').innerHTML = '';
                        document.getElementById('email').style.border = '1px solid green';
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