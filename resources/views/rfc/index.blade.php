@extends('layouts.master')
@section('content')
 <div class="row">
        <div class="col-xs-12">
        
          <!-- /.box -->

          <div class="box">
          @if (session('status'))
              <div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ session('status') }}
              </div>
          @endif
            <div class="box-header">
              <h3 class="box-title">RFC Monitoring</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>RFC Number</th>
                  <th>Owner</th>
                  <th>System</th>
                  <th>Description</th>
                  <th>Bussiness Unit</th>
                  <th>Service Affected</th>
                  <th>IS-SPOC</th>
                  <th>Change Requestor</th>
                  <th>Change Datetime</th>
                  <th>Approval Status</th>
                  <th>Execution Status</th>
                  <!-- <th>Remarks</th> -->
                   <th> ..</th>

                </tr>
                </thead>
                <tbody>
                   @forelse($rfcs as $row)
                  <tr>
                  <td>{{{ $row->rfcno}}}</td>
                  <td>{{{ $row->owner}}}</td>
                  <td>{{{ $row->system}}}</td>
                  <td>{{{ $row->description}}}</td>
                  <td>{{{ $row->bu}}}</td>
                  <td>{{{ $row->services_affected}}}</td>
                  <td>{{{ $row->is_spoc}}}</td>
                  <td>{{{ $row->change_requestor}}}</td>
                  <td>{{{ $row->change_datetime}}}</td>
                  <td>{{{ $row->approval_status}}}</td>
                  <td>{{{ $row->execution_status}}}</td>
                  <!-- <td>{{{ $row->remarks}}}</td> -->
                    <td> <a href="rfc/{{$row->id}}/edit"><button type="button" class="btn btn-block btn-primary  btn-xs">Update</button></a>
                  <button type="button" class="btn btn-block btn-danger btn-xs">Delete</button></td> 

                  </tr>
                      @empty
                           <p>no a found</p>
                      @endforelse   
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection