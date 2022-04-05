<?php
namespace App\Http\Traits ;

Trait GeneralTrait {


    public function getcurrentlang(){
       return app()->getLocale() ;
    }

    public function returnerror($errnum , $msg){
        return response()->json([
             'status' => false ,
             'errnum' => $errnum ,
             'msg'    => $msg ,
        ]) ;
    }

    public function returnsuccessmessage($errnum="8000" , $msg = ""){
        return response()->json([
             'status' => true ,
             'errnum' => $errnum ,
             'msg'    => $msg ,
        ]) ;
    }

    public function returndata( $key , $value , $msg =""){
        return response()->json([
             'status' => true ,
             'errnum' => "8000",
             'msg'    => $msg ,
             $key     =>$value
        ]) ;
    }
}
