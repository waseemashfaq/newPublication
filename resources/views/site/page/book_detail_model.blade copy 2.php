 <!-- Book Detail Modal -- Start Here -->
 <div class="modal fade" id="bookDetail" tabindex="-1" aria-labelledby="bookDetailLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body position-relative">
          <div class="row">
            <div class="col-lg-5">
              <div class="bookDeatail-slider-wrapper">
                <div class="swiper bookDetailSlider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="bookDetail-slider-content-wrapper">
                        <div class="bookDetail-slider-img">
                          <img src="" class="img-fluid w-100" />
                        </div>
                      </div>
                    </div>
                  
                  </div>
                  {{-- <div class="swiper-pagination"></div> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="bookDetail-slider-desc">
                <h3>Pakistan Study</h3>
                <div class="bookDetail-price-wrapper">
                  <p class="mb-0">
                    4500 <small>PKR</small>
                    <!-- <span class="cut-price ms-4">$16,99</span> -->
                  </p>
                </div>
                <p>
                  Making this the first true generator on the Internet. It
                  uses a dictionary of over 200 Latin words, combined with a
                  handful of model sentence structures, to generate Lorem
                  Ipsum which looks reasonable. The generated Lorem Ipsum.
                </p>
                <ul class="books-pub-detail-list">
                  <li>
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="bpd-title">
                          <label>Publisher</label>
                        </div>
                      </div>
                      <div class="col-lg-1">
                        <div class="dots">
                          <label>:</label>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="bpd-value">
                          <label>Learning Private Limited (1 January 2023)</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="bpd-title">
                          <label>Language</label>
                        </div>
                      </div>
                      <div class="col-lg-1">
                        <div class="dots">
                          <label>:</label>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="bpd-value">
                          <label >English</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="bpd-title">
                          <label>Paperback</label>
                        </div>
                      </div>
                      <div class="col-lg-1">
                        <div class="dots">
                          <label>:</label>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="bpd-value">
                          <label>212 pages</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="bpd-title">
                          <label>ISBN-10</label>
                        </div>
                      </div>
                      <div class="col-lg-1">
                        <div class="dots">
                          <label>:</label>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="bpd-value">
                          <label>9788120345799</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="bpd-title">
                          <label>Dimensions </label>
                        </div>
                      </div>
                      <div class="col-lg-1">
                        <div class="dots">
                          <label>:</label>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="bpd-value">
                          <label>20 x 14 x 4 cm</label>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="add-to-cart-group-wrapper d-flex align-items-center mt-4">
                  <div class="product-qty me-3">
                    <div class="qty-inputs-wrapper d-flex align-items-center justify-content-between">
                      <div class="qtyminus me-3" onclick="plsMinsSubject({{$subject->id}},0)">
                        <i class="fa fa-minus"></i>
                      </div>
                      <h3 class="qty plsMinus{{$subject->id}}">1</h3>
                      <div class="qtyplus ms-3" onclick="plsMinsSubject({{$subject->id}},1)">
                        <i class="fa fa-plus"></i>
                      </div>
                    </div>
                  </div>
                  <div class="product-addtocart">
                    <button type="button"  >
                      <span><i class="fa-solid fa-basket-shopping me-3"></i></span>
                      Add to cart
                    </button>
                  </div>
                </div>
                <div class="social-share-list mt-3">
                  <ul>
                    <li>
                      <a href="#" target="_blank"><img src="assets/imges/shop/whatsapp-share.png" /></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><img src="assets/imges/shop/facebook-share.png" /></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><img src="assets/imges/shop/google-share.png" /></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="model-close-btn-wrapper">
            <button type="button" data-bs-dismiss="modal" aria-label="Close">
              <span><i class="fa-solid fa-xmark"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
