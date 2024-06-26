@extends('frontend.website')
@section('content')
<!-- ============================ Page Title Start================================== -->
<div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h2 class="ipt-title">Create An Account</h2>
                <span class="ipn-subtitle">Create an account or signin</span>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Login Form Start ================================== -->
<section class="gray-simple">
    <div class="container">
        <!-- row Start -->
        <div class="row justify-content-center">

            <!-- Single blog Grid -->
            <div class="col-xl-6 col-lg-8 col-md-12">
                <div class="vesh-detail-bloc">
                    <div class="vesh-detail-bloc-body pt-3">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="signin-tab" data-bs-toggle="pill"
                                    data-bs-target="#signin" type="button" role="tab" aria-controls="signin"
                                    aria-selected="true">Sign In</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="register-tab" data-bs-toggle="pill"
                                    data-bs-target="#register" type="button" role="tab" aria-controls="register"
                                    aria-selected="false" tabindex="-1">Register</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                aria-labelledby="signin-tab" tabindex="0">
                                <div class="row gx-3 gy-4">
                                    <div class="modal-login-form">
                                        <form>

                                            <div class="form-floating mb-4">
                                                <input type="email" class="form-control"
                                                    placeholder="name@example.com">
                                                <label>User Name</label>
                                            </div>

                                            <div class="form-floating mb-4">
                                                <input type="password" class="form-control" placeholder="Password">
                                                <label>Password</label>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit"
                                                    class="btn btn-primary full-width font--bold btn-lg">Log In</button>
                                            </div>

                                            <div class="modal-flex-item mb-3">
                                                <div class="modal-flex-first">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="savepassword1" value="option1">
                                                        <label class="form-check-label" for="savepassword1">Save
                                                            Password</label>
                                                    </div>
                                                </div>
                                                <div class="modal-flex-last">
                                                    <a href="JavaScript:Void(0);">Forget Password?</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="social-login">
                                        <ul>
                                            <li><a href="JavaScript:Void(0);" class="btn connect-fb"><i
                                                        class="fa-brands fa-facebook"></i>Facebook</a></li>
                                            <li><a href="JavaScript:Void(0);" class="btn connect-google"><i
                                                        class="fa-brands fa-google"></i>Google+</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab"
                                tabindex="0">
                                <div class="row gx-3 gy-4">
                                    <div class="modal-login-form">
                                        <form>

                                            <div class="form-floating mb-4">
                                                <input type="email" class="form-control" placeholder="Your Name">
                                                <label>Full Name</label>
                                            </div>
                                            <div class="form-floating mb-4">
                                                <input type="email" class="form-control"
                                                    placeholder="name@example.com">
                                                <label>Email</label>
                                            </div>
                                            <div class="form-floating mb-4">
                                                <input type="email" class="form-control" placeholder="example123">
                                                <label>User ID</label>
                                            </div>
                                            <div class="form-floating mb-4">
                                                <input type="password" class="form-control" placeholder="Password">
                                                <label>Password</label>
                                            </div>
                                            <div class="form-floating mb-4">
                                                <input type="password" class="form-control" placeholder="Password">
                                                <label>Confirm Password</label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit"
                                                    class="btn btn-primary full-width font--bold btn-lg">Create An
                                                    Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
</section>
<!-- ============================ Login Form End ================================== -->
@endsection

