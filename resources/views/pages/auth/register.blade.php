<div>
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Register</h2>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Register Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        <h4 class="title">Create New Account</h4>
                        <p>
                            Already have an account?
                            <a href="login.html">Log in instead!</a>
                        </p>
                        @if (session()->has('message'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form wire:submit.prevent="submitRegister">
                            <div class="single-form">
                                <input type="text" placeholder="First Name" autocomplete="false" name="fname" wire:model="fname"/>
                                @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="single-form">
                                <input type="text" placeholder="Last Name" autocomplete="false" name="lname" wire:model="lname"/>
                                @error('lname') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="single-form">
                                <input type="text" placeholder="Email Address *" autocomplete="false" name="email" wire:model="email" />
                                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="single-form">
                                <input type="password" placeholder="Password" autocomplete="false" name="password" wire:model="password" />
                                @error('password') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="single-form">
                                <input type="checkbox" id="receive"  />
                                <label for="receive">
                                    <span></span> Receive Offers and Announcements From Our
                                    Shop!</label>
                            </div>
                            <div class="single-form">
                                <button class="btn btn-primary btn-hover-dark">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Register Section End -->
</div>
