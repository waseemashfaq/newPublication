@extends('site/site_layout.index')
@section('css')
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
                                        <h2 class="mb-3">Research & Development</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis urna, a eu.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mbs-slide-img text-center">
                                        <img src="assets/imges/blog/blog.png" class="img-fluid" style="width: 600px;">
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

<!-- R&D -- Start Here -->
<section class="research-development-section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rnd-img">
                    <img src="assets/imges/rnd/rnd.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="rnd-para">
                    <p class="mb-0">R&D is the flagship department of the Unique Publications. R&D Departments are Backbone of The Unique Group of Institutions.The predominant department was founded to bring about a marked change in the ongoing system and make it distinguishable from other departments.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="rnd-para">
                    <p class="mb-0">Teachers’ Training and workshops are the high motives of R & D, including Teachers’ training and workshops based on TNAs (Training Need Assessments/Analysis).</p>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="rnd-para">
                    <p class="mb-0">Its vision is to co-generate ideas on multifarious challenges with a community of researchers, authors, practitioners, and skilled experts to bring about transformative change in order to meet the ever-increasing demands for a credible education system.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- R&D -- End's Here -->


@endsection
@section('js')
@endsection

