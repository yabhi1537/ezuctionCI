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
                    <h1 class="m-0">Facilities</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Facilities</li>
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
                        <div class="p-3 text-right">
                        
                            <a href="<?php echo base_url('admin/Facility/addfaliclity') ?>" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                        </div>
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

                        <table class="table table-bordered">
                            <tr>
                                <th>S.no</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                            <?php  if(!empty($review)){ $i=1; foreach($review as $reviews){  ?>
                             <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $reviews['title'] ?></td>
                                <td><?php echo $reviews['desc'] ?></td>
                                <td><img src="<?php echo base_url('upload/reviews/').$reviews['image']?>" alt="" height="50" width="50"></td>
                                <td>
                                    <a href="<?php echo base_url('admin/ReviewController/editreview/').$reviews['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                    <a href="<?php echo base_url('admin/ReviewController/delReview/').$reviews['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>

                             </tr>   

                            <?php $i++; }}else{ ?>
                                <tr>
                                    <td colspan="5"> Record not found</td>
                                </tr>
                            <?php } ?>
                        </table>
                       
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