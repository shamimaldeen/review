<?php

namespace App\Http\Controllers\Company\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Package;
use App\Models\Category;
use Validator;
use Session;

class RegisterController extends Controller
{
 

    use RegistersUsers;

   
    //protected $redirectTo = '/company/login';
    protected $redirectTo = '/';

    
    public function __construct()
    {
        $this->middleware('company.guest');
    }

   
    protected function validator(array $data)
    {
        //dd($data);
        return Validator::make($data, [
            'description'   => 'required',
            'first_name'    => 'required|max:255',
            'last_name'     => 'max:255',
            'email'         => 'required|email|max:255|unique:companies',
            'password'      => 'required|min:6|confirmed',
            'website'       => 'required',
            'phone'         => 'required',
            'address'       => 'required'
        ]);
    }
    
    protected function create(array $data)
    {
        return Company::create([
            'company_name' => $data['company_name'],
            'category_id' => $data['category_id'],
            'package_id' => Session::get('selected_package_id'),
            'description' => $data['description'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'website' => $data['website'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => bcrypt($data['password']),
        ]);

    }
    
    public function showRegistrationForm()
    {
        $data = [
            'categories' => Category::all(),
            'packages' => Package::all(),
        ];

        return view('company.auth.register')->with($data);
    }

    protected function guard()
    {
        return Auth::guard('company');
    }
}
