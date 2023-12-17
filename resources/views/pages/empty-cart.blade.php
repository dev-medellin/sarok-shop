<div>
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url({{asset('assets/images/page-banner.jpg')}})">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Empty Cart</h2>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Shopping Cart Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="cart-wrapper">
                <!-- empty cart Start -->
                <div class="empty-cart text-center">
                    <h2 class="empty-cart-title">
                        There are no more items in your cart
                    </h2>
                    <div class="empty-cart-img">
                        <img src="{{asset('assets/images/cart.png')}}" alt="Cart" />
                    </div>
                    <p>Your cart is currently empty!</p>
                    <a href="{{url('shop-list')}}" class="btn btn-primary btn-hover-dark"><i class="fa fa-angle-left"></i> Continue
                        browsing</a>
                </div>
                <!-- empty cart End -->
            </div>
        </div>
    </div>
    <!-- Shopping Cart Section End -->
</div>
