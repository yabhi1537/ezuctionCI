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
                    <h1 class="m-0">Add Blog</h1>
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

                        <form action="<?php echo base_url('admin/BlogController/saveData') ?>" method="post"
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
                                        <label for="exampleInputEmail1">Title<span class="compulsary">*</span> </label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title"
                                            required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Heading<span class="compulsary">*</span> </label>
                                        <input type="tetx" name="heading" class="form-control" placeholder="Enter Heading"
                                            id="email" required>
                                        <label id='email_message'></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Image<span class="compulsary">*</span>
                                        </label><br>
                                        <input type="file" name="userfile" accept="image/*" class="form-control"  required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Meta Title<span class="compulsary">*</span> </label>
                                        <input type="text" name="metaTitle" class="form-control" placeholder="Enter Meta Title"
                                            required>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Meta Description<span class="compulsary">*</span> </label>
                                        <input type="tetx" name="metaDesc" class="form-control" placeholder="Enter Meta Description"
                                            id="email" required>
                                        <label id='email_message'></label>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Description<span class="compulsary">*</span>
                                        </label>
                                        <textarea name="editor1" class='form-control' id="description" cols="30" rows="10"></textarea>
                                    </div>
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
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
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
CKEDITOR.replace( 'editor1' );

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