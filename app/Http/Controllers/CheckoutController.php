<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function checkout_page()
    {
        // if(auth()->user()){
            if(\Cart::getTotalQuantity()>0){
                $cartCollection = \Cart::getContent();
                $Shipping=0;
                $subtotal=\Cart::getSubTotal();
               session(['link' => url()->previous()]);
            //    $value = session()->get('link');
            //    dd( $value);
                return view('site.page.checkout',compact('cartCollection','Shipping','subtotal'));
            }else{
                return redirect()->route('shop')->with('error', 'No Item In Cart');
            }
        //  }else{
        //     // session(['link' => url()->previous()]);
        //      return redirect()->route('loginview')->with('error', 'Signup First');
        //  }

    }

    public function order_save(Request $request)
    {
        dd($request);
        $cartdataarr=\Cart::getContent();
        if(\Cart::isEmpty()){
            return redirect('/')->with('error', 'No Item In Cart');
        }else{
                $saveorder=0;
                $ordercount=0;
                $userId=0;
                // if (!isset(auth()->user()->id)) {
                //     $userId=null;
                //     return back();
                //     // return login page:
                // }else{
                //     dd( $request);
                $validated = $request->validate([
                    'Name'           => 'required|max:50|regex:/^[a-zA-Z ]+$/',
                    'FatherName'     => 'required|max:50|regex:/^[a-zA-Z ]+$/',
                    'CellNo'         => 'required|numeric',
                    'PostalAddress'  => 'required|max:150',
                    'District'       => 'required|max:50|regex:/^[a-zA-Z ]+$/',
                    'City'           => 'required|max:50|regex:/^[a-zA-Z ]+$/',

                ]);
                DB::beginTransaction();
                $userorder                  =new UserOder();
                $userorder->Name            =$request->input('Name');
                $userorder->FatherName      =$request->input('FatherName');
                $userorder->PostalAddress   =$request->input('PostalAddress');
                $userorder->City            =$request->input('City');
                $userorder->District        =$request->input('District');
                $userorder->CellNo          =$request->input('CellNo');
                $userorder->NoOfBooks       =\Cart::getTotalQuantity();
                $userorder->TotalAmount     =\Cart::getSubTotal();
                $userorder->Comments        =null;
                $userorder->ShippingFee     =0;
                $userorder->Status          ='New';
                $userorder->user_id         =auth()->user()->id??null;
                $userorder->CreatedDate     =Carbon::now();
                $ordercheck                 =$userorder->save();
                if ($ordercheck){
                    $saveorder=1;
                    $orderID=$userorder->id;
                    foreach ($cartdataarr as $item) {
                        $orderdetail                =new OrderItems();
                        $orderdetail->PurchaseOrderId_Fk=$orderID;
                        $orderdetail->ItemCode_Fk   =$item->id;
                        $orderdetail->BoardName     =$item->attributes->boardName;
                        $orderdetail->ClassName     =$item->attributes->className;
                        $orderdetail->SubjectName   =$item->name;
                        $orderdetail->PrintedPrice  =$item->price;
                        $orderdetail->Quantity      =$item->quantity;
                        $orderdetail->user_id       =auth()->user()->id??null;
                        if($orderdetail->save())
                        {
                            $saveorder=1;
                            DB::commit();
                        }
                        else{
                            $saveorder=0;
                            $ordercount=1;
                        }
                    }
                    if ($saveorder==1 &&  $ordercount==0) {
                        DB::commit();
                        \Cart::clear();
                        //if(\Auth::check()){
                           // return redirect()->route('orderlist')->with('success', 'Order Place Successfull');
                        //}else{
							if(isset($request->email)){
                                $orderDetailMail=OrderItems::where('PurchaseOrderId_Fk',$userorder->id)->get();
                                $data=['orderarr'=>$userorder,'orderdetail'=>$orderDetailMail];
                                $user['to']=$request->email;
                                $user['from'] ='UniquePublicationNotReply@gmail.com';
                                \Mail::send('site.mail.orderMail',$data,function($message) use ($user){
                                    $message->to( $user['to']);
                                    $message->from($user['from']);
                                    $message->subject('New Order ');
                                });
                            }

                            $b="03160409828";
                            $message="Your order have been placed successfully. your order number is ".$orderID .". If you have any query Kindly call us at 0324-6666661-2-3";
                            $abc=\DB::update(DB::raw("exec sp_BI_SendPubsms :Param1, :Param2"),[
                                ':Param1' =>$request->input('CellNo'),
                                ':Param2' => $message,
                            ]);
                            // return redirect(session()->get('link'))->with('success', 'Order Place Successfull');
                            return redirect()->route('home')->with('success', 'Order Place Successfull');
                        //}
                    } else {
                        DB::rollBack();
                        return redirect()->back()->with('error', 'Please Try Again');
                    }

                }
                else{
                    return redirect()->back()->with('error', 'Please Try Again');
                }


        }
    }
}
