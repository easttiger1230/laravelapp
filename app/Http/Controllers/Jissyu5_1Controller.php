<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
>>>>>>> jissyu

class Jissyu5_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
<<<<<<< HEAD
        return view('___(1)___', ['items' => $items]);
=======
        return view('jissyu5_1.index', ['items' => $items]);
>>>>>>> jissyu
    }
    public function show(Request $request)
    {
        if (isset($request->id)) {
<<<<<<< HEAD
            $param = ['id' => ___(2)___];
            $items = DB::select(
                '___(3)___',
=======
            $param = ['id' => $request->id];
            $items = DB::select(
                'select * from people where id = :id',
>>>>>>> jissyu
                $param
            );
        } else {
            $items = DB::select('select * from people');
        }
<<<<<<< HEAD
        return view('___(4)___', ['items' => $items]);
    }

=======
        return view('jissyu5_1.show', ['items' => $items]);
    }
>>>>>>> jissyu
}