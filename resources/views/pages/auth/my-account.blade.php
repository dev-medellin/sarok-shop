<div>
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">My Account</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">My Account</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- My Account Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-md-4">
                    <!-- My Account Menu Start -->
                    <div class="my-account-menu">
                        <ul class="nav account-menu-list flex-column">
                            <li>
                                <a class="active" data-bs-toggle="pill" href="#pills-order"><i class="fa fa-shopping-cart"></i>
                                    Order</a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" href="#pills-account"><i class="fa fa-user"></i> Account
                                    Details</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="fa fa-sign-out"></i>
                                    Logout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- My Account Menu End -->
                </div>
                <div class="col-xl-9 col-md-8">
                    <!-- Tab content start -->
                    <div class="tab-content my-account-tab">
                        <div class="tab-pane fade show active" id="pills-order">
                            <div class="my-account-order account-wrapper">
                                <h4 class="account-title">Track Order Here</h4>
                                <div class="single-form">
                                    <input type="text" placeholder="Enter Tracker ID here ....." wire:model="track_id" wire:keydown="trackID" />
                                </div>
                                @if (session()->has('error_message'))
                                        <span class="text-danger">{{ session('error_message') }}</span>
                                @endif
                                @if($getInfoTrack != null && !session()->has('error_message'))
                                    <div class="account-table text-center table-responsive">
                                        <span>Status : For Shipping</span>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="no">Order</th>
                                                    <th class="name">Product Name</th>
                                                    <th class="name">Quantity</th>
                                                    <th class="name">Price</th>
                                                    <th class="date">Date</th>
                                                    <th class="total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($getInfoTrack as $key => $value )
                                                <?php $explode_id = json_decode($value['cart_details'], true);?>
                                                    @foreach ($explode_id as $test => $testing )
                                                        <tr>
                                                            <td> {{$testing['id']}}</td>
                                                            <td> {{$testing['productName']}}</td>
                                                            <td>{{$testing['productQuantity']}}</td>
                                                            <td>{{$testing['productPrice']}}</td>
                                                            <td>{{date('F d, Y'), strtotime($testing['productPrice'])}}</td>
                                                            <td>{{($testing['productQuantity'] * $testing['productPrice'])}}</td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-account">
                            <div class="my-account-details account-wrapper">
                                <h4 class="account-title">
                                    Account Details
                                </h4>

                                <div class="account-details">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="text" placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="text" placeholder="Last Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <input type="text" placeholder="Display Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <input type="text" placeholder="Email address" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <h5 class="title">
                                                    Password change
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <input type="password" placeholder="Current Password" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="password" placeholder="New Password" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="password" placeholder="Confirm Password" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <button class="btn btn-primary btn-hover-dark">
                                                    Save Change
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- My Account Section End -->
</div>
