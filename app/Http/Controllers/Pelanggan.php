<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MPelanggans;

class Pelanggan extends Controller
{

    public function getAll()
    {
        $data = MPelanggans::all();

        return response()->json([
            'status'        => '200 OK',
            'method'        => 'GET',
            'message'       => 'It Works !',
            'data'          => $data
        ]);
    }
}
