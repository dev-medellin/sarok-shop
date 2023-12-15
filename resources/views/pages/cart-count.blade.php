<div>
    <div class="dropdown">
        <a class="action" href="#" role="button" data-bs-toggle="dropdown">
            <i class="pe-7s-shopbag"></i>
            <span class="number">{{$cartCount}}</span>
        </a>

        <div class="dropdown-menu dropdown-cart">
            <div class="cart-content" id="cart-content">
                <ul>
                    @foreach($cartInfo as $info)
                        <li>
                            <!-- Single Cart Item Start -->
                            <div class="single-cart-item">
                                <div class="cart-thumb">
                                    <img src="{{url('assets/images/saroks/'.$info['product_img'].'.jpg')}}" width="98" height="98" alt="Cart" />
                                    <span class="product-quantity"
                                    >x{{$info['prodQuanty']}}</span>
                                </div>
                                <div class="cart-item-content">
                                    <h6 class="product-name">
                                        <a href="product-details.html">{{$info['product_name']}}</a>
                                    </h6>
                                    <span class="product-price"
                                    >₱{{$info['product_price']}}.00</span>
                                    <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                </div>
                            </div>
                            <!-- Single Cart Item End -->
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="cart-price">
                {{-- <div class="cart-subtotals">
                    <div class="price-inline">
                        <span class="label">Subtotal</span>
                        <span class="value">$42.70</span>
                    </div>
                    <div class="price-inline">
                        <span class="label">Shipping</span>
                        <span class="value">$7.00</span>
                    </div>
                    <div class="price-inline">
                        <span class="label">Taxes</span>
                        <span class="value">$0.00</span>
                    </div>
                </div> --}}
                <div class="cart-total">
                    <div class="price-inline">
                        <span class="label">Total</span>
                        <span class="value">₱{{number_format($total, 2)}}</span>
                    </div>
                </div>
            </div>
            <div class="checkout-btn">
                <a href="checkout.html" class="btn btn-dark btn-hover-primary d-block">Checkout</a>
            </div>
        </div>
    </div>
</div>