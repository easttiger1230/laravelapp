<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kouka1_2Request;

class Kouka1_2Controller extends Controller
{
    public function index()
    {
        return view('Kouka1_1.input');
    }

    public function post(Request $request)
    {
        //全データの取得
        $data = $request->all();

        return view('Kouka1_2.output', ['data' => $data]);
    }
}