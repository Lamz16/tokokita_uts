<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Kategori</li>
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
                <h3 class="card-title">Data Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?php echo site_url('kategori/save') ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Nama Kategori</label>
                    <div class="com-sm-9">
                    <input type="text" name="namaKat" placeholder="Nama Kategori">
                    </div>
                  </div>
                  <span class="text-danger"><?= form_error('namaKat')?></span>
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