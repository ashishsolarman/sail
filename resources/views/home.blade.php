@extends('layouts.admin_app')

@section('content')
<div class="container" > 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- partial -->
             <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body bg-danger-gradient">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Registered</p>
                      <h1 class="mb-0">{{$user}}</h1>
                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-white"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body bg-success-gradient">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Locations</p>
                      <h1 class="mb-0">47,840</h1>
                    </div>
                    <i class="typcn typcn-map icon-xl text-white"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">

                <div class="card-body bg-warning-gradient">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Employees</p>
                      <h1 class="mb-0">7,243</h1>
                    </div>                    
                    <i class="typcn typcn-briefcase icon-xl text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
               <div class="row">
            <div class="col-xl-4 grid-margin stretch-card flex-column">                
              <div class="row">
                <div class="col-md-12 stretch-card">
                <div class="card deep1">
                    <div class="card-body">
                      <h5 class="mb-2 text-titlecase mb-4 text-center">User Profile</h5>
              <div class="our-team">
                <div class="pic"><img src="{{asset('emp_images')}}/{{$name->emp_image}}" alt=""></div>
                 <h3 class="title">{{$name->name}}</h3>
                <span class="post">{{$users->desig_desc}}</span>
                <span class="post">{{$name->email}}</span>
              <button type="button" class="btn btn-primary view">View Profile</button>
            </div> 
            </div>
            </div>
            </div>     

                  </div>
            </div>
            <div class="col-xl-4 grid-margin stretch-card flex-column">              
              <div class="row h-100">
                <div class="col-md-12 stretch-card">
                  <div class="card deep1">
                    <div class="card-body">
                    <h5 class="mb-2 text-titlecase mb-4 text-center">News & Notification</h5>
                    <div class="new">
                      <div class="new-up">
 <marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="scroll" direction="up" id="marquee1">
 <ul>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Recruitment of Teaching/Non-Teaching Sta...</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Life Certificate & Income Tax Form o...</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Engagement of Junior Research Fellows</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Tender for Annual Rate Contract for supp...</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Notice Inviting Quotaiton for engagement...</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Extension of deadline for registration</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Recruitment of Teaching/Non-Teaching Sta...</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Life Certificate & Income Tax Form o...</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Engagement of Junior Research Fellows</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Tender for Annual Rate Contract for supp...</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Notice Inviting Quotaiton for engagement...</a></li>
<li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#"> Extension of deadline for registration</a></li>
</ul> 
</marquee>
</div>
        </div>            </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 grid-margin stretch-card flex-column">              
              <div class="row h-100">
                <div class="col-md-12 stretch-card">
                  <div class="card deep1">
                    <div class="card-body">
                      <h5 class="mb-2 text-titlecase mb-4 text-center">Line Chart</h5>
                  <canvas id="sales-chart-d" height="270"></canvas>
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="row">           
        <div class="col-lg-4 grid-margin stretch-card">
              <div class="card deep2">
                <div class="card-body">
                  <h5 class="card-title text-center">Upcoming Birthday</h5>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Date of Birth
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            Rohit Kumar
                          </td>
                          <td>
                           <p>24-08-1992</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face2.jpg" alt="image"/>
                          </td>
                          <td>
                            Anushka Rani
                          </td>
                          <td>
                            <p>24-09-1993</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face3.jpg" alt="image"/>
                          </td>
                          <td>
                            Sumit Rana
                          </td>
                          <td>
                            <p>28-10-1994</p>
                            </div>
                          </td>
                        </tr>
                        
                      </tbody> </table>                   </div> <button
                      type="button" class="btn btn-primary view mt-3">View
                      More</button> </div> </div> </div>


 <div class="col-xl-4 grid-margin stretch-card flex-column">                
              <div class="row">
                <div class="col-md-12 stretch-card">
                <div class="card deep2">
                    <div class="card-body">
                      <h5 class="mb-2 text-titlecase mb-4 text-center">ED Desk</h5>

                      <div class="our-team1">
                    <div class="pic">
                        <img src="images/ed.png" alt="">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Shri Nirvik Banerjee</h3>
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac eros lacus. Sed commodo fringilla pharetra.
                    </p>
                </div>

                <button type="button" class="btn btn-primary view mt-3">Read More</button>
            </div>
                 </div>
                </div>     

                  </div>
            </div>



               <div class="col-lg-4 grid-margin stretch-card">
              <div class="card deep3">
                <div class="card-body">
                  <h5 class="card-title text-center">FAQ</h5>


                  <section class="faq-section">
                    <!-- ***** FAQ Start ***** -->
                      <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h4 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">1</span>What is Lorem Ipsum?
                                        </h4>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h4 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">2</span> Where does it come from?
                                        </h4>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h4 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">3</span>Why do we use it?
                                        </h4>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h4 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">4</span> Where can I get some?
                                        </h4>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <button type="button" class="btn btn-primary view mt-3">View More</button>
            </div>

  

                </div>
              </div>
            </div>


        </div>
 <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      
</div>
<footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">© 2021 Solarman Engineering Project Pvt Ltd.</span>
                    </div>
                </div>    
            </div>        
        </footer>
@endsection
