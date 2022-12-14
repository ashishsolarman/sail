@extends('layouts.admin_app')
@section('css')
    <style>
    body
    {
        color: #000000;
    }
    label.error 
    {
        color: #dc3545;
        font-size: 14px;
    }

    
    </style>
   
@endsection
@section('content')
    <div class="container" style="margin-top: 1%;">
        @if ($message = Session::get('success'))
 
        <div class="alert alert-success alert-block">
     
            <button type="button" class="close" data-dismiss="alert">×</button>
     
                <strong>{{ $message }}</strong>
     
        </div>
        <br>
    @endif
    <div class="container" style="margin-top: 1%;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Edit Grade</div>
                <form action="{{route('edit_grade',$tbl_grade->id)}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                  <div class="form-row" style="margin-top: 3%;">

                    <div class="form-group col-md-12">
                        <label for="pl_no">Code<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$tbl_grade->grade_code}}"  name="grade_code" id="grade_code">
                       @error('grade_code')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                   
                      <div class="form-group col-md-12">
                        <label for="pl_no">Grade<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$tbl_grade->grade}}"  name="grade" id="grade">
                       @error('grade')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                  
              

                    <div class="form-group col-md-12" style="text-align: center;">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    
@endpush
