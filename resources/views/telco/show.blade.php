@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-md-6">
          <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">View Data</h3>
                   </div>
                  <div class="box-body">
                  
                
                 <div class="form-group">
                  <label>Site Name:</label>
                  <input type="text" class="form-control" placeholder="Price"  name="payments" value="{{ $telcos->sitename}}">
                </div>

          
        
                <div class="form-group">
                  <button type="submit" class="btn btn-success" name="submit">Save</button>
                </div>
                                  </div>
                  </div>
              </div>
        </div>
</div>        
@endsection