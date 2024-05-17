<?php
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    // use App\Models\Brand;

     function getTotalCartItems()
    {
        $cartCollection = \Cart::getContent();
        $totalItemInCart=$cartCollection->count();

        return   $totalItemInCart;
    }

    function makeResponse($result, $message, $code = 200,$data = [],$token = null)
{
    if($token)
    {
        return response()->json( [
            'result' => $result,
            'message' => $message,
            'data' => $data,
            'token' => $token
        ],$code);
    }
    else{
        return response()->json( [
            'result' => $result,
            'message' => $message,
            'data' => $data
        ],$code);
    }
}
