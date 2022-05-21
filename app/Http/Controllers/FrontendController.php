<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.frontend.home', compact('products'));
    }

    public function about()
    {
        return view('pages.frontend.about');
    }

    public function contact()
    {
        return view('pages.frontend.contact');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'full name' => 'required',
            'email'   => 'required',
            'message'    => 'required',

        ]);

        $enquiries = new Enquiry;

        $enquiries-> fname = $request->fname;
        $enquiries-> email = $request->email;
        $enquiries-> message = $request->message;

        $enquiries->save();
        return redirect()->back()->with('message',"Thank You Contact  Successfully");


    }

    public function home()
    {
        return view('pages.frontend.index');
    }

}
