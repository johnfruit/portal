@extends('layouts.app')

@section('content')
<div class="row">
	<div col-md-6 col-md-offset-3>
				<h3> {{$users->total()}} total users</h3>
				<b>In this page {{$users->count()}} users</b>
			<ul class="list-group">
				@forelse($users as $user)
					<li class="list-group-item" style="margin-top: 20px">
								<span>
									{{ $user->name}}
								</span>

								<span class="pull-right clearfix">
									joined ({{ $user->created_at->diffForHumans()}})
									<buttom class="btn btn-xs btn-primary">
									follow
									</buttom>
								</span>
							</li>
				@empty
					<p>No users available</p>
				@endforelse
					{{ $users->links() }}
				</ul>


			<!-- 	@if(count($users) > 0)
					<ul class="list-group">
						@foreach($users as $user) 
							<li class="list-group-item" style="margin-top: 20px">
								<span>
									{{ $user->name}}
								</span>

								<span class="pull-right clearfix">
									joined ({{ $user->created_at->diffForHumans()}})
									<buttom class="btn btn-xs btn-primary">
									follow
									</buttom>
								</span>
							</li>
						@endforeach
						{{ $users->links()}}
				</ul>
				@else
					<p>No users available</p>
				@endif
 -->

				
	</div>
</div>
@endsection

