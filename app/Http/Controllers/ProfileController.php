<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, $id=null){
	   if ($id == null) {
            return response("Please provide a profile id", 400);
        } else {
           
        $name = "Donal Trump";
        $age = "75";
      $data = [
         "id"=>$id, 
         "name"=>$name, 
         "age"=>$age
        ];

       $name="access_token";
       $value="123-XYZ";
       $expTime=1;
       $path="/";
       $domain=$_SERVER['SERVER_NAME'];
       $secure=false;
       $httpOnly=true;

       $setCookie = response("Cookie Set Success")->cookie(
        $name,$value,$expTime,$path,$domain,$secure,$httpOnly
    );

       return response(['data'=>$data,'cookie_values'=>$setCookie], 200);
     }
      
    }
}
