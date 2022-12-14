@extends('layouts.admin_app')
@section('css')
    <style>
  body {
  padding: 0;
  margin: 0;
  font-family: 'Lato', sans-serif;
  color: #000;
}

.student-profile .card {
  border-radius: 10px;
}

.student-profile .card .card-header .profile_img {
  width: 150px;
  height: 150px;
 /* object-fit: cover;*/
  margin: 10px auto;
  border: 10px solid #ccc;
  border-radius: 50%;
}

.student-profile .card h3 {
  font-size: 20px;
  font-weight: 700;
}

.student-profile .card p {
  font-size: 16px;
  color: #000;
}

.student-profile .table th,
.student-profile .table td {
  font-size: 14px;
  padding: 5px 10px;
  color: #000;
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
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="{{asset('emp_images')}}/{{$users->emp_image}}" alt="">
            <h3>{{$users->emp_title}}.{{$users->name}}</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Mobile Number:</strong>{{$users->mobile}}</p>
            <p class="mb-0"><strong class="pr-1">Email</strong>{{$users->email}}</p>
           
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fa fa-clone" aria-hidden="true"></i> General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Mobile No.</th>
                <td width="2%">:</td>
                <td>{{$users->mobile}}</td>
              </tr>
              <tr>
                <th width="30%">Designation</th>
                <td width="2%">:</td>
                <td>{{$users->designation}}</td>
              </tr>
              <tr>
                <th width="30%">Department</th>
                <td width="2%">:</td>
                <td>{{$users->department}}</td>
              </tr>
              <tr>
                <th width="30%">Project</th>
                <td width="2%">:</td>
                <td>{{$users->project_name}}</td>
              </tr>
              <tr>
                <th width="30%">Company</th>
                <td width="2%">:</td>
                <td>{{$users->company_name}}</td>
              </tr>
                 <tr>
                <th width="30%">Status</th>
                <td width="2%">:</td>
                <td>{{$users->flag}}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
</div>
@endsection
@push('scripts')
    
@endpush
