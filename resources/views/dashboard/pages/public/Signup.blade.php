<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Log In | @env('APP_NAME')@endenv</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- App css -->
        <link href="{{asset('assets/dashboard/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/dashboard/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

    </head>
    
    <body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="{{asset('assets/official/images/branding/logo.png')}}" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
                                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                                </div>

                                <form action="{{url('register')}}" method="POST">

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <input class="form-control" type="text" id="fullname" placeholder="Enter your name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                        </div>
                                    </div>

                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary" type="submit"> Sign Up </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->


                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - <script>document.write(new Date().getFullYear())</script> © @env('APP_NAME')@endenv
        </footer>

        <!-- bundle -->
        <script src="{{asset('assets/dashboard/assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('assets/dashboard/assets/js/app.min.js')}}"></script>
        
    </body>
</html>
