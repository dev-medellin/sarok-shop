<div>
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url({{url('assets/images/page-banner.jpg')}})">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Product Details</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Product Details</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Product Details Section Start -->
    <div class="section section-padding-02">
        <div class="container">
            <!-- Product Section Wrapper Start -->
            <div class="product-section-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Product Details Images Start -->
                        <div class="product-details-images">
                            <!-- Details Gallery Images Start -->
                            <div class="details-gallery-images" id="img-container">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide single-img zoom">
                                            <img src="{{url('assets/images/saroks/'.$productDetails->product_img.'.jpg')}}" style="height:500px !important" alt="Product Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Details Gallery Images End -->
                        </div>
                        <!-- Product Details Images End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Product Details Description Start -->
                        <div class="product-details-description">
                            <h4 class="product-name">
                                {{$productDetails->product_name}}
                            </h4>
                            <div class="price">
                                <span class="sale-price">₱{{$productDetails->product_price}}.00</span>
                                {{-- <span class="old-price">$290.00</span> --}}
                            </div>
                            <div class="review-wrapper">
                                <p>Stocks : ( {{$productDetails->product_quantity}} )</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectet
                                adipisicing elit, sed do eiusmod temporf
                                incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis tyu nostrud
                                exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate.
                            </p>

                            <div class="product-meta">
                                    <div class="product-quantity d-inline-flex">
                                        <button type="button" wire:click="decrement({{$productDetails->product_quantity}})" class="sub">-</button>
                                        <input type="text" value="{{$quantityCount}}" />
                                        <button type="button" wire:click="increment({{$productDetails->product_quantity}})" class="add">+</button>
                                    </div>
                                    <div class="meta-action">
                                        <button class="btn btn-dark btn-hover-primary"
                                        wire:click.prevent='goToAddCart({{$productDetails->id}})'>
                                            Add To Cart
                                        </button>
                                    </div>
                            </div>
                        </div>
                        <!-- Product Details Description End -->
                    </div>
                </div>
            </div>
            <!-- Product Section Wrapper End -->
        </div>
    </div>
    <!-- Product Details Section End -->
    <!-- Product Details tab Section Start -->
    <div class="section section-padding-02">
        <div class="container">
            <!-- Product Details Tabs Start -->
            <div class="product-details-tabs">
                <ul class="nav justify-content-center">
                    <li>
                        <button data-bs-toggle="tab" class="active" data-bs-target="#information">
                            Information
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade showe active" id="information">
                        <!-- Information Content Start -->
                        <div class="information-content">
                            <h4 class="title">Information</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectet
                                adipisicing elit, sed do eiusmod temporf
                                incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis tyu nostrud
                                exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate.
                            </p>
                        </div>
                        <!-- Information Content End -->
                    </div>
                </div>
            </div>
            <!-- Product Details Tabs End -->
        </div>
    </div>
    <!-- Product Details tab Section End -->
</div>
