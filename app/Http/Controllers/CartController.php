<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{


    public function cart_add(Request $request)
    {
      try {

            $addCart=\Cart::add(array(
                'id'            =>$request->subjectid, // unique row ID
                'name'          =>'new book',  // SUBJECT Name
                'price'         =>102, // subject price
                'quantity'      =>$request->quantity,              // subject quantity

                'attributes'    => array(
                'className'     => '9th',
                'boardName'     =>'punjab',
                'subjectimage'  =>'assets/imges/shop/placeholder1.png',
                'type'          =>'order',
                'bookcode'      =>'new ',
                'language'      =>'Urdu '
                ),
            ));

            // $allData=\Cart::getContent();
            // dd($allData);

            if($addCart){
                //  return $this->cartAddhtml();
                $cartCollection = \Cart::getContent();
                $data=[
                    'totalItemInCart'=>$cartCollection->count(),
                    'cartHtml'=>$this->cartAddhtml($cartCollection),
                    // 'subtotal'=>\Cart::getSubTotal(),
                ];
                // 'subtotal'=>\Cart::getSubTotal()
                return response()->json(['result'=>'success','data'=>$data]);
            }else{
                return redirect()->back()->with('error', 'Oops...');;
            }





      } catch (\Throwable $th) {
         return response()->json(['result'=>'error']);
      }




    }

    public function cart_update(Request $request)
    {


        if($request->plsMinus==1)
        {
                // you may also want to update a product's quantity
                \Cart::update($request->subjectid, array(
                    'quantity' =>1 ,// so if the current product has a quantity of 4, another 2 will be added so this will result to 6
            ));

        }
        if($request->plsMinus==0){
                // you may also want to update a product by reducing its quantity, you do this like so:
                \Cart::update($request->subjectid, array(
                    'quantity' =>-1, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
                ));
            }
            $singleItem=\Cart::get($request->subjectid);

            // You can also get the sum of the Item multiplied by its quantity, see below:
            $singlePrice = \Cart::get($request->subjectid)->getPriceSum();
            // $subTotal =\Cart::getSubTotal();

            $data=[
                'subtotal'=>\Cart::getSubTotal(),
                'singlePrice'=> $singlePrice ,
                'singleItemQuentity'=>$singleItem->quantity,

            ];
        return response()->json(['result'=>'success','data'=>$data]);
    }
    public function cart_delete(Request $request){
        // $itemId=$request->id;
        //   dd($request->subjectid);
        //  $userId = auth()->user()->id;

        //  \Cart::session($userId)->remove($itemId);
        \Cart::remove($request->subjectid);
        $cartCollection = \Cart::getContent();

        $data=[
            'subtotal'=>\Cart::getSubTotal(),
            'totalItemInCart'=>$cartCollection->count(),
        ];
        // 'subtotal'=>\Cart::getSubTotal()
        return response()->json(['result'=>'success','data'=>$data]);

    }

    public function cartAddhtml($allData)
    {
         $allData=\Cart::getContent();
        //  dd($allData);
        $cartHtml=null;
        foreach ($allData as $key => $subject)
        {
            $cartHtml.="<li class='liID".$subject->id."'>
            <div class='single-cart-item-wrapper d-flex'>
                <div class='single-cart-item-img'>
                    <img src='".asset($subject->attributes->subjectimage)."' class='img-fluid'>
                </div>
                <div class='single-cart-item-desc ps-2'>
                    <div class='row gx-0'>
                        <div class='col-10'>
                            <h6 class='cart-item-title'>".$subject->name." <span class='ms-2'></span></h6>
                        </div>
                        <div class='col-2'>
                            <div class='text-end'>
                        <button class='del-item deleterecord' data-row-id='".$subject->id."'><span><img src='". asset('assets/imges/shop/del.png')."'></span></button>
                    </div>
                        </div>
                    </div>



                    <div class='single-cart-price'>
                        <p ><span class='cart_singleItemtotal".$subject->id."'>".$subject->quantity*$subject->price."</span> <sup>PKR</sup>

                        </p>
                    </div>
                    <div class='product-qty w-100' style='margin-top: 37px;'>
                    <div class='qty-inputs-wrapper d-flex align-items-center justify-content-between'>
                        <div class='qtyminus me-3' onclick='plsMinsSubject(".$subject->id.",".'0'.")'><i class='fa fa-minus'></i></div>
                        <h3 class='qty-title mb-0 plsMinus".$subject->id."' >".$subject->quantity."</h3>
                        <div class='qtyplus ms-3' onclick='plsMinsSubject(".$subject->id.",".'1'.")'><i class='fa fa-plus'></i></div>
                    </div>
                </div>
                </div>
            </div>
        </li>";

        }
        return $cartHtml;
    }

    public function cart_view(Request $request){

        // if(\Cart::isEmpty()){
        //     return redirect()->back()->with('error', 'Cart is Empty');;

        // }else{
            $cartSubejct    =\Cart::getContent();
            // all total of product
            $subTotal       =\Cart::getSubTotal();
            $totalItemInCart=$cartSubejct->count();
            //dd($cartdataarr);
            return view('site.page.cart_view',compact('cartSubejct','subTotal','totalItemInCart'));
        // }

    }
}
