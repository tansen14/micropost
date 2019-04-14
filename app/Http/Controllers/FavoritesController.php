<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $postId)
    {
        \Auth::user()->favorite($postId);
        return back();
    }

    public function destroy($postId)
    {
        \Auth::user()->unfavorite($postId);
        return back();
    }
}
