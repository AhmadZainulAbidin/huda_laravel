<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihancontroller extends Controller
{
    public function showMyname()
    {
        $data = [
            "name" => "lio ahmad",
            "age" => "19",
            "addres" => "karanganyar paiton probolinggo, indonesia"

        ];
        return view('latihan.myname', compact(['data']));
    }
}
