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
                      <h2 class="mb-3">Past Paper</h2>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Sed eu feugiat amet, libero ipsum enim pharetra
                        hac. Urna commodo, lacus ut magna velit eleifend.
                        Amet, quis urna, a eu.
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mbs-slide-img text-center">
                      <img
                        src="{{ asset('assets/imges/blog/blog.png') }}"
                        class="img-fluid"
                        style="width: 600px"
                      />
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

  <!-- PAST PAPER -- Start Here -->
  <section
    class="pp-section-wrapper padding-tb-80"
    data-aos="fade-up"
    data-aos-easing="linear"
    data-aos-duration="1000"
  >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="row justify-content-center">
            <div class="col-lg-4 mb-4">
              <div
                class="single-pp-wrapper position-relative"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1000"
              >
                <div class="single-pp-content text-center">
                  <img src="{{ asset('assets/imges/pp/pdf.png') }}" />
                  <label class="d-block mt-3">Past Paper Biology 9th</label>
                </div>
                <div class="download-overley">
                  <a href="#"><img src="{{ asset('assets/imges/pp/download.png') }}" /></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div
                class="single-pp-wrapper position-relative"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1000"
              >
                <div class="single-pp-content text-center">
                  <img src="{{ asset('assets/imges/pp/pdf.png') }}" />
                  <label class="d-block mt-3">Past Paper Biology 9th</label>
                </div>
                <div class="download-overley">
                  <a href="#"><img src="{{ asset('assets/imges/pp/download.png') }}" /></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div
                class="single-pp-wrapper position-relative"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1000"
              >
                <div class="single-pp-content text-center">
                  <img src="{{ asset('assets/imges/pp/pdf.png') }}" />
                  <label class="d-block mt-3">Past Paper Biology 9th</label>
                </div>
                <div class="download-overley">
                  <a href="#"><img src="{{ asset('assets/imges/pp/download.png') }}" /></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div
                class="single-pp-wrapper position-relative"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1000"
              >
                <div class="single-pp-content text-center">
                  <img src="{{ asset('assets/imges/pp/pdf.png') }}" />
                  <label class="d-block mt-3">Past Paper Biology 9th</label>
                </div>
                <div class="download-overley">
                  <a href="#"><img src="{{ asset('assets/imges/pp/download.png') }}" /></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div
                class="single-pp-wrapper position-relative"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1000"
              >
                <div class="single-pp-content text-center">
                  <img src="{{ asset('assets/imges/pp/pdf.png') }}" />
                  <label class="d-block mt-3">Past Paper Biology 9th</label>
                </div>
                <div class="download-overley">
                  <a href="#"><img src="{{ asset('assets/imges/pp/download.png') }}" /></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div
                class="single-pp-wrapper position-relative"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1000"
              >
                <div class="single-pp-content text-center">
                  <img src="{{ asset('assets/imges/pp/pdf.png') }}" />
                  <label class="d-block mt-3">Past Paper Biology 9th</label>
                </div>
                <div class="download-overley">
                  <a href="#"><img src="{{ asset('assets/imges/pp/download.png') }}" /></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div
                class="single-pp-wrapper position-relative"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1000"
              >
                <div class="single-pp-content text-center">
                  <img src="{{ asset('assets/imges/pp/pdf.png') }}" />
                  <label class="d-block mt-3">Past Paper Biology 9th</label>
                </div>
                <div class="download-overley">
                  <a href="#"><img src="{{ asset('assets/imges/pp/download.png') }}" /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PAST PAPER -- End's Here -->


@endsection

@section('js')
@endsection

