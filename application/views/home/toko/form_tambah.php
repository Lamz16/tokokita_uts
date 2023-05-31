<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Tambah Toko</span></h2>
        </div>
        <div class="row px-xl-5">
        <div class="col-lg-3 mb-5"></div>
            <div class="col-lg-6 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="<?php echo site_url('toko/save'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idKonsumen" value="<?php echo $this->session->userdata('member_id'); ?>">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="namaToko" placeholder="Nama Toko">
                            <p class="help-block text-danger"></p>
                        </div>
                        <span class="text-danger"><?= form_error('namaToko')?></span>
                        <div class="control-group">
                            <input type="file" class="form-control" id="password" name="logo" placeholder="Logo Toko"
                                required="required" oninvalid="this.setCustomValidity('Masukkan logo tokomu')"oninput="setCustomValidity('')" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea name="deskripsi" id="message" cols="30" rows="3"></textarea>
                        </div>
                        <span class="text-danger"><?= form_error('deskripsi')?></span>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 mb-5"></div>
        </div>
    </div>