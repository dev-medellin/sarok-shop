<div>
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Login</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Login Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <h4 class="title">Login to Your Account</h4>
                        <form wire:submit.prevent="login">
                            <div class="single-form">
                                <input type="text" placeholder="Username or email *" name="email" wire:model="email" />
                            </div>
                            <div class="single-form">
                                <input type="password" placeholder="Password" name="password" wire:model="password" />
                            </div>
                            <div class="single-form">
                                <button class="btn btn-primary btn-hover-dark">
                                    Login
                                </button>
                            </div>
                        </form>
                        <p><a href="#">Lost your password?</a></p>
                        <p>
                            No account?
                            <a href="register.html">Create one here.</a>
                        </p>
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->
</div>
