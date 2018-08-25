<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
      // el middleware tambien se puede hacer de esta forma y no en la ruta misma
      // public function __construct()
      // {
      //   $this->middleware('guest',['only'=>'showLoginForm'])
      // } 

     
     public function logout(){
        
        Auth::logout();
        return redirect('/');

     }



     public function showLoginForm(){
        
        return view('auth.login');

     }



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
