<div>
@include('templates.slider-banner');
    <div class="section section-padding">
        <div class="container">
            <!-- Benefit Wrapper Start -->
            <div class="benefit-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Benefit Start -->
                        <div class="single-benefit">
                            <img src="assets/images/icon/icon-1.png" width="70" height="92" alt="Icon" />
                            <h3 class="title">Free Shipping</h3>
                            <p>
                                Get 10% cash back, free shipping, free
                                returns, and more at 1000+ top retailers!
                            </p>
                        </div>
                        <!-- Single Benefit End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Benefit Start -->
                        <div class="single-benefit">
                            <img src="assets/images/icon/icon-2.png" width="70" height="92" alt="Icon" />
                            <h3 class="title">Safe Payment</h3>
                            <p>
                                Get 10% cash back, free shipping, free
                                returns, and more at 1000+ top retailers!
                            </p>
                        </div>
                        <!-- Single Benefit End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Benefit Start -->
                        <div class="single-benefit">
                            <img src="assets/images/icon/icon-3.png" width="70" height="92" alt="Icon" />
                            <h3 class="title">Online Support</h3>
                            <p>
                                Get 10% cash back, free shipping, free
                                returns, and more at 1000+ top retailers!
                            </p>
                        </div>
                        <!-- Single Benefit End -->
                    </div>
                </div>
            </div>
            <!-- Benefit Wrapper End -->
        </div>
    </div>
    <!-- Sale Product Section Start -->
    <div class="section section-padding bg-color-01">
        <div class="container">
            <!-- Product Wrapper Start -->
            <div class="product-active-02">
                <!-- Product Top Wrapper Start -->
                <div class="product-top-wrapper">
                    <!-- Section Title Start -->
                    <div class="section-title order-md-1">
                        <h2 class="title">#Sarok Products</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Swiper Arrows End -->
                    <div class="swiper-arrows order-md-3">
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev">
                            <i class="pe-7s-angle-left"></i>
                        </div>
                        <div class="swiper-button-next">
                            <i class="pe-7s-angle-right"></i>
                        </div>
                    </div>
                    <!-- Swiper Arrows End -->
                </div>
                <!-- Product Top Wrapper End -->

                <!-- Product Tabs Content Start -->
                <div class="product-tabs-content">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab7">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($testDatas as $product)
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{url('product/'.$product->id)}}"><img src="{{asset('assets/images/saroks/'.$product->product_img.'.jpg')}}" style="height: 200px" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{url('product/'.$product->id)}}">{{$product->product_name}}</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                                >₱{{number_format($product->product_price, 2)}}</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" href="{{url('product/'.$product->id)}}"><i
                                                                    class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Tabs Content End -->
            </div>
            <!-- Product Wrapper End -->
        </div>
    </div>
    <!-- Sale Product Section End -->
    <!-- Quick View Start -->
    <div class="modal fade" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Quick View Images Start -->
                            <div class="quick-view-images">
                                <!-- Quick Gallery Images Start -->
                                <div class="quick-gallery-images">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src="assets/images/product-details/product-details-1.jpg" alt="Product Image" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src="assets/images/product-details/product-details-2.jpg" alt="Product Image" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src="assets/images/product-details/product-details-3.jpg" alt="Product Image" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src="assets/images/product-details/product-details-4.jpg" alt="Product Image" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src="assets/images/product-details/product-details-5.jpg" alt="Product Image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quick Gallery Images End -->

                                <!-- Quick Gallery Thumbs Start -->
                                <div class="quick-gallery-thumbs">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="assets/images/product-details/product-details-1.jpg" alt="Product Thumbnail" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/product-details/product-details-2.jpg" alt="Product Thumbnail" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/product-details/product-details-3.jpg" alt="Product Thumbnail" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/product-details/product-details-4.jpg" alt="Product Thumbnail" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/product-details/product-details-5.jpg" alt="Product Thumbnail" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <div class="swiper-button-next">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                </div>
                                <!-- Quick Gallery Thumbs End -->
                            </div>
                            <!-- Quick View Images End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Quick View Description Start -->
                            <div class="quick-view-description">
                                <h4 class="product-name">
                                    Your Products Name Here.
                                </h4>
                                <div class="price">
                                    <span class="sale-price">$240.00</span>
                                    <span class="old-price">$290.00</span>
                                </div>
                                <div class="review-wrapper">
                                    <div class="review-star">
                                        <div class="star" style="width: 80%"></div>
                                    </div>
                                    <p>( 1 Customer Review )</p>
                                </div>
                                <div class="product-color">
                                    <span class="lable">Color:</span>
                                    <ul>
                                        <li>
                                            <input type="radio" name="colors" id="quick-color1" />
                                            <label for="quick-color1"><span class="color-blue"></span></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" id="quick-color2" />
                                            <label for="quick-color2"><span class="color-gray"></span></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" id="quick-color3" />
                                            <label for="quick-color3"><span
                                                class="color-dark-blue"
                                            ></span></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" id="quick-color4" />
                                            <label for="quick-color4"><span
                                                class="color-gray-dark"
                                            ></span></label>
                                        </li>
                                    </ul>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectet
                                    adipisicing elit, sed do eiusmod temporf
                                    incididunt ut labore et dolore magna aliqua. Ut
                                    enim ad minim veniam, quis tyu nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate.
                                </p>

                                <div class="product-meta">
                                    <div class="product-quantity d-inline-flex">
                                        <button type="button" class="sub">-</button>
                                        <input type="text" value="1" />
                                        <button type="button" class="add">+</button>
                                    </div>
                                    <div class="meta-action">
                                        <button class="btn btn-dark btn-hover-primary">
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="meta-action">
                                        <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="meta-action">
                                        <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>

                                <div class="product-info">
                                    <div class="single-info">
                                        <span class="lable">SKU:</span>
                                        <span class="value">Ch-256xl</span>
                                    </div>
                                    <div class="single-info">
                                        <span class="lable">Categories:</span>
                                        <span class="value"
                                        ><a href="#">Office,</a>
                                        <a href="#">Home</a></span>
                                    </div>
                                    <div class="single-info">
                                        <span class="lable">tag:</span>
                                        <span class="value"
                                        ><a href="#">Furniture</a></span>
                                    </div>
                                    <div class="single-info">
                                        <span class="lable">Share:</span>
                                        <ul class="social">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i
                                                    class="fa fa-pinterest-p"
                                                ></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Quick View Description End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View End -->
</div>
