<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Edit Produk</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">   
                    <form name="sentMessage"  method="post" action="<?php echo site_url('produk/edit');?>" enctype="multipart/form-data">
					<input type="hidden" name="idToko" value="<?php echo $idProduk->idToko;; ?>">
                    <input type="hidden" name="idProduk" value="<?php echo $idProduk; ?>">
					<div class="control-group">
                         <select class="form-control" name="kategori">
							<?php foreach($kategori as $val){?>
							<option value="<?php echo $val->idkat; ?>" 
                            
                            <?php 
                            if($val->idkat==$produk->idKat){
                                echo "selected";
                            }
                            ?>
                            ><?php echo $val->namaKat;?></option>
							<?php } ?>
						 </select>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input value="<?php echo $produk->namaProduk; ?>" type="text" name="namaProduk" class="form-control" id="name" placeholder="Nama Produk"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
				
                        <div class="control-group">
                            <input type="file" name="gambar" class="form-control" id="emfail" placeholder="Gambar Produk"
                                 data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                            <img src="<?php echo base_url()."/assets/foto_produk/".$produk->foto;?>" width="100"/><br><br>
                        </div>
						<div class="control-group">
                            <input value="<?php echo $produk->harga; ?>" type="text" name="hargaProduk" class="form-control" id="name" placeholder="Harga Produk"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
						<div class="control-group">
                            <input value="<?php echo $produk->stok; ?>" type="text" name="jumlahProduk" class="form-control" id="name" placeholder="Jumlah Produk"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
						<div class="control-group">
                            <input  value="<?php echo $produk->berat; ?>" type="text" name="beratProduk" class="form-control" id="name" placeholder="Berat Produk"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="3" id="message" name="deskripsi" placeholder="Deskripsi"
                                required="required"
                                data-validation-required-message="Please enter your message"><?php echo $produk->deskripsiProduk; ?></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMesrsageButton">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
