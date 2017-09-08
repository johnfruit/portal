@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-md-6">

        @if ($errors->any())
              <div class="alert alert-danger alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Add Website</h3>
            </div>
            <div class="box-body">
            <form role="form" action="/web" method="post">

          <!-- <form action="/web" method="POST" class="form-horizontal"> -->
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label>Bussiness Unit</label>
                <select class="form-control select2" style="width: 100%;" name="BU">
                  <option selected="selected" value="">--</option>
                  <option value="CCD" {{(old('BU') == 'CCD'? "selected":"")}}>Commercial Centers Division</option>
                  <option value="OBD" {{(old('BU') == 'OBD'? "selected":"")}}>Office Building Division</option>
                  <option value="RDB" {{(old('BU') == 'RDB'? "selected":"")}}>Residential Builing Division</option>
                  <option value="RC" {{(old('BU') == 'RC'? "selected":"")}}>Robinsons Communities</option>
                  <option value="RHI" {{(old('BU') == 'RHI'? "selected":"")}}>Robinsons Home Inc.</option>
                  <option value="RHR" {{(old('BU') == 'RHR'? "selected":"")}}>Robinsons Hotels and Resorts</option>
                </select>
              </div>


             
              <div class="form-group">
                <label>Type of Service</label>
                <select class="form-control select2" style="width: 100%;" name="type_of_serv">
                  <option value=""> - - - </option>
                  <option value="DN" {{(old('type_of_serv') == 'DN'? "selected":"")}}>Domain Name</option>
                  <option value="DNS" {{(old('type_of_serv') == 'DNS'? "selected":"")}}>Domain Name Service</option>
                  <option value="SSLC" {{(old('type_of_serv') == 'SSLC'? "selected":"")}}>SSL Certificate</option>
                  <option value="WF" {{(old('type_of_serv') == 'WF'? "selected":"")}}>Web Forwarding</option>
                  <option value="WH" {{(old('type_of_serv') == 'WH'? "selected":"")}}>Web Hosting</option>
                </select>
              </div>

                <div class="form-group">
                  <label>Details</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="details" value="{ { old('details') } }"></textarea>
                </div>


                <div class="form-group">
                <label>Expiry Date:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="exp_date"  value="{ { old('exp_date',date('Y-m-d')) } }">
                </div>
                <!-- /.input group -->
              </div>
<!-- 
              {{old('exp_date')}} -->


               <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time picker:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

              <div class="form-group">
                <label>Provider</label>
                <select class="form-control select2" style="width: 100%;" name="provider">
                  <option> - - - </option>
                  <option value="DNS Made Easy" {{(old('provider') == 'DNS Made Easy'? "selected":"")}}>DNS Made Easy</option>
                  <option value="dotPH" {{(old('provider') == 'dotPH'? "selected":"")}}>dotPH</option>
                  <option value="Global Sign" {{(old('provider') == 'Global Sign'? "selected":"")}}>Global Sign</option>
                  <option value="Media Temple" {{(old('provider') == 'Media Temple'? "selected":"")}}>Media Temple</option>
                  <option value="Network Solutions" {{(old('provider') == 'Network Solutions'? "selected":"")}}>Network Solutions</option>
                  <option value="Pangalan" {{(old('provider') == 'Pangalan'? "selected":"")}}>Pangalan</option>
                </select> 
              </div>

                <div class="form-group">
                  <label>Price</label>
                  <input type="text" class="form-control" placeholder="Price"  name="price" value="{{ old('price') }}">
                </div>


            <div class="form-group">
              <button type="submit" class="btn btn-success" name="submit" value="save">Save</button>
            </div>
                    
            </div>
            <!-- /.box-body -->
            </form>

            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Upload Website</h3>
              </div>
                  <div class="box-body">
                  <form role="form" action="/web/upload" method="post" >
                  <!-- {{ method_field('UPLOAD')}} -->
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
          <!-- </form> -->
          <!-- /.box -->


@endsection