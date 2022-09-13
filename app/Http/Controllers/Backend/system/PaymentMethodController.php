<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function paymentMethod(){
        return view('backend.system.payment.create-paymentmethod');
    }
}
