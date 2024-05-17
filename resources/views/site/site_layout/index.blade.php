<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Unique Publications</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
@include('site/site_layout.css')

@yield('css')
</head>

<body>

    {{-- top and nave bar code here  --}}
    @include('site/site_layout.header')
    {{-- end htop and nave bar code here  --}}

    {{-- main content --}}

    @yield('content')
  <!-- Footer -- Start Here -->
  @include('site/site_layout.footer')
  <!-- Footer -- End's Here -->

  <!-- Copyright -- Start Here -->

  <!-- Copyright -- End's Here -->

  <!-- Book Detail Modal -- Start Here -->

  <!-- Book Detail Modal -- Start Here -->

  <!-- Video catalog Modal -- Start Here -->

  <!-- Video catalog Modal -- Start Here -->
  @include('site/site_layout.js')

  @yield('js')


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
    var swiper = new Swiper(".bestSellingBooksSlider", {
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".bookcatalogSlider", {
      slidesPerView: 1,
      spaceBetween: 40,
      navigation: {
        nextEl: ".swiper-button-next2",
        prevEl: ".swiper-button-prev2",
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".bookDetailSlider", {
      loop: false,
      speed: 3000,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".testimonialSlider", {
      speed: 3000,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination",
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
</body>

</html>
