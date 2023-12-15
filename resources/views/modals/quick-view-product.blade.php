@if(isset($productDetails)))
    <div wire:ignore.self class="modal fade" id="quickViewProduct" data-backdrop="static" data-keyboard="false">
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
                                                    <img src="{{url('assets/images/saroks/'.$productDetails->product_img.'.jpg')}}" style="height:500px !important" alt="Product Image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quick Gallery Images End -->
                            </div>
                            <!-- Quick View Images End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Quick View Description Start -->
                            <div class="quick-view-description">
                                <h4 class="product-name">
                                   {{$productDetails->product_name}} {{$teest}}
                                </h4>
                                <div class="price">
                                    <span class="sale-price">₱{{$productDetails->product_price}}.00</span>
                                    {{-- <span class="old-price">$290.00</span> --}}
                                </div>
                                <div class="review-wrapper">
                                    <p>Stocks : ( {{$productDetails->product_quantity}} )</p>
                                </div>
                                {{-- <div class="product-color">
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
                                </div> --}}

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
                            <!-- Quick View Description End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
