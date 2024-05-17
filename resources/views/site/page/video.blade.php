@extends('site/site_layout.index')
@section('css')
 <!-- Include this in your blade layout -->
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
                      <h2 class="mb-3">Video Catalog</h2>
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
                        src="assets/imges/blog/blog.png"
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

  <!-- VIDEOS -- Start Here -->
  <section class="video-section-wrapper padding-tb-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="video-tabsnavbar-wrapper">
            <ul
              class="nav nav-pills mb-3 justify-content-center"
              id="pills-tab"
              role="tablist"
            >
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active me-2"
                  id="pills-author-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-author"
                  type="button"
                  role="tab"
                  aria-controls="pills-author"
                  aria-selected="true"
                >
                  Author
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link me-2"
                  id="pills-sstories-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-sstories"
                  type="button"
                  role="tab"
                  aria-controls="pills-sstories"
                  aria-selected="false"
                >
                  Success Stories
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link me-2"
                  id="pills-feedback-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-feedback"
                  type="button"
                  role="tab"
                  aria-controls="pills-feedback"
                  aria-selected="false"
                >
                  School Feedback
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link me-2"
                  id="pills-review-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-review"
                  type="button"
                  role="tab"
                  aria-controls="pills-review"
                  aria-selected="false"
                >
                  Student Reviews
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link me-2"
                  id="pills-lecture-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-lecture"
                  type="button"
                  role="tab"
                  aria-controls="pills-lecture"
                  aria-selected="false"
                >
                  Teacher Lecture
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12">
          <div class="video-tabs-content-wrapper">
            <div class="tab-content" id="pills-tabContent">

                {{-- ------------------------------------------------------ --}}
              {{--  auther videos start here  --}}

              {{-- AUTHERT video start here  --}}
              {{-- ----------------------------------------------------------- --}}
                <div
                    class="tab-pane fade show active"
                    id="pills-author"
                    role="tabpanel"
                    aria-labelledby="pills-author-tab"
                    tabindex="0">


                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/mtD-eJsCO4M"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Prof. Nouman Mudasir</h4>
                                <p>Head of Department Urdu</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/vYVUEGsv-4M"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Prof Amjed Hafeez Khokar</h4>
                                <p>Chemistry</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/TtZgaDfc9kU"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Prof. Dr .Daniyal Kazmi</h4>
                                <p>Head of Department Biology</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/ccmx8BePl4Q"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Prof. Amanat Ali</h4>
                                <p>Head of Department English</p>
                                </div>
                            </div>
                            </div>
                        </div>



                        {{--  --}}

                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/e57a6V1d4Ug"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Prof. Hammad-ur-Rehman</h4>
                                <p>Islamiyat</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/OIAdo6z7zzk"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Prof. Zulfiqar Ali</h4>
                                <p>Computer</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- . --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/yp5ddKg2qwE"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Prof. M Arshad</h4>
                                <p>Physics</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- .. --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/2DEJJyzQaeU"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Prof Gulzar Ahmmed
                                </h4>
                                <p>Math</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- .. --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/eNClRaqgFnY"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Prof.Sumaira Younus
                                </h4>
                                <p>Pakstudies </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- .. --}}

                    </div>
                </div>
               {{-- ------------------------------------------------------ --}}
              {{--  auther videos end here  --}}

              {{-- AUTHERT video end here  --}}
              {{-- ----------------------------------------------------------- --}}



             {{-- ------------------------------------------------------ --}}
              {{--  auther succee story start here  --}}

              {{-- AUTHERT succee story here  --}}
              {{-- ----------------------------------------------------------- --}}
                <div
                    class="tab-pane fade"
                    id="pills-sstories"
                    role="tabpanel"
                    aria-labelledby="pills-sstories-tab"
                    tabindex="0">
                    <div class="row">

                    <div class="col-lg-4 mb-4">
                        <div class="single-video-wrapper">
                        <div class="single-video-content">
                            <div class="single-video-img position-relative">
                            <img
                                src="assets/imges/videoCatalog/placeholder1.png"
                                class="img-fluid w-100 h-214"
                            />
                            <div class="video-icon-img">
                                <img
                                src="assets/imges/videoCatalog/playbtn.png"
                                />
                            </div>
                            <div class="hover-overley">
                                <button
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#VideCatalog"
                                data-url="https://www.youtube.com/embed/mtD-eJsCO4M?si=JDa_yHLLVPOS01yg"
                                class="video-link-btn"
                                >
                                <i class="fa-solid fa-link"></i>
                                </button>
                            </div>
                            </div>
                            <div class="single-video-desc text-center">
                            <h4>Prof.Sumaira Younus
                            </h4>
                            <p>Pakstudies

                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                {{-- ------------------------------------------------------ --}}
              {{--  auther succee story end here  --}}

              {{-- AUTHERT succee story end here  --}}
              {{-- ----------------------------------------------------------- --}}


                {{--  ******************************************  --}}
                {{--  ******************************************  --}}
                {{-- AUTHERT School Feedback end here  --}}
                {{-- ----------------------------------------------------------- --}}
                <div
                    class="tab-pane fade"
                    id="pills-feedback"
                    role="tabpanel"
                    aria-labelledby="pills-feedback-tab"
                    tabindex="0">
                    <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="single-video-wrapper">
                        <div class="single-video-content">
                            <div class="single-video-img position-relative">
                            <img
                                src="assets/imges/videoCatalog/placeholder1.png"
                                class="img-fluid w-100 h-214"
                            />
                            <div class="video-icon-img">
                                <img
                                src="assets/imges/videoCatalog/playbtn.png"
                                />
                            </div>
                            <div class="hover-overley">
                                <button
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#VideCatalog"
                                data-url="https://www.youtube.com/embed/mtD-eJsCO4M?si=JDa_yHLLVPOS01yg"
                                class="video-link-btn"
                                >
                                <i class="fa-solid fa-link"></i>
                                </button>
                            </div>
                            </div>
                            <div class="single-video-desc text-center">
                            <h4>Author</h4>
                            <p>Head of Department Urdu</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="single-video-wrapper">
                        <div class="single-video-content">
                            <div class="single-video-img position-relative">
                            <img
                                src="assets/imges/videoCatalog/placeholder1.png"
                                class="img-fluid w-100 h-214"
                            />
                            <div class="video-icon-img">
                                <img
                                src="assets/imges/videoCatalog/playbtn.png"
                                />
                            </div>
                            <div class="hover-overley">
                                <button
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#VideCatalog"
                                data-url="https://www.youtube.com/embed/mtD-eJsCO4M?si=JDa_yHLLVPOS01yg"
                                class="video-link-btn"
                                >
                                <i class="fa-solid fa-link"></i>
                                </button>
                            </div>
                            </div>
                            <div class="single-video-desc text-center">
                            <h4>Author</h4>
                            <p>Head of Department Urdu</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="single-video-wrapper">
                        <div class="single-video-content">
                            <div class="single-video-img position-relative">
                            <img
                                src="assets/imges/videoCatalog/placeholder1.png"
                                class="img-fluid w-100 h-214"
                            />
                            <div class="video-icon-img">
                                <img
                                src="assets/imges/videoCatalog/playbtn.png"
                                />
                            </div>
                            <div class="hover-overley">
                                <button
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#VideCatalog"
                                data-url="https://www.youtube.com/embed/mtD-eJsCO4M?si=JDa_yHLLVPOS01yg"
                                class="video-link-btn"
                                >
                                <i class="fa-solid fa-link"></i>
                                </button>
                            </div>
                            </div>
                            <div class="single-video-desc text-center">
                            <h4>Author</h4>
                            <p>Head of Department Urdu</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="single-video-wrapper">
                        <div class="single-video-content">
                            <div class="single-video-img position-relative">
                            <img
                                src="assets/imges/videoCatalog/placeholder1.png"
                                class="img-fluid w-100 h-214"
                            />
                            <div class="video-icon-img">
                                <img
                                src="assets/imges/videoCatalog/playbtn.png"
                                />
                            </div>
                            <div class="hover-overley">
                                <button
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#VideCatalog"
                                data-url="https://www.youtube.com/embed/mtD-eJsCO4M?si=JDa_yHLLVPOS01yg"
                                class="video-link-btn"
                                >
                                <i class="fa-solid fa-link"></i>
                                </button>
                            </div>
                            </div>
                            <div class="single-video-desc text-center">
                            <h4>Author</h4>
                            <p>Head of Department Urdu</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>


               {{--  School Feedback end here  --}}
                {{-- ----------------------------------------------------------- --}}


                {{--  ******************************************  --}}
                {{--  ******************************************  --}}
                {{-- AUTHERT Student Reviews  start here  --}}
                {{-- ----------------------------------------------------------- --}}
                <div
                    class="tab-pane fade"
                    id="pills-review"
                    role="tabpanel"
                    aria-labelledby="pills-review-tab"
                    tabindex="0">
                    ...
                </div>

                {{-- AUTHERT Student Reviews  end here  --}}
                {{-- ----------------------------------------------------------- --}}

                {{--  ******************************************  --}}
                {{--  ******************************************  --}}
                {{-- Teacher Lecture start here  --}}
                {{-- ----------------------------------------------------------- --}}
                <div
                    class="tab-pane fade"
                    id="pills-lecture"
                    role="tabpanel"
                    aria-labelledby="pills-lecture-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/lhQwviGrc8Q"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>MITOSES</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/MGy1g7BwuzI"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>PRESENT INDEFINITE TENSE</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/Ot-0_cGtOq8"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>TARUF-E-QURAN</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/bz6K3ycSsnc"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>IDEOLOGY OF PAKISTAN </h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/Ga725xBvIhE"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>EQUATION OF MOTION </h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="ttps://www.youtube.com/embed/6RipBYMxujs"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>IONIZATION ENERGY</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/rQ60FH1a8A4"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>MECHANISH OF RESPIRATION</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/GJASq3xurpY"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>RESENT CONTINUOUS TENSE</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- .......... --}}
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/hFw1CW8n_M4"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4> حدیث نبوی صلی اللہ علیہ وسلم کی ضرورت اور اہمیت</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/HOfMS8lC9Eg"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>lAW of Gravitation</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- . --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/1Jl_wGvTA-Y"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>WORK (PHYSICS)</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/VlJOlHhGkFo"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Hooke"s Law</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/Bs5h87mEFJY"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4> سورةالأنبياء</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/XoDr1jNo7DU"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>  سورة طه</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/ywwZZHW3YwI"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4> سورة البقرة </h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/A1M5RxCJxGM"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4> مرزا غالب کے عادات و خصائل کا خلاصہ</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/f-cySCeMfDo"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Evaporation</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/dUtE9oTNDu0"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>سورة ص </h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                         <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/syS0gJ2BYmI"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>سورة يس</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/1tzEA7UW50w"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>سورة الفرقان</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- ...... --}}

                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/o8D3vCd3bL0"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>How to write a chemical Formula</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/3hMimIUfnWA"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>>Digestion in oral cavity</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/VOXDDqPk8uA"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                    <h4>قرآن مجید اور حدیث نبوی </h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/V_1B_VWuGKA"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>قسم کے احکام و مسائل </h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/p2qXH09soRo"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Heart</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-4 mb-4">
                            <div class="single-video-wrapper">
                            <div class="single-video-content">
                                <div class="single-video-img position-relative">
                                <img
                                    src="assets/imges/videoCatalog/placeholder1.png"
                                    class="img-fluid w-100 h-214"
                                />
                                <div class="video-icon-img">
                                    <img
                                    src="assets/imges/videoCatalog/playbtn.png"
                                    />
                                </div>
                                <div class="hover-overley">
                                    <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#VideCatalog"
                                    data-url="https://www.youtube.com/embed/K1PhhN22Ql4"
                                    class="video-link-btn"
                                    >
                                    <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="single-video-desc text-center">
                                <h4>Corrosion</h4>
                                {{-- <p>Head of Department Urdu</p> --}}
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{--  ******************************************  --}}
                {{--  ******************************************  --}}
                {{-- Teacher Lecture end here  --}}
                {{-- ----------------------------------------------------------- --}}
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- VIDEOS -- End's Here -->


  {{-- video paly` model --}}
@include('site/page/video_catalog_modal')

@include('site/page/book_detail_model')

@endsection
@section('js')
<script>
    var swiper = new Swiper(".multiBannerSlider", {
      speed: 4000,
      autoplay: {
        delay: 4000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  <script>
    AOS.init({
      once: true,
    });
  </script>
  <script type="text/javascript">
    $(".video-link-btn").on("click", function () {
      var VideoURL = $(this).data("url");
      $("#VideCatalog").on("shown.bs.modal", function () {
        $("#VideCatalog iframe").attr("src", VideoURL);
      });
      $("#VideCatalog").on("hidden.bs.modal", function () {
        $("#VideCatalog iframe").removeAttr("src");
      });
    });
  </script>

</script>

@endsection

