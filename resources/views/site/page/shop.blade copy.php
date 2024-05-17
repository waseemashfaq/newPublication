@extends('site/site_layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('site/fancy/jquery.fancybox.css')}}">
@endsection
@section('content')

<!-- Home Banner -- Start Here -->
<section class="homeBanner-section-wrapper homeBanner-bg">
    <!-- Home Banner Slider -- Start Here -->
    <div class="swiper multiBannerSlider">
        <div class="swiper-wrapper">
            <!-- Single Home Slide -- Start Here -->
            <div class="swiper-slide">
                <div class="mbs-slide-content-wrapper">
                    <div class="mbs-slide-content-wrapper w-100">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="mbs-slide-content">
                                        <h2 class="mb-3">Shop NOW</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis urna, a eu.</p>
                                        <div class="blur-btn-wrapper position-relative mt-3">
                                            <a href="#" class="blur-btn">Sample ReQUEST <span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                            <span class="blur-effect"></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mbs-slide-img text-center">
                                        <img src="{{ asset('assets/imges/shop/shop-banner.png')}}" class="img-fluid" style="width: 400px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Home Slide -- End's Here -->
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- Home Banner Slider -- End's Here -->
</section>
<!-- Home Banner -- End's Here -->

<!-- Shop Page -- Start Here -->
<section class="shop-section-wrapper padding-tb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="side-bar-wrapper">
                    <div class="navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            offcanvas
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body flex-column">
                                <h3 class="mb-4">Filter & Sort</h3>
                                <div class="side-bar-form">
                                    <form>
                                        <div class="single-sidebar-option">
                                            <h5>Class</h5>
                                            <ul class="mt-3">
                                                @foreach ($allClass as $item)
                                                <li>
                                                    <div class="shop-cb-wrapper radiobtn">
                                                        <input type="radio" id="filterRadio_class{{ $item->ID }}" name="class" class="formRadioInputsBtn">
                                                        <label for="filterRadio_class{{ $item->ID }}" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>{{ $item->Name }}</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>

                                                </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                        {{-- comment subject -------------------------- --}}
                                        {{-- --------------------------------------------- --}}
                                        {{-- <div class="single-sidebar-option mt-4">
                                            <h5>Subject</h5>
                                            <ul class="mt-3">
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox06" class="formRadioInputsBtn">
                                                        <label for="filterChechbox06" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>English</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox07" class="formRadioInputsBtn">
                                                        <label for="filterChechbox07" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Urdu</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox08" class="formRadioInputsBtn">
                                                        <label for="filterChechbox08" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Physics</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox09" class="formRadioInputsBtn">
                                                        <label for="filterChechbox09" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Mathematics</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox10" class="formRadioInputsBtn">
                                                        <label for="filterChechbox10" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Computer Science</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox11" class="formRadioInputsBtn">
                                                        <label for="filterChechbox11" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Pak Study</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox12" class="formRadioInputsBtn">
                                                        <label for="filterChechbox12" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Biology</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox13" class="formRadioInputsBtn">
                                                        <label for="filterChechbox13" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Chemistry</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox14" class="formRadioInputsBtn">
                                                        <label for="filterChechbox14" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Islamiat</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper">
                                                        <input type="checkbox" id="filterChechbox15" class="formRadioInputsBtn">
                                                        <label for="filterChechbox15" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span><i class="fa-solid fa-check"></i></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Tarjama ul Quran</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="single-sidebar-option mt-4">
                                            <h5>Board</h5>
                                            <ul class="mt-3">
                                                @foreach ($allBoard as $item)
                                                <li>
                                                    <div class="shop-cb-wrapper radiobtn">
                                                        <input type="radio" id="filterRadio{{ $item->ID }}" name="boardRadio" class="formRadioInputsBtn">
                                                        <label for="filterRadio{{ $item->ID }}" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>{{ $item->Name }}</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>

                                                </li>
                                                @endforeach
                                                {{-- <li>
                                                    <div class="shop-cb-wrapper radiobtn">
                                                        <input type="radio" id="filterRadio02" name="boardRadio" class="formRadioInputsBtn">
                                                        <label for="filterRadio02" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Federal Board</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper radiobtn">
                                                        <input type="radio" id="filterRadio03" name="boardRadio" class="formRadioInputsBtn">
                                                        <label for="filterRadio03" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>KPK Board</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li> --}}

                                            </ul>
                                        </div>
                                        <div class="single-sidebar-option mt-4">
                                            <h5>Medium</h5>
                                            <ul class="mt-3">
                                                <li>
                                                    <div class="shop-cb-wrapper radiobtn">
                                                        <input type="radio" id="mediumFilterRadio01" name="mediumRadio" class="formRadioInputsBtn">
                                                        <label for="mediumFilterRadio01" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>English Medium</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper radiobtn">
                                                        <input type="radio" id="mediumFilterRadio02" name="mediumRadio" class="formRadioInputsBtn">
                                                        <label for="mediumFilterRadio02" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Urdu Medium</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single-sidebar-option mt-4">
                                            <h5>Price</h5>
                                            <ul class="mt-3">
                                                <li>
                                                    <div class="shop-cb-wrapper radiobtn">
                                                        <input type="radio" id="priceFilterRadio01" name="priceRadio" class="formRadioInputsBtn">
                                                        <label for="priceFilterRadio01" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Any</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cb-wrapper radiobtn">
                                                        <input type="radio" id="priceFilterRadio02" name="priceRadio" class="formRadioInputsBtn">
                                                        <label for="priceFilterRadio02" class="formRadioLabelBtn">
                                                            <div class="shop-cb-content">
                                                                <div class="shop-cb-check">
                                                                    <span></span>
                                                                </div>
                                                                <div class="shop-cb-title ms-3">
                                                                    <span>Range</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="form-submit-btn mt-4">
                                            <button type="button">Submit Filter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @php
                        $counter=1;
                    @endphp
                    @foreach ($allItems as $item)

                    <div class="col-lg-4 mb-4">
                        <div class="single-shopCard-wrapper">
                            <div class="bsb-singleSlide-content-wrapper">
                                <div class="bsb-singleSlide-img position-relative">
                                    <img src="{{$item->Image}}" class="img-fluid">
                                    <div class="bestSeller-actionList-wrapper">
                                        <ul>
                                            <li>
                                                <button type="button"><span><i class="fa-solid fa-basket-shopping"></i></span></button>
                                            </li>
                                            <li>
                                                <button type="button"><span><i class="fa-regular fa-heart"></i></span></button>
                                            </li>
                                            <li>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#bookDetail"><span><i class="fa-solid fa-up-right-and-down-left-from-center"></i></span></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bsb-singleSlide-desc text-center mt-4">
                                    <h3>{{ $item->SubjectName }}</h3>
                                    <label class="d-block">{{ $item->className }}</label>

                                    <p class="shop-price mb-0">{{ $item->PrintedPrice }} PKR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $counter++
                    @endphp
                    @endforeach

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-wrapper mt-4">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Page -- End's Here -->


<!-- Footer -- End's Here -->


<!-- Book Detail Modal -- Start Here -->

<!-- Reponsive Cart - Start Here -->
<button type="button" class="overlay-cart-wrapper" data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas">
    <div class="overlay-cart-content position-relative">
        <span><i class="fa-solid fa-basket-shopping"></i></span>
        <label class="cart-items-number"></label>
    </div>
</button>
<!-- Reponsive Cart - End's Here -->

<!-- Resposnive Shop Cart -- Start Here -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas" aria-labelledby="cartOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="cartOffcanvasLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-0">
        <div class="offcanvas-cart-wrapper">
            <div class="offcanvas-cart-body">
                <div class="offcanvas-cart-list">
                    <ul>
                        <li>
                            <div class="single-cart-item-wrapper d-flex">
                                <div class="single-cart-item-img">
                                    <img src="{{ asset('assets/imges/shop/placeholder1.png')}}" class="img-fluid">
                                </div>
                                <div class="single-cart-item-desc ps-2">
                                    <div class="row gx-0">
                                        <div class="col-10">
                                            <h6 class="cart-item-title">English <span class="ms-2">12th</span></h6>
                                        </div>
                                        <div class="col-2">
                                            <div class="text-end">
                                        <button class="del-item"><span><img src="{{ asset('assets/imges/shop/del.png')}}"></span></button>
                                    </div>
                                        </div>
                                    </div>



                                    <div class="single-cart-price">
                                        <p>4500 <sup>PKR</sup> <span class="item-cut-price">1600 pkr</span></p>
                                    </div>
                                    <div class="product-qty w-100" style="margin-top: 37px;">
                                    <div class="qty-inputs-wrapper d-flex align-items-center justify-content-between">
                                        <div class="qtyminus me-3" onclick="plsMinsSubject()"><i class="fa fa-minus"></i></div>
                                        <h3 class="qty-title mb-0">1</h3>
                                        <div class="qtyplus ms-3"  onclick="plsMinsSubject()"><i class="fa fa-plus"></i></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-cart-item-wrapper d-flex">
                                <div class="single-cart-item-img">
                                    <img src="{{ asset('assets/imges/shop/placeholder2.png')}}" class="img-fluid">
                                </div>
                                <div class="single-cart-item-desc ps-2">
                                    <div class="row gx-0">
                                        <div class="col-10">
                                            <h6 class="cart-item-title">Chemistry <span class="ms-2">12th</span></h6>
                                        </div>
                                        <div class="col-2">
                                            <div class="text-end">
                                        <button class="del-item"><span><img src="{{ asset('assets/imges/shop/del.png')}}"></span></button>
                                    </div>
                                        </div>
                                    </div>



                                    <div class="single-cart-price">
                                        <p>4500 <sup>PKR</sup> <span class="item-cut-price">1600 pkr</span></p>
                                    </div>
                                    <div class="product-qty w-100" style="margin-top: 37px;">
                                    <div class="qty-inputs-wrapper d-flex align-items-center justify-content-between">
                                        <div class="qtyminus me-3" onclick="plsMinsSubject()"><i class="fa fa-minus"></i></div>
                                        <h3 class="qty-title mb-0">1</h3>
                                        <div class="qtyplus ms-3"  onclick="plsMinsSubject()"><i class="fa fa-plus"></i></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-cart-item-wrapper d-flex">
                                <div class="single-cart-item-img">
                                    <img src="{{ asset('assets/imges/shop/placeholder3.png')}}" class="img-fluid">
                                </div>
                                <div class="single-cart-item-desc ps-2">
                                    <div class="row gx-0">
                                        <div class="col-10">
                                            <h6 class="cart-item-title">Biology <span class="ms-2">12th</span></h6>
                                        </div>
                                        <div class="col-2">
                                            <div class="text-end">
                                        <button class="del-item"><span><img src="{{ asset('assets/imges/shop/del.png')}}"></span></button>
                                    </div>
                                        </div>
                                    </div>



                                    <div class="single-cart-price">
                                        <p>4500 <sup>PKR</sup> <span class="item-cut-price">1600 pkr</span></p>
                                    </div>
                                    <div class="product-qty w-100" style="margin-top: 37px;">
                                    <div class="qty-inputs-wrapper d-flex align-items-center justify-content-between">
                                        <div class="qtyminus me-3" onclick="plsMinsSubject()"><i class="fa fa-minus"></i></div>
                                        <h3 class="qty-title mb-0">1</h3>
                                        <div class="qtyplus ms-3"  onclick="plsMinsSubject()"><i class="fa fa-plus"></i></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas-cart-footer">
                <div class="row gx-0">
                    <div class="col-4">
                        <div class="sub-total-title pt-2">
                            <label>Sub total</label>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="sub-total text-end pt-2">
                            <label>20000 <small>PKR</small></label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6">
                        <div class="cart-item-btn">
                            <button type="button">Clear</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cart-item-btn">
                            <button type="button">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Resposnive Shop Cart -- End's Here -->



@include('site/page/book_detail_model')

@endsection
@section('js')
<script src="{{asset('site/fancy/jquery.fancybox.js')}}"></script>
@endsection

