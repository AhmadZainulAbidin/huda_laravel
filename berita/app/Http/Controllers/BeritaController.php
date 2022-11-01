<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
    $data = Berita::orderBy('id')->get();

    return response()->json([
        'succes' => true,
        'data' => $data
    ]);

    }

    public function store(Request $request )

    {

    $data = [
        'judul' => $request->judul,
        'konten' => $request->konten,
    ];
    
    Berita::create($data);
    return response()->json([
        'success' => true,
        'msg' => 'data berhasil di buat'
    ]);
    }
    public function show($id)
    {
        $data = Berita::where('id')->get();

    if ($data) {
        return response()->json([
            'succes' => true,
            'data' => $data
        ]);
    }else{
        return '404';

    }
        return response()->json([
            'succes' => true,
            'data' => $data
        ]);

    }
    public function update (Request $request, $id)
    {
        $data = Berita::where('id', $id)->first();
        $data->update([
            'judul' => $request->judul,
            'konten' => '$request->konten'
        ]);

        return response()->json([
            'success' => true,
            'msg' => 'data berhasil di update'
        ]);
    }
    public function destroy($id)
    {
        Berita::where('id', $id)->first()->delete();
        return response()->json([

        
        'msg' => 'data berhasil di hapus'
        ]);
    }


}   