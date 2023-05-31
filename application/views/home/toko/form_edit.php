<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Form Edit Toko</span></h2>
    </div>
    <div class="row px-xl-5">
    <div class="col-lg-3 mb-5"></div>
        <div class="col-lg-6 mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form action="<?php echo site_url('toko/update'); ?>" method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="namaToko" placeholder="Nama Toko" value="<?php echo $toko->namaToko; ?>">
                        <p class="help-block text-danger"></p>
                    </div>
                    <span class="text-danger"><?= form_error('namaToko')?></span>
                    <div class="control-group">
                        <input type="file" class="form-control" id="password" name="logo" placeholder="Logo Toko"
                        oninvalid="this.setCustomValidity('Masukkan logo tokomu')"oninput="setCustomValidity('')" />
                        <p class="help-block text-danger"></p>
                        <p>Logo saat ini: <img src="<?php echo base_url('assets/logo_toko/' . $toko->logo); ?>" width="100"></p>
                    </div>
                    <div class="control-group">
                        <textarea name="deskripsi" id="message" cols="30" rows="3"><?php echo $toko->deskripsi; ?></textarea>
                    </div>
                    <span class="text-danger"><?= form_error('deskripsi')?></span>
                    <input type="hidden" name="idToko" value="<?php echo $toko->idToko; ?>">
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3 mb-5"></div>
        </div>
    </div>