@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-md-6">
          <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Upload RFC List</h3>
                   </div>
                  <div class="box-body">
                  <form role="form" action="/rfc/upload" method="post" >
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile" name="file_ex">

                        <p class="help-block">Upload CSV Files</p>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-success" name="submit" value="upload">Upload</button>
                      </div>
                  </div>
              </div>
        </div>
</div>        


@endsection