<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Web;
use DB; 
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use App\Services\PayUService\Exception;
use App\Http\Controllers\Controller;
use Excel;
use Validator;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UploadRequest;


class WebController extends Controller
{

    public function index()
    {
        $webs = DB::table('webs')->get();  
        
        
        return view('web.index',compact('webs'));
    }
   
    public function create()
    {
        return view('web.create');
    }


    public function upload(UploadRequest $request)
    {
                         $path = public_path('file/'.$request->file_ex);
                      
                         $data = Excel::load($path, function($reader) {
                            })->get();   
                          // dd($data);

                         if(!empty($data) && $data->count())  {

                                        foreach ($data as $key => $value) {
                                             $insert[] = ['BU' => $value->bu,
                                                          'type_of_serv' => $value->type_of_service,
                                                          'details' => $value->details,
                                                          'exp_date' => $value->expiry_date,
                                                          'provider' => $value->provider,
                                                          'price' => $value->price];
                                        }
                                            if(!empty($insert)){
                                                DB::table('webs')->insert($insert);
                                                return redirect('web')->with('status', 'successfully uploaded!');
                                            }
                           }                         
    }


    public function store(PostRequest $request)
    {
  
      DB::table('webs')->insert($request->except('_token','submit'));
      return redirect('web')->with('status', 'successfully added!');                        
    }

    public function show($id)
    {
         $webs = DB::table('webs')->whereId($id)->first();
         return view('web.show',compact('webs'));
    }


    public function edit($id)
    {
        $webs = DB::table('webs')->whereId($id)->first();
        return view('web.edit',compact('webs'));
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
