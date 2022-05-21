<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Hash;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Profile::all();
        return view('pages.backend.customer.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  Profile::findorfail($id);
        return view('pages.backend.customer.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'         => 'required',
            'last_name'          => 'required',
            'email'              => 'required | email',
            'phone'              => 'required | numeric | min:10',
            
        ]);
        $profile        = Profile::find($id);
        $user           = User::find($profile->user_id);
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->update();
        if($request->hasFile('profile')){
            $fileName = time().'.'.$request->profile->extension();
            $request['image'] = $fileName;
            $request->profile->move(public_path('uploads'), $fileName);


        }
            $profile->image    = $request['image'] ?? $profile->image;
            $profile->first_name = $request->first_name;
            $profile->last_name  = $request->last_name;
            $profile->phone      = $request->phone;
            $profile->update();
            return redirect()->route('admin.customer.index')->with('message','Customer Update Successfully');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findorfail($id);
        $user    = User::findorfail($profile->user_id);
        $profile->delete();
        $user->delete();
        Session()->flash('message', 'Delete Customer Successfully!');
        return ['status' => 'true'];
    }
}
