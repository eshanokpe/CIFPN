@extends('layouts.portal')

@section('content')

<div class="page-wrapper">

  <!-- Page Content-->
  <div class="page-content-tab">

      <div class="container-fluid">
          <!-- Page-Title -->
          <div class="row">
              <div class="col-sm-12">
                  <div class="page-title-box">
                      <div class="float-end">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item active">Application Form</li>
                          </ol>
                      </div>
                      <h4 class="page-title">Membership Portal</h4>
                  </div>
                  <!--end page-title-box-->
              </div>
              <!--end col-->
          </div>
          <!-- end page title end breadcrumb -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Application Form </h4>
                          
                      </div><!--end card-header-->
                      <div class="card-body">  
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="mb-3 row">
                                      <label for="example-text-input" class="col-sm-2 col-form-label text-end">Full Name</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" type="text" @disabled(true) value="{{ Auth::user()->name }}" id="name">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="example-email-input" class="col-sm-2 col-form-label text-end">Email</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" type="email" @disabled(true) value="{{ Auth::user()->email }}"  id="email">
                                      </div>
                                  </div> 
                                  <div class="mb-3 row">
                                      <label for="example-tel-input" class="col-sm-2 col-form-label text-end">Phone Number</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" type="tel" value="" id="example-tel-input" placeholder="Phone number">
                                      </div>
                                  </div>
                               
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label text-end">Educational Qualifications</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="">-- Select Qualification --</option>
                                                <option value="high-school">High School Diploma</option>
                                                <option value="bachelor">Bachelor's Degree</option>
                                                <option value="master">Master's Degree</option>
                                                <option value="phd">PhD</option>
                                                <option value="professional-certification">Professional Certification</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label text-end">Membership category</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="">-- Select Qualification --</option>
                                                <option value="high-school">High School Diploma</option>
                                                <option value="bachelor">Bachelor's Degree</option>
                                                <option value="master">Master's Degree</option>
                                                <option value="phd">PhD</option>
                                                <option value="professional-certification">Professional Certification</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <small class="text-danger">(Please note that each membership category has different payment plans)</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">                      
                                                        <h4 class="card-title">PAYMENT DETAIL FOR STUDENT MEMBER</h4>                  
                                                    </div><!--end col-->                                        
                                                </div>  <!--end row-->                                  
                                            </div><!--end card-header-->
                                            <div class="card-body">
                                                <div class="row">
                                                    
                                                    <div class="col-md-12 align-self-center">
                                                        <div class="card-body">
                                                            <h6 class="mb-0 font-22 fw-bold">Information on Student Member Category</h6>                                            
                                                            <p class="mb-1 text-muted fw-semibold">
                                                                <ul>
                                                                <li>He/She satisfies the council that he/she is fit and proper person to be so registered</li>
                                                                <li>Has obtained academic qualification such as B.Sc, BA, ACS, LLB, HND, ACA, ACIS, AIPM and any other qualification as may be prescribed by the Council from time to time.</li>
                                                                <li>Has been upgraded from ordinary member Grade</li>
                                                                <li>Is of good character and must not have been involed in fraud, dishonestyor any criminal act</li>
                                                                </ul>
                                                            </p>                                                                                                                    
                                                        </div><!--end card-body-->
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                                                                            
                                                
                                                <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                                                    <a href="#" target="_blank" class="alert-link">N 80,000</a>
                                                  </div>
                                            </div><!--end card-body--> 
                                        </div><!--end card-->
                                    </div>
                                    </div>
                                 
                                  
                                                                  
                              </div>


                              <div class="col-lg-6">    
                               
                                <div class="mb-3 row">
                                    <div for="example-date-input" class="col-sm-2 col-form-label text-end"></div>
                                    <div class="col-sm-10">
                                        <label for="exampleInputEmail1">Upload of Relevant certifications (documents that validate your expertise in areas like AML, KYC, or compliance)</label>
                                        <input type="file" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                </div>
                                    <div class="mb-3 row">
                                        <div for="example-date-input" class="col-sm-2 col-form-label text-end"></div>
                                        <div class="col-sm-10">
                                            <label for="exampleInputEmail1">Proof of Academic Qualifications</label>
                                            <input type="file" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                

                                    <div class="mb-3 row">
                                        <div for="example-date-input" class="col-sm-2 col-form-label text-end"></div>
                                        <div class="col-sm-10">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Work Experience letters or references from current/past employers</label>
                                                <input type="file" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div for="example-date-input" class="col-sm-2 col-form-label text-end"></div>
                                        <div class="col-sm-10">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">Professional Certifications (if applicable)</label>
                                            <input type="file" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        </div>
                                    </div>
                                  
                                    <div class="mb-3 row">
                                        <div for="example-date-input" class="col-sm-2 col-form-label text-end"></div>
                                        <div class="col-sm-10">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">Proof of Identification (e.g., passport, national ID)</label>
                                            <input type="file" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div for="example-date-input" class="col-sm-2 col-form-label text-end"></div>
                                        <div class="col-sm-10">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">Payment option</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="">-- Select Payment option --</option>
                                                <option value="high-school">Paystack</option>
                                                <option value="bachelor">Opay</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>

                                  <div class="mb-3 row has-error">
                                      <label for="inputHorizontalDnger" class="col-sm-2 col-form-label text-end"></label>
                                      <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary">Continue</button>
                                      </div>
                                  </div>                                            
                              </div>
                          </div>                                                                      
                      </div><!--end card-body-->
                  </div><!--end card-->
              </div><!--end col-->
          </div><!--end row-->

          
         
      </div><!-- container -->

     
    
  </div>
  <!-- end page content -->
</div>

@endsection
