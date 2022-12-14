@extends('layouts.admin_app')
@section('content')
	<div class="container" style="margin-top: 1%;">
		@if(Session::has('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
            </div>
          @endif
		<div class="row justify-content-center">
	        <div class="col-md-11">
	        	<div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">User Data</div>
	            	<div style="overflow-x: scroll;">
		              <table class="table table-bordered table-striped" id="system_table">
		                <thead>
			                <tr>
			                  <th>ID</th>
			                   <th>Role</th>
			                  <th>Name</th>
			                  <th>Email</th>
			            
			                  <th>Created At</th>
			                  <th colspan="2" style="text-align: center;">Action</th>
			                </tr>
		                </thead>
		                <tbody>
		               		@foreach ($users as $user_data)
			                <tr>
				                <td>{{ $user_data->id }}</td>
				                <td>{{ $user_data->role }}</td>
				                <td>{{ $user_data->name }}</td>
				                <td>{{ $user_data->email }}</td>
				                <td>{{ $user_data->created_at }}</td>
				                <td><a href="delete/{{ $user_data['id'] }}"  class="btn btn-danger">delete</a></td>
				                <td><a href="edit_users/{{ $user_data['id'] }}"  class="btn btn-info">Edit</a></td>
			                </tr>
		              @endforeach
		              </tbody>
             		</table>
				</div>
				<!-- pagination -->
			
	        </div>
	    </div>
    </div>
	
@endsection