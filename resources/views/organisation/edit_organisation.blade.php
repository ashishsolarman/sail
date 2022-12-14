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
            <div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Edit Organisation</div>
                <form action="{{route('edit_organisation',$tbl_organisation->id)}}" method="post" enctype="multipart/form-data" >
                    @csrf
                  @method('PUT')
                  <div class="form-row" style="margin-top:3%;">

                    <div class="form-group col-md-6">
                        <label for="pl_no">Short Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$tbl_organisation->short_name}}"  name="short_name" id="short_name">
                       @error('short_name')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                   
                      <div class="form-group col-md-6">
                        <label for="pl_no">City<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$tbl_organisation->city}}"  name="city" id="city">
                       @error('city')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                  <div class="form-group col-md-6">
                        <label for="pl_no">State<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$tbl_organisation->state}}"  name="state" id="state">
                       @error('state')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                 <div class="form-group col-md-6">
                        <label for="pl_no">Country<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$tbl_organisation->country}}"  name="country" id="country">
                       @error('country')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                    <div class="form-group col-md-12">
                        <label for="pl_no">Description<span class="text-danger">*</span></label>
                      <textarea id="description" class="form-control" name="description" rows="6" >{{$tbl_organisation->description}}</textarea>
                       @error('description')
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
