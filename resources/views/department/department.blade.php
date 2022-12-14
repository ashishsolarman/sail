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
	        	<div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Department List<a href="{{route('add_depart_form')}}" class="btn btn-info" style="float:right">Add Department</a></div>
	            	<div style="overflow-x: scroll;">
		              <table class="table table-bordered table-striped" id="system_table">
		                <thead>
			                <tr>
			                  <th>#</th>
			                  <th>Short Name</th>
			                  <th>Description</th>
			                  <th>Dept Type</th>
			                  <th>Dept Level</th>
			                  <th>Rep Dept</th>
			                  <th>Seq No</th>
			                  <th>Funct</th>
			                  <th colspan="2" class="text-center">Action</th>
			                </tr>
		                </thead>
		                <tbody>
		                	@php
		                		$i=1;
		                	@endphp
	               			@foreach ($data as $key => $value)
		                <tr>
			                <td> {{$i++}} </td>
			                <td> {{$value->short_name}}</td>
			                <td> {{$value->description}}</td>
			                <td> {{$value->type_code}}</td>
			                <td> {{$value->level_name}}</td>
			                <td> {{$value->rep_depart_name}}</td>
			                <td> {{$value->seqno}}</td>
			                <td> {{$value->functional}}</td>
			                 @php $editID = Crypt::encrypt($value->id) @endphp
			                <td><a href="edit_department/{{ $editID}}"  class="btn btn-sm btn-info">Edit</a></td>
			                <td><a href="delete_department/{{ $value->id}}"  class="btn btn-sm btn-danger">delete</a></td>
			            </tr>
		              @endforeach
		              </tbody>
             		</table>
				</div>
		        {{ $data->links('pagination::bootstrap-4') }}
		        </div>
	        </div>
	    </div>
    </div>
@endsection
@push('scripts')
    
@endpush
