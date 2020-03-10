<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use App\Models\Review;
use Validator;
use Session;
use Storage;
use Auth;

class CompanyController extends Controller
{

    public function select_package(Request $request, $id)
    {
        Session::put('selected_package_id', $id);
        return redirect('company/register');
    }

    public function profile(Request $request, $id, $slug)
    {

        $data =   [
            'company_rating' => Review::with(['company'])->where(['company_id' => $id, 'status' => 1])->sum('rating'),
            'reviews_data' => Review::with(['company', 'review_image', 'reviewer', 'reply'])->where(['company_id' => $id, 'status' => 1])->orderBy('created_at', 'desc')->get(),
            'company'     => Company::with(['category'])->where('id', $id)->firstOrFail()

        ];
        //return $data['reviews_data'];
        return view('company.profile')->with($data);
    }

    public function update_profile(Request $request)
    {

        if ($request->isMethod('put')) {

            $company =  Company::find(Auth::guard('company')->user()->id);
            $company->description = $request->description;
            $company->first_name = $request->first_name;
            $company->last_name = $request->last_name;
            $company->website = $request->website;
            $company->phone = $request->phone;
            $company->address = $request->address;

            if (!empty($request->file('image'))) {

                if (file_exists("public/uploads/company/" . $company->image)) {
                    Storage::delete("public/uploads/company/" . $company->image);
                }

                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = 'company' . '_' . time() . '.' . $extension;
                $path = $request->file('image')->storeAs('public/uploads/company', $fileNameToStore);
                $company->image =  str_replace("public/uploads/company/", '', $path);
            }

            if ($company->save()) {
                Session::flash('success', 'Setting updated successfully');
                return redirect(url('company/update_profile'));
            }
        }

        $data =   [
            'company' => Company::find(Auth::guard('company')->user()->id)
        ];

        return view('company.setting')->with($data);
    }

    public function update_password(Request $request)
    {
        $data = request()->validate([
            'password'      => 'required|min:6|confirmed',
        ]);

        $company =  Company::find(Auth::guard('company')->user()->id);
        $data['password'] =  Hash::make($request->password);
        if ($company->update($data)) {
            Session::flash('success', 'Password updated successfully');
            return redirect(url('company/update_profile'));
        } else {
            Session::flash('error', 'Password update failed');
            return redirect(url('company/update_profile'));
        }
    }
}