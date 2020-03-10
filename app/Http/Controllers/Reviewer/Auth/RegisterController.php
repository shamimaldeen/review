<?php

namespace App\Http\Controllers\Reviewer\Auth;

use App\Models\Reviewer;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $redirectTo = '/';

  
    public function __construct()
    {
        $this->middleware('reviewer.guest');
    }

   
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:reviewers',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    protected function create(array $data)
    {
        return Reviewer::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

   
    public function showRegistrationForm()
    {
        return view('reviewer.auth.register');
    }

    protected function guard()
    {
        return Auth::guard('reviewer');
    }
}
