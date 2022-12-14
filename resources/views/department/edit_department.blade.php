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
            <div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Edit Department Type</div>
              <form action="{{route('edit_department',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                     @method('PUT')
                  <div class="form-row" style="margin-top: 3%;">
                    <div class="form-group col-md-6">
                        <label for="org">Select Oragnisation<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="org" name="org">
                          <option value="{{ $data->organisation }}" selected>{{$organisation->short_name}}</option>
                           @foreach ($org as $value)
                          <option value="{{ $value->id }}">{{ $value->short_name }}</option>
                          <!-- <option value="unsold">Sold</option> -->
                          @endforeach
                        </select>
                     </div>
                    <div class="form-group col-md-6">
                        <label for="dept_id">Depatment Id<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$data->department_id}}"  name="dept_id" id="dept_id">
                       @error('dept_id')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                    <div class="form-group col-md-6">
                        <label for="short_name">Short Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$data->short_name}}"  name="short_name" id="short_name">
                       @error('short_name')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                    <div class="form-group col-md-6">
                        <label for="seq_no">Seq. No<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$data->department_id}}"  name="seq_no" id="seq_no">
                       @error('seq_no')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                     <div class="form-group col-md-12">
                        <label for="description">Description<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{$data->description}}"  name="description" id="description">
                       @error('description')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                    <div class="form-group col-md-6">
                        <label for="dept_type">Select Department Type<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="dept_type" name="dept_type">
                          <option value="{{ $data->department_type }}" selected>{{$department_type->type_code}}</option>
                           @foreach ($deptmnt_type as $value)
                          <option value="{{ $value->id }}">{{ $value->type_code }}</option>
                          <!-- <option value="unsold">Sold</option> -->
                          @endforeach
                        </select>
                     </div>
                    <div class="form-group col-md-6">
                        <label for="dept_level">Select Department Level<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="dept_level" name="dept_level">
                          <option value="{{ $data->department_level }}" selected>{{$department_level->level_name}}</option>
                           @foreach ($deptmnt_level as $value)
                          <option value="{{ $value->id }}">{{ $value->level_name }}</option>
                          <!-- <option value="unsold">Sold</option> -->
                          @endforeach
                        </select>
                     </div>
                    <div class="form-group col-md-6">
                        <label for="rep_dept">Reporting Department<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="rep_dept" name="rep_dept">
                          <option value="{{ $data->report_depart }}" selected>{{$rep_departtment->rep_depart_name}}</option>
                           @foreach ($rep_deptmnt as $value)
                          <option value="{{ $value->rep_depart_code }}">{{ $value->rep_depart_name }}</option>
                          <!-- <option value="unsold">Sold</option> -->
                          @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="from_date">From Date<span class="text-danger">*</span></label>
                      <input type="date" class="form-control" value="{{$data->from_date}}"  name="from_date" id="from_date">
                       @error('from_date')
                          <span style="color:red;">{{$message}}</span>
                        @enderror
                     </div>
                     <div class="form-group col-md-6">
                        <label for="to_date">To Date<span class="text-danger">*</span></label>
                      <input type="date" class="form-control" value="{{$data->to_date}}"  name="to_date" id="to_date">
                       @error('to_date')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                     <div class="form-group col-md-6">
                        <label for="functional">Functional<span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" id="functional" name="functional">
                          <option value="Y" selected>{{$data->functional}}</option>
                          <option value="N">N</option>
                        </select>
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
