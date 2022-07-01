<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kouka1_1Controller extends Controller
{
    public function index()
    {
        return view('Kouka1_1.input', $data');
    }
}