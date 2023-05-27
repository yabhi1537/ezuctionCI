<?php 

    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');


?>
<style>
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

</style>


<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Teachers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Teachers</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="contento">
        <div class="container-fluid">
            <div class="row  no-gutters align-items-center">
                <div class="col-md-12">
               
                    <div class="card card-primary ">
                        <div class="p-3 text-right">

                            <a href="<?php echo base_url('admin/TeacherController/addteacher') ?>"
                                class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
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

                        <table class="table table-bordered scrollmenu" id="myTable" style="font-size: 15px;">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Teacer</th>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>H. Qal</th>
                                <th>Exeperience</th>
                                <th>Address</th>

                                <th>Action</th>
                                <th>Status</th>
                                <th>Profile Status</th>



                            </tr>
                            </thead>
                            <tbody>
                            <?php  $i=1; foreach($teachers as $teacher){  ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $teacher['teacher_id'] ?></td>

                                <td><?php echo $teacher['name'] ?></td>
                                <td><?php echo $teacher['email'] ?></td>
                                <td><?php echo $teacher['phone'] ?></td>
                                <td><?php echo $teacher['highest_qualification'] ?></td>
                                <td><?php echo $teacher['total_techer_exp'] ?></td>
                                <td><?php echo $teacher['address'] ?></td>

                                <td class="text-center">
                                    <a href="<?php echo base_url('admin/TeacherController/editTeacher/').$teacher['id'] ?>"><i
                                    class="fa fa-edit " aria-hidden="true"></i></a>
                                    &nbsp;&nbsp;
                                    <a onclick='deleteRow(<?php echo $teacher["id"] ?>)' ><i
                                            class="fa fa-trash"  aria-hidden="true"></i></a> 
                                </td>

                                <td class="text-center">
                                    <?php if($teacher['status']=='0'){ ?>
                                    <span class="badge rounded-pill bg-danger btn"
                                        onclick="changeStatus(<?php echo $teacher['id'] ?>,1)">Block</span>
                                    <?php } ?>
                                    <?php if($teacher['status']=='1'){ ?>
                                    <span class="badge rounded-pill bg-success btn"
                                        onclick="changeStatus(<?php echo $teacher['id'] ?>,0)">Approved</span>
                                    <?php } ?>

                                </td>

                                <td class="text-center">
                                    <?php if($teacher['paidstatus']=='0'){ ?>
                                    <span class="badge rounded-pill bg-danger btn"
                                        onclick="changePaidStatus(<?php echo $teacher['id'] ?>,1)">Unpaid</span>
                                    <?php } ?>
                                    <?php if($teacher['paidstatus']=='1'){ ?>
                                    <span class="badge rounded-pill bg-success btn"
                                        onclick="changePaidStatus(<?php echo $teacher['id'] ?>,0)">Paid</span>
                                    <?php } ?>

                                </td>

                            </tr>

                            <?php $i++; } ?>
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
<?php 
 
 $this->load->view('admin/includes/footer');
 
 ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script>
function changePaidStatus(id, status) {
    swal({
            title: "Are you sure?",
            text: "You want to change Paid Status!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('admin/TeacherController/paidStatus') ?>",
                    data: {
                        id: id,
                        status: status
                    },
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
                    url: "<?php echo base_url('admin/TeacherController/delTeachers/')?>"+id,
                   
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




function changeStatus(id, status) {

    swal({
            title: "Are you sure?",
            text: "You want to change Status!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('admin/TeacherController/teacherStatus') ?>",
                    data: {
                        id: id,
                        status: status
                    },
                    success: function(data) {

                    }
                });
                swal("Status has Been changed Succesfully!", {
                    icon: "success",
                });
                window.location.reload();

            }
        });



}
</script>