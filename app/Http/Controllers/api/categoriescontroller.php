<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\category;
use App\Http\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class categoriescontroller extends Controller
{
    use GeneralTrait ;
   public function index(){
        $categories = category::select('id' , 'name_' . app()->getLocale() )->get() ;
        return response()->json($categories) ;
   }

     public function getcategorybyid(Request $reuest){
        $categories = category::select()->find($reuest->id) ;
        if(!$categories)
           return $this->returnerror('001' , "هذا المنتج غير موجود !") ;

        return $this->returndata( "category" , $categories , "تم جلب المنتج بنجاح  ") ;
     }
}
