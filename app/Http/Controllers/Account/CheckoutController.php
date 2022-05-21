<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Order;
use App\Models\Address;
use App\Providers\PaymentGateway;
use Illuminate\Support\Facades\DB;
use ShoppingCart;

class CheckoutController extends Controller
{
    //
    public function index($type = 'checkout'){
        $profile = Profile::where('user_id', auth()->user()->id)->first();
            return view('pages.frontend.'.$type, compact('profile'));
    }

    public function store(Request $request, PaymentGateway $paymentGateway)
    {
        $request->validate([
            'address.first_name'  => 'required',
            'address.last_name'   => 'required',
            'address.country'     => 'required',
            'address.address_line1' => 'required',
            'address.postal_code' => 'required',
            'address.mobile'       => 'required',
            'address.city'                => 'required',
        ]);
        $ids = [];
        $cart = [];
        $product_ordered = ShoppingCart::all();
        foreach($product_ordered as $key => $row){
            $item = ShoppingCart::get($key);
            array_push($cart, $item);
            array_push($ids, $item['id']);
        }
        // Begin Transaction
        DB::beginTransaction();
        try {
            
        //Create Order on RazorPay
        $order_res = $paymentGateway->makeOrder($request->amount);

        //Create Or Update Address
        $user_id = auth()->user()->id;
            $address = Address::updateOrCreate(
                ['id' => $request->address, 'status' => 1],
                [
                    'user_id'          => $user_id,
                    'first_name'       => $request->address['first_name'],
                    'last_name'        => $request->address['last_name'],
                    'city'             => $request->address['city'],
                    'country'          => $request->address['country'],
                    'postal_code'      => $request->address['postal_code'],
                    'mobile'           => $request->address['mobile'],
                    'email'            => $request->address['email'],
                    'notes'            => $request->address['notes'],
                    'address_line1'    => $request->address['address_line1'],
                    'status'           =>1,
                ]
            );
         // Create Order Draft
         $booking = new Order;
         $booking->user_id          = auth()->user()->id;
         $booking->order_id         = $order_res->id;
         $booking->address_id       = $address->id;
         $booking->product_id       = implode(',',$ids);
         $booking->products         = json_encode($cart);
         $booking->amount           = $request->amount;
         $booking->payment_type     = 'online';
         $booking->status           = 0;
         $booking->save();

         DB::commit();
         ShoppingCart::destroy();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
        }
         return  [
            'status'     => true,
            'order_id'   => $order_res->id,
         ];

    }
}
