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
            <div class="card-header" style="text-align: center; padding-bottom: 3%; font-size: 26px; color: #000000">Register User</div>
                <form action="{{route('store')}}" method="post" enctype="multipart/form-data" >
                    @csrf

                  <div class="form-row" style="margin-top: 3%;">

                    <div class="form-group col-md-6">
                        <label for="pl_no">PL No.<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{old('pl_no')}}"  name="pl_no" id="pl_no">
                       @error('pl_no')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                     <div class="form-group col-md-6">
                        <label for="unit_pl_no">Unit PL No.<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{old('unit_pl_no')}}"  name="unit_pl_no" id="unit_pl_no">
                       @error('unit_pl_no')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                   <div class="form-group col-md-6">
                       <label for="emp_title" class="col-md-4 col-form-label ">{{ __('Employee Title') }}</label>
                        <select style="height:48px;" class="custom-select mr-sm-2" id="emp_title" name="emp_title" value="{{old('emp_title')}}">
                             <option selected="">Select</option>
                            
                             <option value="MR">MR</option>
                              <option value="MS">MS</option>
                              <option value="DR">DR</option>
                           
                          
                            </select>
                              @error('emp_title')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                            
                        </div>
                     <div class="form-group col-md-6">
                        <label for="name">Employee Full Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{old('name')}}"  name="name" id="name">
                       @error('name')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>

                       <div class="form-group col-md-6">
                       <label for="gender" class="col-md-4 col-form-label ">{{ __('Gender') }}</label>
                        <select style="height:48px;" class="custom-select mr-sm-2" id="gender" name="gender" value="{{old('gender')}}">
                             <option selected="">Select</option>
                             <option value="Male">Male</option>
                             <option value="Female">FeMale</option>
                            </select>
                              @error('gender')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                            
                        </div>

                   
                    <div class="form-group col-md-6">
                        <label for="name">Employee DOB<span class="text-danger">*</span></label>
                      <input type="date" class="form-control" value="{{old('emp_dob')}}"  name="emp_dob" id="emp_dob">
                       @error('emp_dob')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>
                       <div class="form-group col-md-6">
                        <label for="exe_nexe">Exe Nexe<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" value="{{old('exe_nexe')}}"  name="exe_nexe" id="exe_nexe">
                       @error('exe_nexe')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>

                       <div class="form-group col-md-6">
                       <label for="location" class="col-md-4 col-form-label ">{{ __('Designation') }}</label>
                        <select style="height:48px;" class="custom-select mr-sm-2" id="role" name="designation" value="{{old('designation')}}">
                             <option selected="">Select</option>
                             @foreach($tbl_mst_design_desc as $value)
                             <option value="{{$value->desig_code}}">{{$value->desig_desc}}</option>
                             @endforeach
                            
                            </select>
                              @error('designation')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                            
                        </div>

                          <div class="form-group col-md-6">
                        <label for="emp_grade">Employee Grade<span class="text-danger">*</span></label>
                      <input type="text" class="form-control"  name="emp_grade" value="{{old('emp_grade')}}" id="emp_grade">
                       @error('emp_grade')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>

                       <div class="form-group col-md-6">
                       <label for="org" class="col-md-4 col-form-label ">{{ __('Organisation') }}</label>
                        <select style="height:48px;" class="custom-select mr-sm-2" id="org" name="org" value="{{old('org')}}">
                             <option selected="">Select</option>
                            
                             <option value="RDCIS">RDCIS</option>
                             <option value="RMG">RMG</option>
                             <option value="SSO">SSO</option>
                            
                          
                            </select>
                              @error('org')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                            
                        </div>

                      <div class="form-group col-md-6">
                        <label for="doj_unit">DOJ Unit<span class="text-danger">*</span></label>
                      <input type="date" class="form-control" value="{{old('doj_unit')}}"  name="doj_unit" id="doj_unit">
                       @error('emp_dob')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>

                        <div class="form-group col-md-6">
                       <label for="group_name" class="col-md-4 col-form-label ">{{ __('Group Name') }}</label>
                        <select style="height:48px;" class="custom-select mr-sm-2" id="group_name" name="group_name" value="{{old('group_name')}}">
                             <option selected="">Select</option>
                             @foreach($tbl_mst_group_name as $value)
                             <option value="{{$value->group_code}}">{{$value->group_name}}</option>
                             @endforeach
                          
                            </select>
                              @error('group_name')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                            
                        </div>

                        <div class="form-group col-md-6">
                       <label for="area" class="col-md-4 col-form-label ">{{ __('Area') }}</label>
                        <select style="height:48px;" class="custom-select mr-sm-2" id="area" name="area" value="{{old('area')}}">
                             <option selected="">Select</option>
                             @foreach($tbl_mst_area as $value)
                             <option value="{{$value->area_code}}">{{$value->area_name}}</option>
                             @endforeach
                          
                            </select>
                              @error('area')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                            
                        </div>

                           <div class="form-group col-md-6">
                        <label for="mobile">Mobile NO.<span class="text-danger">*</span></label>
                      <input type="number" class="form-control"  name="mobile" value="{{old('mobile')}}" id="mobile_number">
                       @error('mobile')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>

                     <div class="form-group col-md-6">
                        <label for="company">Email ID<span class="text-danger">*</span></label>
                      <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email">
                       @error('email')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>

                   

                        <div class="form-group col-md-6">
                        <label for="photo">Employee Image<span class="text-danger">*</span></label>
                      <input type="file" class="form-control" value="{{old('emp_image')}}"  name="emp_image" id="emp_image">
                       @error('emp_image')
                                  <span style="color:red;">{{$message}}</span>
                                @enderror
                     </div>

                     <div class="form-group col-md-6">
                        <label for="company">Password<span class="text-danger">*</span></label>
                      <input type="password" class="form-control" value="{{old('password')}}" name="password" id="password">
                       @error('password')
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
