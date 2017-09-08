@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">

 <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Update Web Service</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="/web" method="POST" class="form-horizontal">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="control-group">
              <label class="control-label">Bussiness Unit</label>
              <div class="controls">
                <select name="BU">
                <option value=""> - - - </option>
                  <option value="CCD" {{ ($webs->BU ==='CCD' ? 'selected' : '')}}>Commercial Centers Division</option>
                  <option value="OBD" {{ ($webs->BU ==='OBD' ? 'selected' : '')}}>Office Building Division</option>
                  <option value="RBD" {{ ($webs->BU ==='RDB' ? 'selected' : '')}}>Residential Builing Division</option>
                  <option value="RCM" {{ ($webs->BU ==='RCM' ? 'selected' : '')}}>Robinsons Communities</option>
                  <option value="RHI" {{ ($webs->BU ==='RHI' ? 'selected' : '')}}>Robinsons Home Inc.</option>
                  <option value="RHR" {{ ($webs->BU ==='RHR' ? 'selected' : '')}}>Robinsons Hotels and Resorts</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Type of Service</label>
              <div class="controls">
                <select name="type_of_serv">
                 <option value=""> - - - </option>
                  <option value="DN" {{ ($webs->type_of_serv ==='DN' ? 'selected' : '')}}>Domain Name</option>
                  <option value="DNS"{{ ($webs->type_of_serv ==='DNS' ? 'selected' : '')}}>Domain Name Service</option>
                  <option value="DFS" {{ ($webs->type_of_serv ==='DFS' ? 'selected' : '')}}>Domain Forwarding Service</option>
                  <option value="SSLC"{{ ($webs->type_of_serv ==='SSLC' ? 'selected' : '')}}>SSL Certificate</option>
                  <option value="WF" {{ ($webs->type_of_serv ==='WF' ? 'selected' : '')}}>Web Forwarding</option>
                  <option value="WH" {{ ($webs->type_of_serv ==='WH' ? 'selected' : '')}}>Web Hosting</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Details</label>
              <div class="controls">
                <input type="text" name="details"  class="span11" placeholder="Details" value="{{$webs->details}}"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Expiration Date</label>
              <div class="controls">
                <input type="date" name="exp_date" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span11">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>

              <div class="control-group">
              <label class="control-label">Provider</label>
              <div class="controls">
                <select name="provider">
                  <option> - - - </option>
                  <option>DNS Made Easy</option>
                  <option>dotPH</option>
                  <option>Global Sign</option>
                  <option>Media Temple</option>
                  <option>Network Solutions</option>
                  <option>Pangalan</option>

                </select>
              </div>
           <div class="control-group">
              <label class="control-label">Price</label>
              <div class="controls">
                <div class="input-append">
                  <input type="text" name="price" placeholder="5.000" class="span11" value="{{$webs->price}}">
                  <span class="add-on">$</span> </div>
              </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>

     </div>

     </div>
      </div>
     </div> 

@endsection