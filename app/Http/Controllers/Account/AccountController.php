<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Order;
use Image;
class AccountController extends Controller
{
    //
    public function index(){
        return redirect()->route('dashboard');
    }
    //
    public function dashboard(){
        $profile = Profile::where('user_id',auth()->user()->id)->first();
        return view('pages.account.dashboard', compact('profile'));
    }
   //
    public function profile(){
        $profile = Profile::where('user_id',auth()->user()->id)->with('user')->first();
        return view('pages.account.profile', compact('profile'));
    }

    public function updateProfile(Request $request, $id){
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'      =>  'required | min:10 |max: 12',
            'address'    =>  'required ',
            'city'       =>  'required ',
            'state'      =>  'required ',
            'country'    =>  'required ',
            'pincode'    =>  'required ',

        ]);
        if($request->hasFile('image')){
            $fileName = time().'.'.$request->image->extension();
            $request['images'] = $fileName;

            $thumbnailImage = Image::make($request->image);
            $thumbnailPath  = public_path('uploads/user/thumbnail');
            $destinationPath  = public_path('uploads/user/images');

            $thumbnailImage->resize(430, 440, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbnailPath.'/'.$fileName);
            $request->image->move($destinationPath, $fileName);
        }

            $profile = Profile::find($id);
            $profile->first_name = $request->first_name;
            $profile->last_name  = $request->last_name;
            //$profile->email      = $request->email    ;
            $profile->phone      = $request->phone;
            $profile->address    = $request->address;
            $profile->city       = $request->city;
            $profile->state      = $request->state;
            $profile->country    = $request->country;
            $profile->pincode    = $request->pincode;
            $profile->image      = $request['images'];
            $profile->update();
            return redirect()->route('profile')->with('message','Your Profile is Updated Successfully');
    }
}
