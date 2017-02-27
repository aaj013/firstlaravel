<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Input;
use Auth;
use Redirect;
class LoginController extends Controller
{
  public function showLogin(){
    //show form
    return View::make('login');
  }
    public function doLogin(){
      $userdata=array(
        'email'=>Input::get('email'),
        'password'=>Input::get('password')
      );
      if(Auth::attempt($userdata)){
        echo 'SUCCESS!';
      }
      else {
        return Redirect::to('login');
      }
    }
}
