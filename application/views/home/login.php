    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Login</span></h2>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="error-message">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="row px-xl-5">
        <div class="col-lg-3 mb-5"></div>
            <div class="col-lg-6 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="<?php echo site_url('main/aksi_login'); ?>" method="post">
                        <div class="control-group">
                            <input type="text" class="form-control" name="username" placeholder="Your Username"
                                required="required" data-validation-required-message="Please enter your username" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control" name="password" placeholder="Your Password"
                                required="required" data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <div class="col-lg-3 mb-5"></div>
    </div>