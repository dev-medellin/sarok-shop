    <!-- Header Start  -->
    <div class="header-area header-sticky d-none d-lg-block">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="index.html"><img src="{{url('assets/images/saroks/logo/sarok_logo.png')}}" 
                        alt="Logo" style="height: 120px;width: 110px;"/></a>
                    </div>
                    <!-- Header Logo End -->
                </div>
                <div class="col-lg-6">
                    <div class="header-menu">
                        <ul class="nav-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{url('about-us')}}">About Us</a></li>
                            <li><a href="{{url('shop-list')}}">Shop</a></li>
                            <li><a href="{{url('contact-us')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- Header Meta Start -->
                    <div class="header-meta">
                        @if(Auth::user())
                            {{-- livewire:pages.cart-count @saved="$refresh" --}}
                            <livewire:pages.cart-count @saved="close">
                        @endif
                        @if(Auth::user())
                            <div class="dropdown">
                                <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>
                                <ul class="dropdown-menu dropdown-profile">
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="{{url('/logout')}}">Logout</a></li>
                                </ul>
                            </div>
                        @else
                            <a href="{{url('login')}}">Login</a> |
                            <a href="{{url('register')}}">Register</a>
                         @endif
                        {{-- <a class="action" href="wishlist.html"><i class="pe-7s-like"></i></a>--}}
                    </div>
                    <!-- Header Meta End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->