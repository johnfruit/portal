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
              <h3 class="box-title">Web Monitoring</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Bussiness Unit</th>
                  <th>Type of Service</th>
                  <th>Details</th>
                  <th>Expiration Date</th>
                  <th>Provider</th>
                  <th>Price</th>
                </tr>
                </thead>
                <tbody>
                   @forelse($webs as $web)
                  <tr>
                  <td>{{{ $web->BU }}}</td>
                  <td>{{{ $web->type_of_serv }}}</td>
                  <td>{{{ $web->details }}}</td>
                  <td>{{{ $web->exp_date }}}</td>
                  <td>{{{ $web->provider }}}</td>
                  <td>{{{ $web->price }}}</td>
                  </tr>
                      @empty
                           <p>no a found</p>
                      @endforelse   
                </tbody>
                <tfoot>
               <!--  <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr> -->
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