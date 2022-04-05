<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class categoriescontroller extends Controller
{
   public function index(){
        $categories = category::select('id' , 'name_' . app()->getLocale() )->get() ;
        return response()->json($categories) ;
   }
}
