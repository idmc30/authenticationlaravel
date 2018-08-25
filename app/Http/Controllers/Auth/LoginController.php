<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
 
   public function login(){
      
    $credentials=  $this->validate(request(),[
        'email' =>'email|required|string',
        'password' => 'required|min:6!string'
      ]);

     //return $credentials;
    //Auth::attempt() devuelve valor boolean true o false 
   if(Auth::attempt($credentials)){
        
        return redirect()->route('dashboard');
    }
     //retornando hacia atras con los errores
    return back()
           ->withErrors(['email'=>'Estas credenciales no coincides con nuestros registros'])
           ->withInput(request(['email']));

   }

}
