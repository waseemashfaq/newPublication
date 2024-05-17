  <!-- Topbar -- Start Here -->
  <section class="topbar-section-wrapper">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-2 col-7 order-lg-0 order-0">
          <div class="topbar-phone">
            <label><span class="me-2"><i class="fa fa-phone"></i></span>+92 42
              35864761</label>
          </div>
        </div>
        <div class="col-lg-8 order-lg-1 order-2">
          <div class="topbar-nav-wrapper">
            <nav class="navbar navbar-expand-lg p-0">
              <div class="container-fluid justify-content-end pe-0">
                <button class="d-lg-none d-inline-block nav-btn mt-lg-0 mt-2" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#topBaroffCanvas" aria-controls="topBaroffCanvas" aria-label="Toggle navigation">
                  <span><i class="fa-solid fa-bars me-2"></i>Top Menu</span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="topBaroffCanvas"
                  aria-labelledby="topBaroffCanvasLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="topBaroffCanvasLabel">
                      Top Menu
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-lg-3 pe-0 topbarNavigation">
                      <li class="nav-item">
                        <a class="nav-link p-lg-0" href="#">Test Online</a>
                      </li>
                      <!-- <li class="nav-item">
												<a class="nav-link p-lg-0" href="#">Sample Request</a>
											</li> -->
                      <li class="nav-item">
                        <a class="nav-link p-lg-0" href="#">Retailer Network</a>
                      </li>
                      <!-- <li class="nav-item">
												<a class="nav-link p-lg-0" href="#">Discount Offer</a>
											</li> -->
                      <li class="nav-item">
                        <a class="nav-link p-lg-0" href="#">UGI Gallery</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
        <div class="col-lg-2 col-5 order-lg-2 order-1">
          <div class="topbar-social-list text-end">
            <ul>
              <li>
                <a href="#" target="_blank"><span><i class="fa-brands fa-facebook-f"></i></span></a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <span><i class="fa-brands fa-instagram"></i></span></a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <span><i class="fa-brands fa-youtube"></i></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Topbar -- End's Here -->

  <!-- Main Navigation -- Start Here -->
  <section class="mainNavigation-section-wrapper">
    <nav class="navbar navbar-expand-lg bg-body-white pt-0">
      <div class="container">
        <div class="order-lg-0 order-0 position-relative navbar-brand-placeholder">
          <div class="navbar-brand-wrapper d-block">
            <a class="navbar-brand d-block" href="#"><img src="{{ asset('assets/imges/app-logo.png')}}" /></a>
          </div>
        </div>
        <button class="navbar-toggler order-lg-1 order-2" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#MainMenuNavigation" aria-controls="MainMenuNavigation" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end order-lg-1 order-2" tabindex="-1" id="MainMenuNavigation"
          aria-labelledby="MainMenuNavigationLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="MainMenuNavigationLabel">
              Offcanvas
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 mainNavigationWrapper">
              <li class="nav-item">
                <a class="nav-link @if (Request()->route()->getName()=='home')
                    active
                @endif" aria-current="page" href="{{ route('home') }}"><span>Home</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if (Request()->route()->getName()=='shop')
                    active
                @endif" href="{{ route('shop') }}"><span>Shop</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link  @if (Request()->route()->getName()=='r&d')
                    active
                @endif" href="{{ route('r&d') }}"><span>R & D</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link  @if (Request()->route()->getName()=='video')
                    active
                @endif" href="{{ route('video') }}"><span>Author Videos</span></a>
              </li>
              <li class="nav-item">
                <a  class="nav-link  @if (Request()->route()->getName()=='video')
                    active
                @endif" href="{{ route('video') }}"><span>Teacher Lectures</span></a>
              </li>
              <li class="nav-item">
                <a  class="nav-link  @if (Request()->route()->getName()=='video')
                    active
                @endif" href="{{ route('video') }}"><span>Success Stories</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('past-paper') }}"><span>Past Paper</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="nav-cart-action-wrapper order-lg-2 order-1">
          <ul class="nav-cart-list">
            <li>
              <a href="#"><span><i class="fa-solid fa-magnifying-glass"></i></span></a>
            </li>
            <li>
              <a href="shop.html"><span><i class="fa-solid fa-heart"></i></span></a>
            </li>
            <li>
                @php
                $getTotalCartItems=getTotalCartItems();

           @endphp
              <a href="{{ route('cart-view') }}"><span id="totalItemInCart" class="position-relative"><i class="fa-solid fa-basket-shopping"></i> <span style="    position: absolute;
                top: -19px;
                left: 8px;
                background: rgba(255, 255, 255, 0.06);
                padding: 2px 7px;
                color: #000;
                border-radius: 100px;
                filter: brightness(0.5);
                font-size: 12px;font-weight: 600">{{ $getTotalCartItems }}</span></span ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <!-- Main Navigation -- End's Here -->
