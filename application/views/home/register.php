    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Register</span></h2>
        </div>
        <div class="row px-xl-5">
        <div class="col-lg-2  mb-5"></div>
            <div class="col-lg-8  mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="<?php echo site_url('main/aksi_register'); ?>" method="post">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="username" placeholder="Your Username"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password"
                                required="required" data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" name="namaKonsumen" placeholder="Masukkan Name"
                                required="required" data-validation-required-message="Please enter a Nama" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" name="alamat" placeholder="Your Alamat"
                                required="required"
                                data-validation-required-message="Please enter your Alamat"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your Email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="tlpn" name="tlpn" placeholder="Your Phone Number"
                                required="required" data-validation-required-message="Please enter your Tlpn" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2  mb-5"></
            </div>
    </div>