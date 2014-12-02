<?php namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller {

    public function login()
    {
      return   \Socialite::with('github')->redirect();
    }

}
