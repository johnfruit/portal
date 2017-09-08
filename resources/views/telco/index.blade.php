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
              <h3 class="box-title">Telco Monitoring</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SiteName</th>
                  <th>SiteCode</th>
                  <th>MRC</th>
                  <th>BW</th>
                  <th>TELCO</th>
                  <th>Start of Contact</th>
                  <th>End of Contact</th>
                   <th> ..</th>

                </tr>
                </thead>
                <tbody>


                   @forelse($telcos as $row)
                  <tr>
                  
                  <td><a href="telco/{{$row->id}}">{{{ $row->sitename }}}</a></td>
                  <td>{{{ $row->sitecode}}}</td>
                  <td>{{{ $row->mrc}}}</td>
                  <td>{{{ $row->BW }}}</td>
                  <td>{{{ $row->telco }}}</td>
                  <td>{{{ $row->startofcontract }}}</td>
                  <td>{{{ $row->endofcontract }}}</td>
                    <td> <a href="telco/{{$row->id}}/edit"><button type="button" class="btn btn-block btn-primary  btn-xs">Update</button></a>
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