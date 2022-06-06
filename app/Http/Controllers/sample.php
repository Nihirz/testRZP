<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    private $razorpayId = "rzp_test_noh5eBX4WtkkU1";
    private $razorpayKey = "R8buy5yRlO9mYvUj9KDa8x8R";
    public function initiate(Request $request)
    {

        $recepetId = Str::random(20);
        $api = new Api( env('RAZORPAY_ID') , env('RAZORPAY_KEY'));
        $order = $api->order->create(array(
            'receipt'         => $recepetId,
            'amount'          => $request->all()['amount'] * 100, // 39900 rupees in paise
            'currency'        => 'INR'
            )
        );

        $response = [
            'orderId' => $recepetId,
            'razorpayId' => $this->razorpayId,
            'amount' =>$request->all()['amount'] * 100,
            'name' =>$request->all()['name'],
            'currency' =>'INR',
            'email' =>$request->all()['email'],
            'contactNumber' =>$request->all()['contactNumber'],
            'address' =>$request->all()['address'],
            'description' => 'Test Description',
        ];

        return view('payment-page',compact('response'));
    }

}
