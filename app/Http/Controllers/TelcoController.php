<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telco;
use DB; 
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use App\Services\PayUService\Exception;
use App\Http\Controllers\Controller;

use Excel;
use Validator;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UploadRequest;

class TelcoController extends Controller
{

    public function index()
    {
         $telcos = DB::table('telcos')->get();

         return view('telco.index',compact('telcos'));

          // return  var_dump($telcos);

    }

    public function create()
    {
        return view('telco.create');
    }

    public function store(Request $request)
    {
        
        return $request->all();
    }   


    public function upload(UploadRequest $request)
    {
         $path = public_path('file/'.$request->file_ex);
                      
                         $data = Excel::load($path, function($reader) {
                            })->get();   
                          // dd($data);

                         if(!empty($data) && $data->count())  {

                                        foreach ($data as $key => $value) {
                                             $insert[] = ['sitename' => $value->sitename,
                                                          'sitecode' => $value->sitecode,
                                                          'mrc' => $value->mrc,
                                                          'BW' => $value->bw,
                                                          'telco' => $value->telco,
                                                          'startofcontract' => $value->startofcontract,
                                                          'endofcontract' => $value->endofcontract,
                                                          'name' => $value->name,
                                                          ];
                                        }

                                if(!empty($insert)){
                                                DB::table('telcos')->insert($insert);
                                                return redirect('telco')->with('status', 'successfully uploaded!');
                                            }
                           }         
    }

    public function show($id)
    {
        $telcos = DB::table('telcos')->whereId($id)->first();

        return view('telco.show',compact('telcos'));

    }

    public function     export(Request $request)
    {
        // $table      = $request->route('table');
        // $model      = $this->loadModel($table);
        // $society_id = $request->route('id_me');

        
        $telcos = DB::table('telcos')->get();

        $rows = $rows->toArray();

        Excel::create($table, function($excel) use ($rows, $table)
        {
            $excel->setTitle("Exportation des " . $table);

            $excel->sheet('shops', function($sheet) use ($rows)
            {
                $sheet->fromArray($rows);

            });
        })->download('xls');
    }

    public function reports()
    {
      
    }

    public function edit($id)
    {
        $telcos = DB::table('telcos')->whereId($id)->first();

        return view('telco.edit',compact('telcos'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
