<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\BIBoardClass;
use App\Models\Subject;
use App\Models\Classes;
use App\Models\BIItemsImage;

class ShopController extends Controller
{

    public function shop_filter(Request $request)
    {
        if (env('APP_ENV')=='local') {
            return view('site/page/shop_local');
        }
        $allItems = Subject::select('BI_Classes.name as className', 'BI_Items.*');
        if  (isset( $request->class_id)) {
            $allItems = $allItems  ->where('BI_Class_id' , $request->class_id);
        }
        elseif (isset( $request->board_id)){


            $allItems = $allItems ->where('BI_Board_id' , $request->board_id);
        }else{
            $allClass=Classes::where('Active',1)->get();

            $allClass_id=Classes::where('Active',1)->pluck('id')->toArray();

            $getAllBoard_id= Subject::select('BI_Board_id')->distinct()
                ->whereIn('BI_Class_id',$allClass_id)->pluck('BI_Board_id')->toArray();


            $allBoard=Board::whereIn('ID',$getAllBoard_id)->get();

            $allItems = $allItems ->whereIn('BI_Class_id' , $allClass_id)
            ->whereIn('BI_Board_id' , $getAllBoard_id)
            ->whereIn('ItemCategory', ['BOOKS', 'TEXT BOOKS', 'UNIQUE NOTES EM MIDDLE', 'UNIQUE NOTES FEDERAL',
                'UNIQUE NOTES PUNJAB BOARD', 'UNIQUE NOTES UM PUNJAB BOARD'])
            ->leftJoin('BI_Classes', function ($join) {
                $join->on('BI_Items.BI_Class_id', '=', 'BI_Classes.ID');
            });

        }

        $allItems = $allItems->where('BI_Items.ShowonWeb', 1)
        ->where('BI_Items.Active',1)
        // ->orderBy('PrintedPrice', $orderBy)
        ->get();

        return view('site/page/shop');

    }

   public function shop()
   {
    if (env('APP_ENV')=='local') {
        return view('site/page/shop_local');
    }
    $allClass=Classes::where('Active',1)->get();

    $allClass_id=Classes::where('Active',1)->pluck('id')->toArray();

    $getAllBoard_id= Subject::select('BI_Board_id')->distinct()
        ->whereIn('BI_Class_id',$allClass_id)->pluck('BI_Board_id')->toArray();


    $allBoard=Board::whereIn('ID',$getAllBoard_id)->get();


    // $allItems = Subject::select('BI_Classes.name as className', 'BI_Items.SubjectName', 'BI_Items.PrintedPrice', 'BI_Items.oldprice', 'BI_Items.Image', 'BI_Items.ItemCode', 'BI_Items.ItemCategory', 'BI_Items.BI_Class_id', 'BI_Items.BI_Board_id', 'ItemCode')
    $allItems = Subject::select('BI_Classes.name as className', 'BI_Items.*')
    ->whereIn('BI_Class_id' , $allClass_id)
    ->whereIn('BI_Board_id' , $getAllBoard_id)
    ->whereIn('ItemCategory', ['BOOKS', 'TEXT BOOKS', 'UNIQUE NOTES EM MIDDLE', 'UNIQUE NOTES FEDERAL',
        'UNIQUE NOTES PUNJAB BOARD', 'UNIQUE NOTES UM PUNJAB BOARD'])
    ->leftJoin('BI_Classes', function ($join) {
        $join->on('BI_Items.BI_Class_id', '=', 'BI_Classes.ID');
    })
    ->where('BI_Items.ShowonWeb', 1)
    ->where('BI_Items.Active',1)
    // ->orderBy('PrintedPrice', $orderBy)
    ->get();

    // get subject name
    // $allSubject = Subject::select('BI_Items.WebItemName')->distinct()
    // ->whereIn('BI_Class_id' , $allClass_id)
    // ->whereIn('BI_Board_id' , $getAllBoard_id)
    // ->whereIn('ItemCategory', ['BOOKS', 'TEXT BOOKS', 'UNIQUE NOTES EM MIDDLE', 'UNIQUE NOTES FEDERAL',
    // 'UNIQUE NOTES PUNJAB BOARD', 'UNIQUE NOTES UM PUNJAB BOARD'])
    // ->leftJoin('BI_Classes', function ($join) {
    //     $join->on('BI_Items.BI_Class_id', '=', 'BI_Classes.ID');
    // })
    // ->where('BI_Items.ShowonWeb', 1)
    // ->where('BI_Items.Active',1)
    // // ->orderBy('PrintedPrice', $orderBy)
    // ->get();

//    // get Medium name
//     $Medium = Subject::select('BI_Items.Medium')->distinct()
//     ->whereIn('BI_Class_id' , $allClass_id)
//     ->whereIn('BI_Board_id' , $getAllBoard_id)
//     ->whereIn('ItemCategory', ['BOOKS', 'TEXT BOOKS', 'UNIQUE NOTES EM MIDDLE', 'UNIQUE NOTES FEDERAL',
//     'UNIQUE NOTES PUNJAB BOARD', 'UNIQUE NOTES UM PUNJAB BOARD'])
//     ->leftJoin('BI_Classes', function ($join) {
//         $join->on('BI_Items.BI_Class_id', '=', 'BI_Classes.ID');
//     })
//     ->where('BI_Items.ShowonWeb', 1)
//     ->where('BI_Items.Active',1)
//     // ->orderBy('PrintedPrice', $orderBy)
//     ->get();

    // dd($allClass,$allBoard,$Medium,$allItems);

    // medium   E  U
    return view('site/page/shop',compact('allItems','allClass','allBoard'));
    // return view('site/page/shop');

   }
}
