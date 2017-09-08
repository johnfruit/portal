<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ProfileController extends Controller
{
    public function profile($username)
    {
    	$user = User::whereEmail($username)->first();
    	// dd($user);
    	return view('admin.users.profile',compact('user'));
    }
}
