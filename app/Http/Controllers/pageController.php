<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
  public function home()
  {
      return view('home');
  }
  public function login()
  {
      return view('users.login');
  }
  public function register()
  {
      return view('users.register');
  }
}
