@extends('site/site_layout.index')
@section('css')
 <!-- Include this in your blade layout -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
@section('content')


	<!-- Order Page Content -- Start Here -->
	<section class="order-section-wrapper padding-tb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<h3 class="purchased-item-title mb-4">Payment Details</h3>
					<form  method="post" action="{{route('order-save')}}" enctype="multipart/form-data">
                        @csrf
						<div class="row">
							<div class="col-lg-6 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">First Name <span>*</span></label>
									<input type="text"  name="Name" value="{{old('Name')}}" required  maxlength="50">
                                    @error('Name')
                                    <span class="invalid-feedback" style="display: block" role="alert"
                                          style="color:red"> <strong>{{ $message }}</strong></span>
                                    @enderror
								</div>
							</div>
							<div class="col-lg-6 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">Father Name <span>*</span></label>
                                    <input type="text" name="FatherName" value="{{old('FatherName')}}" required  maxlength="50">
                                    @error('FatherName')
                                    <span class="invalid-feedback" style="display: block" role="alert"
                                          style="color:red"> <strong>{{ $message }}</strong></span>
                                    @enderror
								</div>
							</div>
							<div class="col-lg-6 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">Contact 1 <span>*</span></label>
                                    <input type="text" name="CellNo" value="{{old('CellNo')}}" required   maxlength="14"  minlength="11">
                                    @error('CellNo')
                                    <span class="invalid-feedback" style="display: block" role="alert"
                                          style="color:red"> <strong>{{ $message }}</strong></span>
                                    @enderror
								</div>
							</div>
							<div class="col-lg-6 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">Contact 2 </label>
									<input type="text" name="" >
								</div>
							</div>
							<div class="col-lg-12 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">Email Address</label>
                                    <input type="email" name="email" value="{{old('email')}}" required   >
                                    @error('email')
                                    <span class="invalid-feedback" style="display: block" role="alert"
                                          style="color:red"> <strong>{{ $message }}</strong></span>
                                    @enderror
								</div>
							</div>
							<div class="col-lg-12 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">House No / Street <span>*</span></label>
                                    <input placeholder="House number and street name" type="text" name="PostalAddress"
                                    value="{{old('PostalAddress')}}" required  maxlength="150">
                             @error('PostalAddress')
                             <span class="invalid-feedback" style="display: block" role="alert"
                                   style="color:red"> <strong>{{ $message }}</strong></span>
                             @enderror
								</div>
							</div>
							<div class="col-lg-6 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">Town / City <span>*</span></label>
                                    <input type="text" name="City" value="{{old('City')}}" required  maxlength="50">
                                    @error('City')
                                    <span class="invalid-feedback" style="display: block" role="alert"
                                          style="color:red"> <strong>{{ $message }}</strong></span>
                                    @enderror
								</div>
							</div>
							<div class="col-lg-6 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">Post Office</label>
									<input type="text" name="" >
								</div>
							</div>
							<div class="col-lg-12 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">District <span>*</span></label>
                                    <input type="text" name="District" value="{{old('District')}}" required  maxlength="50">
                                    @error('District')
                                    <span class="invalid-feedback" style="display: block" role="alert"
                                          style="color:red"> <strong>{{ $message }}</strong></span>
                                    @enderror
								</div>
							</div>
							<div class="col-lg-12 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">Nearest Place</label>
									<input type="text" name="" >
								</div>
							</div>
							<div class="col-lg-12 mb-3">
								<div class="single-input-wrapper">
									<label class="d-block mb-2">Specialist Instruction</label>
									<textarea rows="5"></textarea>
								</div>
							</div>
							<div class="col-lg-12 mb-3">
								<div class="order-delivery-time-wrapper mt-4">
									<div class="order-delivery-content">
										<p class="mb-0">Our Delivery Services may require a signature on receipt of the parcel. Our carriers may attempts delivery at any time between 10am to 5pm. We, therefore advise that you provide a shipping address where you or representative can sign for delivery. </p>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-4">
					<div class="order-details-wrapper">
						<h3 class="mb-4">Your Order</h3>
						<div class="order-details-list">
							<ul>
                                @foreach ($cartCollection as $subject)


								<li class=" liID{{$subject->id}}">
									<div class="single-order-detail-item d-flex align-items-center">
										<div class="single-order-img">
											<img src="{{asset($subject->attributes->subjectimage)}}">
										</div>
										<div class="single-order-desc ali ps-2">
											<div class="item-title-del">
												<div class="item-title">
													<label>English</label>
												</div>
												<div class="item-del-btn text-end">
													<button type="button" class="deleterecord_carView" data-row-id="{{$subject->id}}"><img src="assets/imges/shop/del.png"></button>
												</div>
											</div>
											<div class="item-price-discount">
												<div class="item-discount">
													{{-- <label>Discount <span>100 PKR</span></label> --}}
												</div>
												<div class="item-price-co">
													<label><span >{{$subject->price}}</span> PKR</label>
												</div>
											</div>
										</div>
									</div>
								</li>
                                @endforeach
							</ul>
						</div>
						<div class="discount-wrapper mt-4">
							<div class="discount-content">
								<h6>Discount Code</h6>
								<div class="discount-group-input position-relative">
									<input type="text" name="" placeholder="Promo Code">
									<div class="discount-img">
										<img src="assets/imges/checkout/ticket-discount.png">
									</div>
									<div class="discount-action">
										<button type="button">Apply</button>
									</div>
								</div>
							</div>
						</div>
						<div class="all-items-wrapper mt-4">
							<ul>
								<li>
									<div class="row">
										<div class="col-6">
											<div class="items-total">
												<label>Subtotal</label>
											</div>
										</div>
										<div class="col-6">
											<div class="items-total-value">
												<label>{{$subtotal}} PKR</label>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-6">
											<div class="items-total">
												<label>Shipping Cost</label>
											</div>
										</div>
										<div class="col-6">
											<div class="items-total-value">
												<label>{{ $Shipping }} PKR</label>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-6">
											<div class="items-total">
												<label>Discount (10%)</label>
											</div>
										</div>
										<div class="col-6">
											<div class="items-total-value">
												<label>- 200 PKR</label>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="sub-total-wrapper mt-3">
							<ul>
								<li>
									<div class="row">
										<div class="col-6">
											<div class="items-total">
												<label><strong>Total</strong></label>
											</div>
										</div>
										<div class="col-6">
											<div class="items-total-value">
												<label><strong>{{$subtotal}} PRK</strong></label>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<p class="mt-3 notes">Review All Entries Before Final Submission</p>
						<button type="submit" class="checkout-btn" >Checkout</button>
						{{-- <button type="submit" class="checkout-btn" data-bs-toggle="modal" data-bs-target="#thanksModal">Checkout</button> --}}
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

    // submit form
    $(document).ready(function () {
            $('.saveform').click(function () {

                // var data = $('#saveForm').serialize();
                var data = new FormData($('#saveForm')[0]);


                $.ajaxSetup({
                 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                });
                $.ajax({
                    type:'post',
                    url:"{{route('order-save')}}",
                    data:{
                        'data':data,
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
        });

    </script>

</script>

@endsection

