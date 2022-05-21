<?php

namespace App\Providers;

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Illuminate\Support\Str;

class PaymentGateway
{
    private $apiKey;
    private $apiSecret;
    private $paymentApi;
    private $paymentCapture;
    private $currency;
    private $amount;

    public function __construct()
    {
        $this->apiKey     = env('RAZORPAY_KEY');
        $this->apiSecret  = env('RAZORPAY_SECRET');
        $this->paymentApi = new Api($this->apiKey, $this->apiSecret);
        //
        $this->paymentCapture = true;
        $this->currency = 'INR';
        $this->amount   = 0;
    }

    public function info(){
        return [
            'apiKey' => env('RAZORPAY_KEY'),
            'secret' => env('RAZORPAY_SECRET'),
        ];
    }

    public function makeOrder($amount)
    {
        $receiptId = Str::random(16);
        $order = $this->paymentApi->order->create([
            'receipt' => $receiptId,
            'amount'   => $amount*100,
            'currency' => $this->currency,
            'payment_capture' => $this->paymentCapture,
        ]);
        return $order;
    }

    public function getOrder($id)
    {
        $order = $this->paymentApi->order->fetch($id);
        return $order;
    }

    public function pay($order)
    {
        $orderPrepare = json_encode([
            "key"       => $this->apiKey,
            "amount"    => $order['amount'],
            "name"      => "ExelArt",
            "description" => "Artwork Order",
            "image"       => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
            "prefill"     =>
            [
                "name"    => "Daft Punk",
                "email"   => "customer@merchant.com",
                "contact" => "9878883189",
                "method"  => "card",
            ],
            "theme"  =>
            [
                "color"   => "#2D9F61"
            ],
            "order_id"    => $order['id'],
        ]);
        return $orderPrepare;
    }

    public function verifyPayment($orderID, $payment_id, $signature)
    {
        $success = true;
        $validation   = "Payment Failed";
        //
        try
        {
            $attributes = array(
                'razorpay_order_id'   => $orderID,
                'razorpay_payment_id' => $payment_id,
                'razorpay_signature'  => $signature
            );
            $this->paymentApi->utility->verifyPaymentSignature($attributes);
        }
        catch(SignatureVerificationError $e)
        {
            $success = false;
            $validation = 'Razorpay Error : ' . $e->getMessage();
        }
        if($success == true){
            $validation = 'Payment ID: '.$payment_id;
        }
        return [
            'status'  => $success,
            'message' => $validation,
            'payment_id' => $payment_id,
        ];
    }
}
