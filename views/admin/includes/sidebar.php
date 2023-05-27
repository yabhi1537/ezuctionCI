<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="<?php echo base_url() ?>assets/images/teachlogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">EduKxn</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() ?>admin-assets/dist/img/user2-160x160.jpg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> -->

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-item">
                    <a href="<?php echo base_url('admin/HomeController') ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Contents
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/review') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reviews</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/AboutusController') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/Aboutportal') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Portal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/Facility') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Our Facilities</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/SocialController') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Header/Footer</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/Banners') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Upload Banners</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="<?php echo base_url('admin/TeacherController') ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Teachers</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url('admin/RequestController') ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Enquiry</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Students
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/AddStudents/addStudents') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Students</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/AddStudents') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Students</p>
                            </a>
                        </li>
                      
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/StudentReview') ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Students Reviews</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/blogs') ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Blogs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/events') ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Events</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>