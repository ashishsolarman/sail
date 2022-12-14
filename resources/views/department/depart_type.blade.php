@extends('layouts.admin_app')
@section('css')
    
   
@endsection
@section('content')
	<!-- <div class="pull-right">
		<button class="btn btn-primary"><a href="{{route('add_depart_level_form')}}">Add Department Level</a></button>
	</div> -->
	<div class="container" style="margin-top: 1%;">
		@if(Session::has('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
            </div>
          @endif
		<div class="row justify-content-center">
	        <div class="col-md-11">
	        	<div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Department Type  List<a href="{{route('add_depart_type_form')}}" class="btn btn-info" style="float:right">Add Department Type</a></div>
	            	<div style="overflow-x: scroll;">
		              <table class="table table-bordered table-striped" id="system_table">
		                <thead>
			                <tr>
			                  <th>#</th>
			                  <th>Type Code</th>
			                  <th>Description</th>
			                  <th colspan="2" style="text-align: center;">Action</th>
			                </tr>
		                </thead>
		                <tbody>
	               			@foreach ($data as $value)
		                <tr>
			                <td> {{$value->id}} </td>
			                <td> {{$value->type_code}}</td>
			                <td> {{$value->description}}</td>
			                 @php $editID = Crypt::encrypt($value->id) @endphp
			                <td><a href="edit_depart_type/{{ $editID}}"  class="btn btn-info">Edit</a></td>
			                <td><a href="delete_depart_type/{{ $value->id}}"  class="btn btn-danger">delete</a></td>

			               
		                </tr>
		              @endforeach
		              </tbody>
             		</table>
				</div>
				<!-- pagination -->
				{{ $data->links('pagination::bootstrap-4') }}
				</div>
	        </div>
	    </div>
    </div>
@endsection
@push('scripts')
    
@endpush
