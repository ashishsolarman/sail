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
	        	<div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Grade List<a href="{{route('add_grade')}}" class="btn btn-info" style="float:right">Add Grade</a></div>
	            	<div style="overflow-x: scroll;">
		              <table class="table table-bordered table-striped" id="system_table">
		                <thead>
			                <tr>
			                  <th>#</th>
			                  
			                  <th>Code</th> 
			                  <th>Grade</th>
			                 
			                 
			              
			                  <th colspan="2" style="text-align: center;">Action</th>
			                </tr>
		                </thead>
		                <tbody>
		               		@foreach ($tbl_grade as $value)
			                <tr>
				                <td> {{$value->id}} </td>
				                
				                <td> {{$value->grade_code}}</td>
				                <td> {{$value->grade}}</td>
				                
				                 
				               
				                  
				                 @php $editID = Crypt::encrypt($value->id) @endphp
				                <td><a href="edit_grade/{{ $editID}}"  class="btn btn-info">Edit</a></td>
				                <td><a href="destroy_grade/{{ $value->id}}"  class="btn btn-danger">delete</a></td>

				               
			                </tr>
		              @endforeach
		              </tbody>
             		</table>
				</div>
				<!-- pagination -->
			{{ $tbl_grade->links('pagination::bootstrap-4') }}
	        </div>
	    </div>
    </div>
	
@endsection