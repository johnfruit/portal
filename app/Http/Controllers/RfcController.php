<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rfc;
use DB; 
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use App\Services\PayUService\Exception;
use App\Http\Controllers\Controller;

use Excel;
use Validator;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UploadRequest;

class RfcController extends Controller
{

    public function index()
    {
        $rfcs = DB::table('rfcs')->paginate(15);
        return view('rfc.index',compact('rfcs'));
    }

    public function create()
    {
        return view('rfc.create');
    }

    public function store(Request $request)
    {
       
    }
    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        
    }

    public function upload(UploadRequest $request)
    {
           // $path = public_path('file/'.$request->file_ex);
            // $path = ('C/file/'.$request->file_ex);

            $path = ('C:\files/' . $request->file_ex);
      
                         $data = Excel::load($path, function($reader) {
                            })->get();   

                         if(!empty($data) && $data->count())  {



                        foreach ($data as $key => $value) {

                          if($exists = $rfcs = DB::table('rfcs')->where('rfcno', '=', $value->rfc_number)->first()) {
                                // update email
                            return 'update'.$value->rfc_number;
                            }
                            else {
                                                   $insert[] = ['rfcno' => $value->rfc_number,
                                                      'owner' => $value->owner,
                                                      'system' => $value->system,
                                                      'description' => $value->description,
                                                      'bu' => $value->business_unit,
                                                      'services_affected' => $value->services_affected,
                                                      'is_spoc' => $value->is_spoc,
                                                      'change_requestor' => $value->change_requestor,
                                                      'change_datetime' => $value->change_date_time,
                                                      'duration' => $value->durationmins,
                                                      'downtime' => $value->downtimemins,
                                                      'approval_status' => $value->approval_status,
                                                      'execution_status' => $value->execution_status,
                                                      'document_link' => $value->document_link,
                                                      'remarks' => $value->remarks
                                                      ];

                                                DB::table('rfcs')->insert($insert);
                                                // return redirect('rfc')->with('status', 'successfully uploaded!');   

                            }

                         }


                                    
                           }         
    }



}
