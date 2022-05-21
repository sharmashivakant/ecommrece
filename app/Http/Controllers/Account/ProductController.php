<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function order(Request $request)
    {
         //
         if($request->has('error')){
            //
            return view('pages.booking-status',[
                'status' => false,
                'data'   => $request->all(),
            ]);
        }else{
            //
            $orderID = $request['razorpay_order_id'];
            $booking = Order::where('order_id',$orderID)->first();
            $booking->update([
                'payment_status' => 1,
                'status'         => 1
            ]);
            $payment = new Payment;
            $payment->user_id    = auth()->user()->id;
            $payment->order_id   = $orderID;
            $payment->payment_id = $request['razorpay_payment_id'];
            $payment->amount     = $booking->amount;
            $payment->signature  = $request['razorpay_signature'];
            $payment->status     = 1;
            $payment->save();
            return view('pages.frontend.status',[
                'status' => true,
                'data'   => $request->all(),
            ]);
        }
    }
}
