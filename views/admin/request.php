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
                    <h1 class="m-0">Contact Us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>

                            </tr>
                            <?php  if(!empty($contact)){ $i=1; foreach($contact as $contacts){  ?>
                             <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $contacts['name'] ?></td>
                                <td><?php echo $contacts['email'] ?></td>
                                <td><?php echo $contacts['message'] ?></td>
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