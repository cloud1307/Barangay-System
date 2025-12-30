<body class="d-flex flex-column min-vh-100">
    <div class="page-content login-cover">
        <div class="content-wrapper">
            <div class="content-inner">

                <div class="content d-flex justify-content-center align-items-center">
                    <!-- Login form -->
                    <form class="login-form" id="login-form" method="POST">
                        <div class="card mb-0" style="background: rgba(255, 255, 255, 0.4);border-radius: 8px;-webkit-backdrop-filter: blur(8px) saturate(168%); backdrop-filter: blur(8px) saturate(168%);">
                            <div class="card-body">
                                <div class="container-fluid d-flex justify-content-center align-items-center mb-3">
                                    <div class="d-inline-block me-3">
                                        <img src="/public/assets/images/kaybagalsouth.png" style="height: 80px;" />
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <p class="mb-0 fw-bold text-propercase">Barangay Management Information System</p>
                                        <!-- <h5 class="mb-0 text-uppercase text-tup">KAYBAGAL SOUTH</h5> -->
                                    </div>
                                </div>

                                <hr>

                                <div class="text-center mb-3">
                                    <h5 class="mb-0">Login to your account</h5>
                                    <span class="d-block">Enter your credentials below</span>
                                </div>

                                <div class="mb-3">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="ph-user"></i>
                                        </div>
                                        <input type="text" class="form-control" name="user_username" id="user_username" placeholder="example@tagaytay.gov.ph" style="background: rgba(255, 255, 255, 0.5);" required>
                                    </div>
                                </div>

                                <div class="mb-1">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="ph-lock"></i>
                                        </div>
                                        <input type="password" class="form-control" name="user_password" id="user_password" placeholder="******" style="background: rgba(255, 255, 255, 0.5);" required>
                                        <div class="input-group-text">
                                            <i class="ph-eye-slash" id="showPassword"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" class="ms-auto">Forgot password?</a>
                                </div>

                                <div class="mb-3">
                                    <div class="row mb-3">
                                        
                                            <button type="submit" class="btn btn-primary w-100 shadow-lg">LOG IN</button>
                                     
                                        <!-- <div class="col-12 col-md-6">
                                            <button type="button" class="btn btn-primary w-100 shadow-lg" data-bs-toggle="modal" data-bs-target="#signUpModal">SIGN UP</button>
                                        </div> -->
                                        <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /login form -->
                </div>
            </div>
        </div>
    </div>
    <?php include('modals.php'); ?>
    <script src="/public/assets/js/login.js"></script>
</body>

</html>