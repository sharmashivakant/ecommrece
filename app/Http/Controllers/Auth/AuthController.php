<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth, Session, Cache;
use Validator;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index()
    {
        if(Auth::check()){
            return redirect()->intended('backend/dashboard');
        }else{
            return redirect()->intended('account/signin/');
        }
    }

    /**
     * Open User signin form
    */
    public function signin(){
        //
        return view('pages.auth.loginnew');
    }

    public function register(Request $request){

        if($request->isMethod('POST')){

            $validator = Validator::make($request->all(),[
                'email'         => 'required|unique:users',
                'first_name'    => 'required',
                'last_name'     => 'required',
                'phone'         => 'required',
                'password'      =>'required|min:6',
                'confirm_password'=>'required|same:password|min:6',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
            }
        $user = new User;
        $user->email       = $request->input('email');
        $user->password    = Hash::make($request->input('password'));
        $user->save();
        $request['user_id'] = $user->id;
        if($user != null){
            $profile = new Profile;
            $profile->create($request->all());
            Auth::loginUsingId($user->id);
        }
        $redirectTo = 'account/dashboard';
        return redirect()->intended($redirectTo);
        //return redirect()->back()->with('message', 'Thank You Register Successfully!');

        }
        return view('pages.auth.register');
    }

    /**
    * Authenticate user and Logged in
    */
    public function authenticate(Request $request){
        //
        $validator = Validator::make($request->all(),[
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication passed...
            $redirectTo = 'account/dashboard';
            return redirect()->intended($redirectTo);
        }
        else {
        // Authentication failed...
        return redirect()->back()->with('message', 'Invalid Username or Password');
        }

    }

    /**
    * Signout current signed in user
    */
    public function signout(){
        //
        Auth::logout();
        Session::flush();
        Cache::flush();
        return redirect()->intended('user/signin');
    }

    // public function dashboard()
    // {
    //     return view('pages.auth.dashboard');
    // }

    // public function profile()
    // {
    //     return view('pages.auth.profile');
    // }

    // public function order()
    // {
    //     return view('pages.auth.order');
    // }

}
