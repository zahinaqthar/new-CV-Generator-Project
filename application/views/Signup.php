<section class="vh-100 bg-image" style="background-color: #18c7e1;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                            <form method="post" action="<?= base_url('Auth/signup') ?>">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                    <input type="text" id="form3Example1cg" name="username" class="form-control form-control-lg" />
                                    <?php echo form_error('username', '<div class ="text-danger small ml-2 mt-2 mb-2">', '</div>') ?>
                                </div>
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

                                <div class="form-check d-flex mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in <a href="termsandpolicy.html" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary buttonregist">Register</button>
                                </div>

                                <div class="containerregist">
                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="<?= base_url('Auth/login') ?>" class="fw-bold text-body">Login here</a></p>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>