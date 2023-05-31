<div class="content-wrapper">
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
              <div class="card-header">
                <h3 class="card-title">Data Profil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form method="post" action="<?php echo site_url('main/update_profile') ?>">
                <input type="hidden" name="id" value="<?php echo $member->idKonsumen; ?>">
                <div class="card-body">
                <div class="form-group">
                    <input type="text" name="username" value="<?php echo $member->username; ?>" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="text" name="namaKonsumen" value="<?php echo $member->namaKonsumen; ?>" class="form-control" placeholder="Nama Konsumen">
                </div>
                <div class="form-group">
                    <input type="text" name="alamat" value="<?php echo $member->alamat; ?>" class="form-control" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <input type="text" name="email" value="<?php echo $member->email; ?>" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" name="tlpn" value="<?php echo $member->tlpn; ?>" class="form-control" placeholder="Telepon">
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary py-2 px-4">Submit</button>
                </div>
              </form>
            
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</section>
</div>