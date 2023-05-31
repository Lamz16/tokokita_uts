<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Usernama</th>
                      <th>Nama Konsumen</th>
                      <th>Email</th>
                      <th>No Telepon</th>
                      <th>Alamat</th>
                      <th>Status Aktif</th>
                      <th style="width: 200px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($member as $val) {?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $val->username; ?></td>
                      <td><?php echo $val->namaKonsumen; ?></td>
                      <td><?php echo $val->email; ?></td>
                      <td><?php echo $val->tlpn; ?></td>
                      <td><?php echo $val->alamat; ?></td>
                      <td><?php if ($val->statusAktif=="Y") {
                        echo "Aktif";
                      } else {echo "Tidak Aktif";} ?></td>
                      <td><div class="btn-group">
                       <a href="<?php echo site_url('member/ubah_status/'.$val->idKonsumen); ?>" class="btn btn-warning">Ubah Status</a>
                       <a href="<?php echo site_url('member/delete/'.$val->idKonsumen); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                      </div></td>
                    </tr>
                    <?php $no++; } ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->

           
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>