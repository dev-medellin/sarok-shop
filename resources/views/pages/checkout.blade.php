<div>
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Checkout</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Checkout Section Start -->
    <div class="section section-padding">
        <div class="container">
            {{-- <div class="checkout-info">
                <p class="info-header error">
                    <i class="fa fa-exclamation-circle"></i>
                    <strong>Error:</strong> Username is required.
                </p>
            </div> --}}

            {{-- <div class="checkout-info">
                <p class="info-header">
                    <i class="fa fa-exclamation-circle"></i> Returning
                    customer?
                    <a data-bs-toggle="collapse" href="#login">Click here to login</a>
                </p>

                <div class="collapse" id="login">
                    <div class="card-body">
                        <p>
                            If you have shopped with us before, please enter
                            your details in the boxes below. If you are a
                            new customer, please proceed to the Billing &
                            Shipping section.
                        </p>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <input type="email" placeholder="Username or email *" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <input type="password" placeholder="Password" />
                                    </div>
                                </div>
                            </div>

                            <div class="single-form d-flex align-items-center">
                                <button class="btn btn-primary btn-hover-dark">
                                    Login
                                </button>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="remember" />
                                    <label for="remember"><span></span> Remember Me</label>
                                </div>
                            </div>
                            <div class="forget">
                                <a href="#">Lost Your Password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="checkout-info">
                <p class="info-header">
                    <i class="fa fa-exclamation-circle"></i> Have a coupon?
                    <a data-bs-toggle="collapse" href="#coupon">Click here to enter your code</a>
                </p>

                <div class="collapse" id="coupon">
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <input type="email" placeholder="Coupon code" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <button class="btn btn-primary btn-hover-dark">
                                            Coupon
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}

            <form wire:submit.prevent="billingForm(Object.fromEntries(new FormData($event.target)))">
                <div class="row">
                    <div class="col-lg-7">
                        <!-- Checkout Form Start -->
                        <div class="checkout-form">
                            <div class="checkout-title">
                                <h4 class="title">Billing details</h4>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" placeholder="First name *" name="fname" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" placeholder="Last name *" name="lname" required />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <label class="form-label">Street address *</label>
                                        <input type="text" placeholder="House number and street name" name="house_number" required />
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="apartment" />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <input type="text" placeholder="Town / City *" name="town_city" required />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <input type="text" placeholder="Country*" name="country" required />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <input type="text" placeholder="Postcode / ZIP" name="post_code" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" placeholder="Phone *" name="phone_contact" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" placeholder="Email address *" name="email" value="{{Auth::user()->email}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="single-form checkout-note">
                                <label class="form-label">Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery." name="notes"></textarea>
                            </div>
                        </div>
                        <!-- Checkout Form End -->
                    </div>
                    <div class="col-lg-5">
                        <div class="checkout-order">
                            <div class="checkout-title">
                                <h4 class="title">Your Order</h4>
                            </div>

                            <div class="checkout-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="Product-name">
                                                Product
                                            </th>
                                            <th class="Product-price">
                                                Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartCheckout as $checkout)
                                            <tr>
                                                <td class="Product-name">
                                                    <p>
                                                        {{$checkout->product_name}} × {{$checkout->prodQuanty}}
                                                    </p>
                                                </td>
                                                <td class="Product-price">
                                                    <p>$150.00</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Subtotal</p>
                                            </td>
                                            <td class="Product-price">
                                                <p>₱{{number_format($subTotal, 2)}}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Shipping</p>
                                            </td>
                                            <td class="Product-price">
                                                <ul class="shipping-list">
                                                    <li class="radio">
                                                        <input type="radio" name="shipping" id="radio1" wire:click="addShipping(120)" checked />
                                                        <label for="radio1"><span></span>
                                                            Flat Rate + 120.00</label>
                                                    </li>
                                                    <li class="radio">
                                                        <input type="radio" name="shipping" id="radio2" wire:click="addShipping(0)" />
                                                        <label for="radio2"><span></span>
                                                            Free
                                                            Shipping + 0.00</label>
                                                    </li>
                                                    <li class="radio">
                                                        <input type="radio" name="shipping" id="radio3" wire:click="addShipping(60)" />
                                                        <label for="radio3"><span></span>
                                                            Local
                                                            Pickup + 60.00</label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Total</p>
                                            </td>
                                            <td class="total-price">
                                                <p>₱{{number_format($total, 2)}}</p>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="checkout-payment">
                                <h5>Payment Method</h5>
                                @if(session()->has('message'))
                                    <p class="text-danger">{{session('message')}}</p>
                                @endif
                                <ul>
                                    <li>
                                        <div class="single-payment">
                                            <div class="payment-radio radio">
                                                <input type="radio" name="radio" id="bank" value="bank" wire:click.stop="payment_method('bank')" />
                                                <label for="bank"><span></span> Direct
                                                    bank transfer
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-payment">
                                            <div class="payment-radio radio">
                                                <input type="radio" name="radio" id="check" value="ewallet" wire:click.stop="payment_method('ewallet')" />
                                                <label for="check"><span></span>
                                                    E-wallet
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-payment">
                                            <div class="payment-radio radio">
                                                <input type="radio" name="radio" id="cash" value="cash" wire:click.stop="payment_method('cash')" />
                                                <label for="cash"><span></span> Cash on
                                                    Delivery</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="single-form">
                                    <button class="btn btn-primary btn-hover-dark d-block" type="submit">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout Section End -->
</div>
