<div>
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Cart</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Cart</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Shopping Cart Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="cart-wrapper">
                <!-- Cart Wrapper Start -->
                <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumb">Image</th>
                                <th class="product-info">
                                    product Information
                                </th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total-price">
                                    Total Price
                                </th>
                                <th class="product-action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartInfo as $info)
                                <tr>
                                    <td class="product-thumb">
                                        <img src="assets/images/product/product-03.jpg" alt="" />
                                    </td>
                                    <td class="product-info">
                                        <h6 class="name">
                                            <a href="product-details.html">{{$info->product_name}}</a>
                                        </h6>
                                        <div class="product-prices">
                                            <span class="sale-price"
                                                    >₱{{number_format($info->product_price,2)}}</span>
                                        </div>
                                    </td>
                                    <td class="quantity">
                                        <div class="product-quantity d-inline-flex">
                                            <button type="button" class="sub"
                                            wire:click="decrementQty({{$info->shopId}})"
                                            >
                                                -
                                            </button>
                                            <input type="text" value="{{$info->prodQuanty}}" />
                                            <button type="button" class="add"
                                            wire:click="incrementQty({{$info->shopId}})">
                                                +
                                            </button>
                                        </div>
                                    </td>
                                    <td class="product-total-price">
                                        <span class="price">₱{{number_format(($info->productPrice * $info->prodQuanty), 2)}}</span>
                                    </td>
                                    <td class="product-action">
                                        <button class="remove">
                                            <i class="pe-7s-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Cart Wrapper End -->
                <!-- Cart btn Start -->
                <div class="cart-btn">
                    <div class="left-btn">
                        <a href="/shop-list" class="btn btn-dark btn-hover-primary">Continue Shopping</a>
                    </div>
                    <div class="right-btn">
                        <a href="{{url('checkout')}}" class="btn btn-dark btn-hover-primary btn-block">Proceed To Checkout</a>
                    </div>
                </div>
                <!-- Cart btn Start -->
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <!-- Cart Shipping Start -->
                    <div class="cart-shipping">

                    </div>
                    <!-- Cart Shipping End -->
                </div>
                <div class="col-lg-4">
                    <!-- Cart Shipping Start -->
                    <div class="cart-shipping">

                    </div>
                    <!-- Cart Shipping End -->
                </div>
                {{-- <div class="col-lg-4">
                    <!-- Cart Totals Start -->
                    <div class="cart-totals">
                        <div class="cart-title">
                            <h4 class="title">Cart totals</h4>
                        </div>
                        <div class="cart-total-table">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="value">Subtotal</p>
                                        </td>
                                        <td>
                                            <p class="price"><p>₱{{number_format($subTotal, 2)}}</p></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="value">Shipping</p>
                                        </td>
                                        <td>
                                            <ul class="shipping-list">
                                                <li class="radio">
                                                    <input type="radio" name="shipping" id="radio1" wire:click="addShipping(120)" />
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
                                        <td>
                                            <p class="value">Total</p>
                                        </td>
                                        <td>
                                            <p>₱{{number_format($total, 2)}}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-total-btn">
                            <a href="#" class="btn btn-dark btn-hover-primary btn-block">Proceed To Checkout</a>
                        </div>
                    </div>
                    <!-- Cart Totals End -->
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Shopping Cart Section End -->
</div>
