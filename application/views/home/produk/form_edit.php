<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Tambah Produk</span></h2>
        </div>
        <div class="row px-xl-5">
        <div class="col-lg-3 mb-5"></div>
            <div class="col-lg-6 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" action="<?php echo site_url('produk/save'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idToko" value="<?php echo $idToko; ?>">
                        <div class="control-group">
                            <select class="form-control" name="kategori">
                                <?php foreach($kategori as $val){?>
                                    <option value="<?php echo $val->idkat; ?>"> <?php echo $val->namaKat;?></option>
                                    <?php
                                } ?>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="password" name="namaProduk" placeholder="Nama Produk"
                                required="required" oninvalid="this.setCustomValidity('Masukkan nama produk')"oninput="setCustomValidity('')" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="file" class="form-control" id="password" name="gambar" placeholder="Gambar"
                                required="required" oninvalid="this.setCustomValidity('Masukkan Gambar Produk')"oninput="setCustomValidity('')" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="password" name="hargaProduk" placeholder="Harga Produk"
                                required="required" oninvalid="this.setCustomValidity('Masukkan Harga Produk')"oninput="setCustomValidity('')" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="password" name="jumlahProduk" placeholder="Jumlah Produk"
                                required="required" oninvalid="this.setCustomValidity('Masukkan Jumlah Produk')"oninput="setCustomValidity('')" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="password" name="beratProduk" placeholder="Berat Produk"
                                required="required" oninvalid="this.setCustomValidity('Masukkan Berat Produk')"oninput="setCustomValidity('')" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="password" name="deskripsi" placeholder="Deskripsi Produk"
                                required="required" oninvalid="this.setCustomValidity('Deskripsikan Produk Anda')"oninput="setCustomValidity('')" > </textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 mb-5"></div>
        </div>
    </div>