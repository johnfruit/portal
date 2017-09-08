<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
         $this->validate($request->all(), [
                                'details' => 'required|unique:webs|max:255',

    ]);

    }



}
