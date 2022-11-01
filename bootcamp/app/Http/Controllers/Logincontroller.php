<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function index()
    {
        $data = User::orderBy('id')->get();

        return view('login', compact(['data']));
    }
    public function store(Request $request)
    {
        $data = [
        'email' => $request->email, 
        'password' =>$request->password,
        'name' => $request->name,
        ];

        User::create($data);

        return 'pendaftaran succses';
    }
}
