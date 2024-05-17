<?php
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    
    // use App\Models\Brand;
   
     function totalItemInCart()
    {
        $allData=\Cart::getContent();
      
        return   $allData;
    }
    function subTotal()
    {
     
        $subTotal =\Cart::getSubTotal();
      
      
        return   $subTotal;
    }
