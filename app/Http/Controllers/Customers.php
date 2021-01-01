<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Customers extends Controller
{
    public function all()
    {
        $data = Customer::all();

        return response()->json([
            'status'        => '200 OK',
            'data'          => $data
        ]);
    }
    public function select($id)
    {
        $data = Customer::where('customer_id', '=', $id)->first();

        return response()->json([
            'status'        => '200 OK',
            'data'          => $data
        ]);
    }
}
