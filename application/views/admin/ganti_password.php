<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Ganti Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="<?php echo site_url('dashboard') ?>">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Ganti Password/li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ganti Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?php echo site_url('adminpanel/aksi_update_password') ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Ganti Password</label>
                    <div class="com-sm-9">
                    <input type="text" name="password" placeholder="Masukkan Password">
                    </div>
                    
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
</section>
</div>