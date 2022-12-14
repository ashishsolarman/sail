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
	        	<div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Users List<a href="{{route('register')}}" class="btn btn-info" style="float:right">Register User</a></div>
	            	<div style="overflow-x: scroll;">
		              <table class="table table-bordered table-striped" id="system_table">
		                <thead>
			                <tr>
			                  <th>#</th>
			                  <th>Photo</th>
			                  <th>Name</th> 
			                  <th>Mobile Number</th>
			                  <th>Designation</th>
			                  <th>Organisation</th>
			                 
			              
			                  <th colspan="2" style="text-align: center;">Action</th>
			                </tr>
		                </thead>
		                <tbody>
		               		@foreach ($users as $value)
			                <tr>
				                <td> {{$value->id}} </td>
				                <td><img src="{{asset('emp_images')}}/{{$value->emp_image}}" width="400px" height="50px" ></td>
				                <td> {{$value->name}}</td>
				                <td> {{$value->mobile}}</td>
				                <td> {{$value->desig_desc}}</td>
				                <td> {{$value->org}}</td>
				                 
				               
				                   @php $viewID = Crypt::encrypt($value->id) @endphp
				                <td><a href="view_user/{{ $viewID}}"  class="btn btn-warning">view</a></td>
				                 @php $editID = Crypt::encrypt($value->id) @endphp
				                <td><a href="edit_user/{{ $editID}}"  class="btn btn-info">Edit</a></td>
				                <td><a href="delete_user/{{ $value->id}}"  class="btn btn-danger">delete</a></td>

				               
			                </tr>
		              @endforeach
		              </tbody>
             		</table>
				</div>
				<!-- pagination -->
			{{ $users->links('pagination::bootstrap-4') }}
	        </div>
	    </div>
    </div>
	
@endsection