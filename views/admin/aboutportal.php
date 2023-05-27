<?php 

    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');


?>

<!-- Main Sidebar Container -->

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">About portal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">About Portal</li>
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

                        <form action="<?php echo base_url('admin/Aboutportal/saveData') ?>" method="post"
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
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Title" value="<?php echo $about[0]['title'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea name="editor1" placeholder="Start Writing Here......."><?php echo $about[0]['description'] ?></textarea>
                                </div>
                                
                                 <div class="form-group">
                                    <h3>Image Uploade Size</h3>
                               <strong>550 × 450 px</strong><br>
                              
                                    <!-- <label for="exampleInputPassword1">Image</label> -->
                                   <input type="file" name="userfile" class="form-control" id="userfile">
                                   <img src='<?php echo base_url("upload/blog/"). $about[0]['images'] ?>' style='height:100px;width:130px;' />
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
<script>
CKEDITOR.replace('editor1');
</script>