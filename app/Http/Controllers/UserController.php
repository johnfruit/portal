<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
class UserController extends Controller
{
    public function index()
    {
    	// 	$users = ['0' =>[
					// 'first_name' => 'john',
					// 'last_name' => 'laddaran',
					// 'location' => 'camarin'
					// ],
					// '1' =>[
					// 'first_name' => 'cherie',
					// 'last_name' => 'laddaran',
					// 'location' => 'palmera'
					// ] 
        
					// ];

          $users = User::paginate(10);  


                    // print_r($users);
                    // return $users;

					return view('admin.users.index',compact('users'));
    }

    public function create()
    { 
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	User::create($request->all());
    	return 'success';
       return $request->all();
    }

}
