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
                    <h1 class="m-0">Students</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Students</li>
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

                            <!-- <a href="<?php echo base_url('admin/Facility/addfaliclity') ?>" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> -->
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

                        <table class="table table-bordered" id="studentstable">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>

                                    <th>Password</th>
                                    <th>Tution</th>
                                    <th>Class</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php  if(!empty($student)){ $i=1; foreach($student as $students){  ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $students['name'] ?></td>
                                    <td><?php echo $students['email'] ?></td>
                                    <td><?php echo $students['number'] ?></td>

                                    <td><?php echo $students['password'] ?></td>
                                    <td><?php echo $students['tutionsubject'] ?></td>
                                    <td><?php echo $students['class'] ?></td>

                                    <td>
                                        <a href="<?php echo base_url('admin/AddStudents/editStudent/').$students['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                        <a
                                             onclick='deleteRow(<?php echo $students["id"] ?>)'><i
                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>

                                </tr>

                                <?php $i++; }}else{ ?>
                                <tr>
                                    <td colspan="5"> Record not found</td>
                                </tr>
                                <?php } ?>
                            </tbody>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function deleteRow(id) {
    swal({
            title: "Are you sure?",
            text: "You want to delete this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('admin/AddStudents/delStudent/')?>"+id,
                   
                    success: function(data) {

                    }
                });
                swal("Paid Status has been changed Succesfully!", {
                    icon: "success",
                    timer: "1500",
                });
                window.location.reload();
            }
        });

}
</script>

<?php 
 
 $this->load->view('admin/includes/footer');
 
 ?>