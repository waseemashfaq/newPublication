<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/vendor/fontawesome/js/all.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
	$(".qtyminus").on("click",function(){
		var now = $(this).parents(".qty-inputs-wrapper").find(".qty").val();
		if ($.isNumeric(now)){
			if (parseInt(now) -1> 0)
				{ now--;}
			$(this).parents(".qty-inputs-wrapper").find(".qty").val(now);
		}
	})
	$(".qtyplus").on("click",function(){
		var now = $(this).parents(".qty-inputs-wrapper").find(".qty").val();
		if ($.isNumeric(now)){
			$(this).parents(".qty-inputs-wrapper").find(".qty").val(parseInt(now)+1);
		}
	});
</script>


 <script>
        $(document).ready(function () {
            $('#AlertpopupModal').modal('show');
        });
    </script>

<script>

    @if(session()->has('success'))
        // Swal.fire('{{session()->get("status") }}')
        Swal.fire({
        icon: 'success',
        title: '{{session()->get("success") }}',
        showConfirmButton: false,
        timer: 1500
        })
    @endif
	@if(session()->has('error'))
        // Swal.fire('{{session()->get("status") }}')
        Swal.fire({
        icon: 'error',
        title: '{{session()->get("error") }}',
        showConfirmButton: false,
        timer: 1500
        })

    @endif


</script>

<script  type = "text/javascript">
    // add to cart function
function addtocart(id) {
        let subjectid = id;

         let quantity=1;
    // console.log(quantityid, subjectid);
       $.ajaxSetup({
                 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                });
        $.ajax({
            type:'post',
            url:"{{route('cart-add')}}",
            data:{
                'subjectid':subjectid,
                'quantity':quantity,
                'csrf-token':"{{csrf_token()}}"
            },
            success: function(response, status) {
                if (response.result == 'success')
                 {
                    Swal.fire({
                    icon: 'success',
                    title: 'Item Add Into Cart Successfully',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    $('#totalItemInCart').text(response.data.totalItemInCart);
                    // $('#cartProduct').html($(html.content).text());
                    $('.cart_subtotalID').text(response.data.subtotal);

                    $('#cartProductLi').html(response.data.cartHtml);
                    $('#cartProductLi2').html(response.data.cartHtml);
                    // Swal.fire('{{session()->get("status") }}')


                }
                else
                location.reload();
        }

        });
    }
</script>
<script  type = "text/javascript">

	function plsMinsSubject(subjectId,q)
	{


		// var quantity = document.getElementById("plsMinus"+subjectId).value;

		// console.log(subjectId,q);
		$.ajaxSetup({
				 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
				});
		$.ajax({
			type:'post',
			url:"{{route('cart-update')}}",
			data:{
				'subjectid':subjectId,
				'plsMinus':q,
				'csrf-token':"{{csrf_token()}}"
			},
			success: function(response, status) {
				if (response.result == 'success')
				 {

					$('.cart_subtotalID').text(response.data.subtotal);
					// $('#cart_TotalId').text(response.data.subtotal);

					$('.cart_singleItemtotal'+subjectId).text(response.data.singlePrice);
					$('.plsMinus'+subjectId).text(response.data.singleItemQuentity);

					// $('#plsMinus'+subjectId).text(response.data.singleItemQuentity);

					// document.getElementById("plsMinus"+subjectId).value =response.data.singleItemQuentity;

					// for mini cart hearder section
					// $('#minicart_TotalId').text(response.data.subtotal);
					// $('#minicart_singleItemtotal'+subjectId).text(response.data.singlePrice);
					// $('#plsMinus'+subjectId).text(response.data.singleItemQuentity);


				}
				else
					location.reload();
			}

		});
	}
	</script>
    {{-- delete the item from card  --}}
    <script  type = "text/javascript">
        // delete  subject from cart

        // $('.deleterecord').on('click', function() {
        $(document).on('click','.deleterecord', function() {
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
