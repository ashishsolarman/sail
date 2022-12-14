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
            <div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Add Department</div>
                <form action="{{route('depart_save')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                  <div class="form-row" style="margin-top: 3%;">
                     <div class="form-group col-md-6">
                        <label for="org">Select Oragnisation<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="org" name="org">
                          <option selected>None</option>
                           @foreach ($org as $value)
                          <option value="{{ $value->id }}">{{ $value->short_name }}</option>
                          <!-- <option value="unsold">Sold</option> -->
                          @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="departmentId">Department Id<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{old('departmentId')}}"  name="departmentId" id="departmentId">
                       @error('departmentId')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                     <div class="form-group col-md-6">
                        <label for="short_name">Short Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{old('short_name')}}"  name="short_name" id="short_name">
                       @error('short_name')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                     <div class="form-group col-md-6">
                        <label for="seq_no">Seq. No<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{old('seq_no')}}"  name="seq_no" id="seq_no">
                       @error('seq_no')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                     <div class="form-group col-md-12">
                        <label for="description">Description<span class="text-danger">*</span></label>
                        <textarea id="description" name="description" class="form-control" value="{{old('description')}}" rows="4" cols="50"></textarea>
                      <!-- <input type="text" class="form-control" value="{{old('description')}}" row="2" name="description" id="description"> -->
                       @error('description')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                     <div class="form-group col-md-6">
                        <label for="depart_type">Select Department Type<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="depart_type" name="depart_type">
                          <option selected>None</option>
                           @foreach ($depart_type as $value)
                          <option value="{{ $value->id }}">{{ $value->type_code }}</option>
                          <!-- <option value="unsold">Sold</option> -->
                          @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="depart_level">Select Department Level<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="depart_level" name="depart_level">
                          <option selected>None</option>
                           @foreach ($depart_level as $value)
                          <option value="{{ $value->id }}">{{ $value->level_name }}</option>
                          <!-- <option value="unsold">Sold</option> -->
                          @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="depart_report">Reporting Department<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="depart_report" name="depart_report">
                          <option selected>None</option>
                           @foreach ($report_depart as $value)
                          <option value="{{ $value->rep_depart_code }}">{{ $value->rep_depart_name }}</option>
                          <!-- <option value="unsold">Sold</option> -->
                          @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="from_date">From Date<span class="text-danger">*</span></label>
                      <input type="date" class="form-control" value="{{old('from_date')}}"  name="from_date" id="from_date">
                       @error('from_date')
                          <span style="color:red;">{{$message}}</span>
                        @enderror
                     </div>
                     <div class="form-group col-md-6">
                        <label for="to_date">To Date<span class="text-danger">*</span></label>
                      <input type="date" class="form-control" value="{{old('to_date')}}"  name="to_date" id="to_date">
                       @error('to_date')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                     <div class="form-group col-md-6">
                        <label for="functional">Functional<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="functional" name="functional">
                          <option value="Y" selected>Y</option>
                          <option value="N">N</option>
                        </select>
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
