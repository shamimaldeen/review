<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Country;
use App\Models\Reviewer;
use App\Models\Review;
use App\Models\ReviewImage;
use Session;
use Storage;
use Auth;


class ReviewerController extends Controller
{
    function write_review()
    {
        return view('reviewer.review.write_review');
    }

    public function review()
    {

        return view('reviewer.review.reviews');
    }


    public function setting(Request $request)
    {
        if ($request->isMethod('put')) {

            $reviewer =  Reviewer::find(Auth::guard('reviewer')->user()->id);
            $reviewer->title = $request->title;
            $reviewer->fullname = $request->fullname;
            $reviewer->email = $request->email;
            $reviewer->city = $request->city;
            $reviewer->country_id = $request->country_id;

            if (!empty($request->file('image'))) {

                if (file_exists("public/uploads/reviewer/" . $reviewer->image)) {
                    Storage::delete("public/uploads/reviewer/" . $reviewer->image);
                }

                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = 'reviewer' . '_' . time() . '.' . $extension;
                $path = $request->file('image')->storeAs('public/uploads/reviewer', $fileNameToStore);
                $reviewer->image =  str_replace("public/uploads/reviewer/", '', $path);
            }

            if ($reviewer->save()) {
                Session::flash('success', 'Setting updated successfully');
                return redirect(url('reviewer/setting'));
            }
        }

        $data = [
            'reviewer' => Reviewer::with('country')->where('id', Auth::guard('reviewer')->user()->id)->first(),
            'countries' => Country::all()
        ];


        return view('reviewer.setting')->with($data);
    }

    public function review_now(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $review =  new Review;
            $review->rating = str_replace(' Stars', '', $request->rating);
            $review->reviewer_id = Auth::guard('reviewer')->user()->id;
            $review->company_id = $id;
            $review->title = $request->title;
            $review->review_text = $request->review_text;

            if ($review->save()) {
                $this->UploadReviewImage($request, $review->id);
                $company = Company::find($id);

                Session::flash('success', 'Review successfully done');
                return redirect(url('company/profile/' . $company->id . '/' . strtolower(str_replace(' ', '-', $company->company_name))));
            } else {

                Session::flash('error', 'Failed to  review! Unexpected Error. Try Again');
                return redirect(url('company/update_profile'));
            }
        }

        $data = [
            'company' => Company::findOrFail($id)
        ];
        return view('reviewer.review.write_review')->with($data);
    }

    private function UploadReviewImage($request, $review_id)
    {

        request()->validate([

            'review_image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($image = $request->file('review_image')) {
            foreach ($image as $files) {
                $destinationPath = 'storage/uploads/review'; // upload path
                $profileImage = time() . rand(111111, 99999) . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $review_image = new Reviewimage;
                $review_image->review_image = $profileImage;
                $review_image->review_id = $review_id;
                $review_image->save();
            }
        }
    }

    public function delete_review($id)
    {
        $review = Review::find($id);
        if ($review->delete()) {
            Session::flash('success', 'Setting updated successfully');
            return redirect(url('reviewer/profile/' . Auth::guard('reviewer')->user()->id));
        }
    }
}