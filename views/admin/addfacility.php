<?php 

    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');


?>

<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Facility</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Facility</li>
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

                        <form action="<?php echo base_url('admin/Facility/saveData') ?>" method="post"
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
                                        placeholder="Enter Title" required value="<?php echo $facility[0]['title'] ?>">

                                        <input type="hidden" name="oldimage" value="<?php echo $facility[0]['image'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Sub-title</label>
                                    <textarea name="subtitile" id="" cols="30" rows="4" class="form-control"
                                        placeholder="Start Writing Here....." required value="<?php echo $facility[0]['subtitle'] ?>"><?php echo $facility[0]['subtitle'] ?></textarea>
                                </div>

                                <div class="form-group">
                                <h3> Uploade Size</h3>
                               <strong>1120 × 545 px</strong><br>	
                              
                                    <label for="exampleInputEmail1">Facilities Image</label>
                                    <input type="file" name="files[]" class="form-control mb-3" id="exampleInputEmail1"
                                        placeholder="Enter Title" multiple accept="image/*">
                                        <?php
                                        $expvalue = explode(",",$facility[0]['image']);
                                        ?>
                                        <img src="<?php echo base_url('upload/facility/').$expvalue[0] ?>" alt="" height="80" width="80">
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