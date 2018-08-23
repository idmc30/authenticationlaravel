<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{
 
   public function login(){
      
      $this->validate(request(),[
        'email' =>'email|required|string',
        'password' => 'required|min:6!string'
      ]);


   }

}
