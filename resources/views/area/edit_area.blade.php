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
            <div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Edit Area</div>
                <form action="{{route('edit_area',$tbl_mst_area)}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                  <div class="form-row" style="margin-top: 3%;">

                    <div class="form-group col-md-12">
                        <label for="pl_no">Code<span class="text-danger">*</span></label>
                      <input type="number" class="form-control" value="{{$tbl_mst_area->area_code}}"  name="area_code" id="area_code">
                       @error('area_code')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                   
                      <div class="form-group col-md-12">
                        <label for="pl_no">Area <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="{{$tbl_mst_area->area_name}}"  name="area_name" id="area_name">
                       @error('grade')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                  
              

                    <div class="form-group col-md-12" style="text-align: center;">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    
@endpush
