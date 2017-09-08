@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-md-6">
          <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Update Telco</h3>
                   </div>
                  <div class="box-body">
                  <form role="form" action="/telco/upload" method="post" >
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label>Payments</label>
                  <input type="text" class="form-control" placeholder="Price"  name="payments" value="{{ $telcos->payments }}">

                 <div class="form-group">
                  <label>New Telco</label>
                  <input type="text" class="form-control" placeholder="Price"  name="payments" value="{{ $telcos->oldtelco }}">
                </div>

                <div class="form-group">
                  <label>Account</label>
                  <input type="text" class="form-control" placeholder="Price"  name="payments" value="{{ $telcos->account }}">
                </div>

                 <div class="form-group">
                  <label>Circuit Site Location</label>
                  <input type="text" class="form-control" placeholder="Price"  name="payments" value="{{ $telcos->circuitsitelocation
}}">
                </div>
                <div class="form-group">
                  <label>Site Code</label>
                  <input type="text" class="form-control" placeholder="Price"  name="payments" value="{{ $telcos->sitecode }}">
                </div>

                <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" style="width: 100%;" name="status">
                  <option selected="selected" value="">--</option>
                  <option value="Actice" {{($telcos->status == 'Actice'? "selected":"")}}>Active</option>
                  <option value="Deactivated" {{($telcos->status == 'Deactivated'? "selected":"")}}>Deactivated</option>
                </select>
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