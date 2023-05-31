<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url();?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('userName');?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo site_url('adminpanel/dashboard'); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('kategori'); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Kategori
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('member'); ?>" class="nav-link">
            <i class="fas fa-user nav-icon"></i>
            <p>
                Member
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('adminpanel/change_password'); ?>" class="nav-link">
            <i class="fas fa-user nav-icon"></i>
            <p>
                Ganti Password
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('adminpanel/logout'); ?>" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>
                Logout
            </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>