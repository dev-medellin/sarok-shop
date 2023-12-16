    <!-- Header Mobile Start -->
    <div class="header-mobile section d-lg-none">
        <!-- Header Mobile top Start -->
        <div class="header-mobile-top header-sticky">
            <div class="container">
                <div class="row row-cols-3 gx-2 align-items-center">
                    <div class="col">
                        <!-- Header Toggle Start -->
                        <div class="header-toggle">
                            <button class="mobile-menu-open" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Toggle End -->
                    </div>
                    <div class="col">
                        <!-- Header Logo Start -->
                        <div class="header-logo text-center">
                            <a href="index.html"><img src="{{url('assets/images/saroks/logo/sarok_logo_2.png')}}" width="154" height="46" alt="Logo" /></a>
                        </div>
                        <!-- Header Logo End -->
                    </div>
                    <div class="col">
                        <!-- Header Action Start -->
                        <div class="header-meta">
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
                            @if(Auth::user())
                                {{-- livewire:pages.cart-count @saved="$refresh" --}}
                                <livewire:pages.cart-count @saved="close">
                            @endif
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Mobile top End -->
    </div>
    <!-- Header Mobile End -->

        <!-- off Canvas Start -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
            <div class="offcanvas-header">
                <!-- Canvas Close bar Start -->
                <div class="canvas-close-bar">
                    <span>Menu</span>
                    <button class="menu-close" data-bs-dismiss="offcanvas">
                        <i class="pe-7s-angle-left"></i>
                    </button>
                </div>
                <!-- Canvas Close bar End -->
            </div>

            <div class="offcanvas-body">
                <!-- Canvas Menu Start -->
                <div class="canvas-menu">
                    <nav>
                        <ul class="nav-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{url('about-us')}}">About Us</a></li>
                            <li><a href="{{url('shop-list')}}">Shop</a></li>
                            <li><a href="{{url('contact-us')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Canvas Menu End -->
            </div>
        </div>
        <!-- off Canvas End -->
