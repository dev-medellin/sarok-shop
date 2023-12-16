<div>
     <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Shop Page</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shop Page</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Shop Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Product Section Wrapper Start -->
            <div class="product-section-wrapper">
                <!-- Shop top Bar Start -->
                <div class="shop-top-bar">
                    <div class="shop-text">
                        <p>
                            {{-- <span>12</span> Product Found of <span>30</span> --}}
                        </p>
                    </div>
                </div>
                <!-- Shop top Bar End -->

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="grid">
                        <!-- Shop Product Wrapper Start -->
                        <div class="shop-product-wrapper">
                            <div class="row">
                            @foreach($listData['product'] as $product)
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{url('product/'.$product['id'])}}"><img src="{{url('assets/images/saroks/'.$product['product_img'].'.jpg')}}" style="height:250px !important" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{url('product/'.$product['id'])}}">{{$product['product_name']}}</a>
                                            </h4>
                                            <div class="price">
                                                <span class="sale-price"
                                                        >₱{{number_format($product['product_price'], 2)}}</span>
                                            </div>
                                        </div>
                                        <ul class="product-meta">
                                            <li>
                                                <a class="action" href="{{url('product/'.$product['id'])}}">
                                                <i class="pe-7s-shopbag"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <!-- Shop Product Wrapper End -->
                    </div>
                </div>

                <!-- Page pagination Start -->
                {{-- <div class="page-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div> --}}
                <!-- Page pagination End -->
            </div>
            <!-- Product Section Wrapper End -->
        </div>
    </div>
    <!-- Shop Section End -->
    {{-- <livewire:modals.quick-view-product> --}}
    @include('modals.quick-view-product')
</div>
