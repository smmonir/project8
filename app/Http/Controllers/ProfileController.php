<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Donal Trump";
        $age = "75";
      $data = [
         "id"=>$id, 
         "name"=>$name, 
         "age"=>$age
        ];
       //return $data;
       $name="access_token";
       $value="123-XYZ";
       $expTime=60;
       $path="/";
       $domain=$_SERVER['SERVER_NAME'];
       $secure=false;
       $httpOnly=true;

       $result = response("Cookie Set Success")->cookie(
        $name,$value,$expTime,$path,$domain,$secure,$httpOnly
       );
       return compact("data", "result");
    }
}
