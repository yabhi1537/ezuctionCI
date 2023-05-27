<?php 

    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');


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

<!-- Main Sidebar Container -->

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Header/Footer</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">header/footer</li>
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

                        <form action="<?php echo base_url('admin/SocialController/saveData') ?>" method="post"
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
                            <div class="alert alert-danger" id="messgae"></div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Call Us</label>
                                    <input type="number" name="callus" class="form-control" id="callus"
                                        placeholder="Enter Contact Number" onchange="checkContact()" required value="<?php echo $social[0]['number'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Business Hours</label>
                                    <input type="text" name="businesss" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Business Hours" required value="<?php echo $social[0]['hours'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instagram Url</label>
                                    <input type="url" name="instagram" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Instagram Url" required value="<?php echo $social[0]['insta'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook Url</label>
                                    <input type="url" name="facebook" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Facebook Url" required value="<?php echo $social[0]['facebook'] ?>">
                                </div>
                                     <div class="form-group">
                                    <label for="exampleInputEmail1">LinkedIn  Url</label>
                                    <input type="url" name="LinkedIn " class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter LinkedIn  Url" required value="https://www.linkedin.com/in/shubham-singh-801897155">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer about</label>
                                    <textarea name="footerabout" id="" class='form-control' cols="30" rows="10"><?php echo $social[0]['footer_about'] ?></textarea>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- Main Footer -->
<script>
$(document).ready(function() {

    $("#messgae").hide();
});
</script>
<script>
function checkContact() {
    var number = $("#callus").val();
    var numcount = number.length;

    if (numcount >= '10' && numcount <= '12') {

        $("#callus").css("border", "1px solid green");


    } else {
        $("#callus").css("border", "1px solid red");
        $("#messgae").show();

        $("#messgae").html("Enter Mobile Number Proper Format");
        $("#callus").val('');
        $("#messgae").fadeOut(4000);

    }
}
</script>
<?php 
 
 $this->load->view('admin/includes/footer');
 
 ?>