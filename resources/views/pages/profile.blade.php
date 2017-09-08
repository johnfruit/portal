@extends('layouts.master')

@section('body')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">
                        {{ $married }}
                         {{ $test }}
                          {{ $age }}
                          <p> your age is {{Carbon\Carbon::createFromdate(1993,7,6)->age}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
