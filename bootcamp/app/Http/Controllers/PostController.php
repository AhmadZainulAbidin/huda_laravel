<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Schema\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::orderBy('created_at', 'DESC');

        if ($request->has(key:'q')) {
            $post->where ('title', 'LIKE', '%' . $request->g . '%');
        }
        if ($request->has(key:'status')) {
            $post->where ('is_active',  $request->status);
        }
        if ($request->has(key:'from_date')) {
            $from = Carbon::parse($request->from_date)->format(format:'Y-m-d' . '00:00:01');
            $to = Carbon::parse($request->to_date)->format(format: 'Y-m-d' . '23:59:59');

            $post->whereBetween('created_at', [$from, $to]);
        }

            $post = $post->paginate(10);   

        return view('dashboard.post.index', [
            'data' => $post
        ]);
    }
    public function create()
    {
        return view('dasboard.post.create', [
            'data' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
    }

    public function update($id, Request $request)
    {
    }

    public function destroy($id)
    {
    }

    public function show($id)
    {
    }
}