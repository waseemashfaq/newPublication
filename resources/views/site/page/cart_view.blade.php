@extends('site/site_layout.index')
@section('css')
 <!-- Include this in your blade layout -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
@section('content')
{{-- !-- Order Page Content -- Start Here --> --}}
    <section class="order-section-wrapper padding-tb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h3 class="purchased-item-title">
              Products <span class="item-count ms-3">{{ $totalItemInCart }} items</span>
            </h3>
            <div class="prchased-items-listing">
              <ul>
                @if (!$cartSubejct->isEmpty())
                @foreach ($cartSubejct as $subject)

                <li class="mt-3 liID{{$subject->id}}" >
                  <div class="single-purchased-items">
                    <div class="row">
                      <div class="col-lg-2 pe-0">
                        <div class="purchased-item-img">
                          <img
                            src="{{asset($subject->attributes->subjectimage)}}"
                            class="img-fluid"
                          />
                        </div>
                      </div>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-9">
                            <div class="purchased-item-info">
                              <h3>{{$subject->name??''}}</h3>
                              <label>lang : <span>{{ $subject->attributes->language?? '' }}</span></label>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="purchased-item-price text-end">
                              <label><span >{{$subject->price}}</span> PKR</label>
                            </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top: 66px">
                          <div class="col-lg-12">
                            <div class="d-flex align-items-center">
                              <div class="product-qty-wrapper">
                                <div class="product-qty">
                                  <div
                                    class="qty-inputs-wrapper d-flex align-items-center justify-content-between"
                                  >
                                    <div
                                      class="qtyminus me-3"
                                      onclick="plsMinsSubject({{$subject->id}},0)"
                                    >
                                      <i class="fa fa-minus"></i>
                                    </div>
                                    <h3 class="qty-title mb-0 plsMinus{{$subject->id}}"  >{{$subject->quantity}}</h3>
                                    <div
                                      class="qtyplus ms-3"
                                      onclick="plsMinsSubject({{$subject->id}},1)"
                                    >
                                      <i class="fa fa-plus"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-remover ms-3">
                                <button type="button" class="deleterecord_carView" data-row-id="{{$subject->id}}" >Remove</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                @endforeach
                @else
                <li>
                    Empty Cart
                </li>


                @endif
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="order-summary-wrapper">
              <div class="order-summary-content">
                <h3 class="mb-4">Order Summary</h3>
                <ul>
                @foreach ($cartSubejct as $subject)
                  <li>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="order-list-title">
                          <label>{{$subject->name??''}} ×  <span class="qty-title mb-0 plsMinus{{$subject->id}}"  >{{$subject->quantity}}</span></label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="order-list-value">
                          <label>RS <span class="cart_singleItemtotal{{$subject->id}}">{{$subject->price*$subject->quantity}}</span></label>
                        </div>
                      </div>
                    </div>
                  </li>

                  @endforeach

                  {{-- discount --}}
                  {{-- <li>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="order-list-title">
                          <label>Discount</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="order-list-value">
                          <label>Rs 31.9</label>
                        </div>
                      </div>
                    </div>
                  </li> --}}
                  <li>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="order-list-title">
                          <label>Shipping Cost</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="order-list-value">
                          <label>RS 0</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="mb-0">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="order-list-title">
                          <label>Total Items</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="order-list-value">
                          <label>{{ $totalItemInCart }}</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <span class="behave-hr"></span>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="order-list-title">
                          <label>Payable Amount</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="order-list-value">
                            <label  class="cart_subtotalID">{{$subTotal}}</label>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                @if ($totalItemInCart<1)
                <a href="#" class="mt-3">Proceed to Checkout</a>
                @else
                <a href="{{ route('checkout') }}" class="mt-3">Proceed to Checkout</a>
                @endif

              </div>
            </div>
            <div class="order-delivery-time-wrapper mt-4">
              <div class="order-delivery-content">
                <h4>Deliver Time</h4>
                <p class="mb-0">24 To 48 Hours (Lahore)</p>
                <p class="mb-0">
                  4 To 5 Working Days All Major Cities(Subject To Distance)
                </p>

                <label class="mt-4"
                  >4 To 5 Working Days All Major Cities(Subject To
                  Distance)</label
                >
                <label>Cash On Delivery</label>
                <label
                  >Returned Within 5 Days(Term & Conditioned Applied)</label
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Order Page Content -- End's Here -->

@endsection
@section('js')
  {{-- delete the item from card  --}}
  <script  type = "text/javascript">
    // delete  subject from cart

    // $('.deleterecord').on('click', function() {
    $(document).on('click','.deleterecord_carView', function() {
        var rowid=null;
        rowid = $(this).data("row-id");
        // var row = $(this).parent().parent();
        //  var ulID= document.getElementsByClassName('liID'+rowid);

        const boxes = document.querySelectorAll('.liID'+rowid);
        $.ajaxSetup({
                 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                });
        $.ajax({
            type:'post',
            url:"{{route('cart-delete')}}",
            data:{
                'subjectid':rowid,
                'csrf-token':"{{csrf_token()}}"
            },
            success: function(response, status) {
                if (response.result == 'success')
                 {
                    // ulID.remove();
                    Swal.fire({
                        icon: 'success',
                        title: 'Remove From Cart ',
                        showConfirmButton: false,
                        timer: 1500
                        })
                    boxes.forEach(box => {

                      box.remove();
                      location.reload();

                    });
                    $('.cart_subtotalID').text(response.data.subtotal);
                    // $('#cart_TotalId').text(response.data.subtotal);
                    $('#totalItemInCart').text(response.data.totalItemInCart);

                    // for mini cart hearder section
                    // $('#minicart_subtotalID').text(response.data.subtotal);
                    // $('#minicart_TotalId').text(response.data.subtotal);

                }
                else
                    location.reload();
            }
        });
    });

</script>

@endsection

