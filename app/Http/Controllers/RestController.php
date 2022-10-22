<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\RestModel;

class RestController extends Controller
{
//    public function PaymentAdd(Request $req)
//    {
//        $add = RestModel::create($req->all());
//        return response()->json($add, 201);
//    }

    public function PaymentGet()
    {
        return response()->json(RestModel::get(
            [
                'id',
                'merchant_id',
                'payment_id',
                'status',
                'amount',
                'amount_paid',
                'timestamp',
                'sign'
            ]
        ),
            200);
    }
}
