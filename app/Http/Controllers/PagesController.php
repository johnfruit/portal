<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index()
    {
    	if(View::exists('pages.index')) 
    	// return view('pages.index',['text' => '<b>laravel</b>']);
     	return view('pages.index')
     		->with('text','<b>Laravel</b>')
     		->with('name','nicole')
     		->with(['location' => 'pinas', 'planeta' => 'mundo']);
   		else
   	    return 'no view available';
    }


    public function profile()
    {
        return view('pages.profile');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    public function blade()
    {
        $gender = 'male';
        $text = 'hello there';
        return view('blade.bladetest');
    }
}
