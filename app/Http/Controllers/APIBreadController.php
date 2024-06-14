<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\royalebread_584;

class APIBreadController extends Controller
{
    public function cariRoti(Request $request)
    {
        $cari = $request->input('q');
        $roti = royalebread_584::where('nama', 'LIKE', "%$cari%")->get();

        if($roti->isEmpty())
        {
            return response()->json([
                'success' => false,
                'data' => 'Data Tidak Ditemukan'

            ], 400)->header("Access-Control-Allow-Origin", "http://127.0.0.1:5500");
        } else {
            return response()->json([
                'success' => true,
                'data' => $roti
            ], 200)->header("Access-Control-Allow-Origin", "http://127.0.0.1:5500");
        }
    }
}
