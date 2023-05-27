<?php 

    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');


?>

<!-- Main Sidebar Container -->

<style>
.compulsary {
    color: red;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Students</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Students</li>
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

                        <form action="<?php echo base_url('admin/AddStudents/saveData') ?>" method="post"
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
                                        <input type="text" name="names" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Name" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Gender<span class="compulsary">*</span>
                                        </label><br>
                                        <input type="radio" name="gender" class="ml-5" value="male"> Male
                                        <input type="radio" name="gender" class="ml-5" value="female"> Female
                                        <input type="radio" name="gender" class="ml-5" value="other"> Other
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Phone Number<span class="compulsary">*</span>
                                        </label>
                                        <input type="number" name="mobile" class="form-control" id="number"
                                            placeholder="Enter Mobile Number" onChange="return validatePhone();"
                                            required>
                                        <label id='email_message'></label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">DOB<span class="compulsary">*</span> </label>
                                        <input type="date" name="dob" class="form-control" id="exampleInputEmail1"
                                            placeholder="Other Highest Qualification" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">School Name<span class="compulsary">*</span>
                                        </label>
                                        <input type="text" name="schoolname" class="form-control"
                                            id="exampleInputEmail1" placeholder="Enter School name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Class<span class="compulsary">*</span> </label>
                                        <select name="class" id="class" class="form-control" required>
                                            <option value="">Select Class</option>
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
                                        <label for="exampleInputEmail1">Subject for Tution<span
                                                class="compulsary">*</span> </label>
                                        <select name="subjectt" id="tution" class="form-control" required>
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
                                        <label for="exampleInputEmail1">Address </label>
                                        <input type="text" name="address" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Address">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Area </label>
                                        <input type="text" name="area" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Area">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Pin Code </label>
                                        <input type="text" name="pincode" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Pin Code">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">District
                                        </label>
                                        <input type="text" name="district" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter District">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">State </label>
                                        <input type="text" name="state" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter State">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Password <span
                                                class="compulsary">*</span></label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputEmail1" placeholder="Enter Password" required>
                                    </div>
                                </div>





                            </div>
                            <div class="card-footer">
                                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
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
<?php 
 
 $this->load->view('admin/includes/footer');
 
 ?>