<section class="vh-100 bg-image" style="background-color: #18c7e1;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Login</h2>
                            <?php echo $this->session->flashdata('failed_message'); ?>
                            <form method="post" action="<?=base_url('Auth/check_login')?>">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                    <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                                    <?php echo form_error('email', '<div class ="text-danger small ml-2 mt-2 mb-2">', '</div>') ?>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                    <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" />
                                    <?php echo form_error('password', '<div class ="text-danger small ml-2 mt-2 mb-2">', '</div>') ?>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary buttonlogin" type="submit">Login</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="<?=base_url('Auth/signup')?>" class="fw-bold text-body" style="color: lightseagreen;">Register here</a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>