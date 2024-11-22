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
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-success">{{ session('error') }}</div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                      </div><!--end card-header-->
                      <div class="card-body">  
                        <form action="{{ route('application.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-2 col-form-label text-end">Full Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{ Auth::user()->name }}" id="name" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-2 col-form-label text-end">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" value="{{ Auth::user()->email }}" id="email" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="phone_number" class="col-sm-2 col-form-label text-end">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="phone_number" type="tel" placeholder="Phone number" required>
                                        </div>
                                        @error('phone_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label text-end">Educational Qualifications</label>
                                        <div class="col-sm-10">
                                            <select name="qualification" class="form-select" required>
                                                <option value="">-- Select Qualification --</option>
                                                <option value="High School Diploma">High School Diploma</option>
                                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                <option value="Master's Degree">Master's Degree</option>
                                                <option value="PhD">PhD</option>
                                                <option value="Professional Certification">Professional Certification</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        @error('qualification')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label text-end">Membership Category</label>
                                        <div class="col-sm-10">
                                            <select name="membership_category" class="form-select" required>
                                                <option value="">-- Select Membership Category --</option>
                                                <option value="Student Membership">Student Membership</option>
                                                <option value="Associate Membership ">Associate Membership</option>
                                                <option value="Full Membership">Full Membership</option>
                                                <option value="Fellow Membership ">Fellow Membership </option>
                                                <option value="Corporate Membership">Corporate Membership</option>
                                            </select>
                                        </div>
                                        @error('membership_category')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <!-- Membership category -->
                                    <div class="mb-3 row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-10">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title">The application fee is non-refundable.</h4>                                    
                                                        </div><!--end col-->                                        
                                                    </div>  <!--end row-->                                  
                                                </div><!--end card-header-->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12 align-self-center">
                                                            <div class="card-body">
                                                                <div class="alert alert-warning border-0" role="alert">
                                                                    <strong>Application Fee </strong> ₦25,000
                                                                </div>                                                                
                                                            </div><!--end card-body-->
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more fields here as needed -->
                                </div>
                                <div class="col-lg-6">
                                     <div class="mb-3">
                                        <label>Upload Relevant Certifications</label>
                                        <input type="file" name="certification" class="form-control" required>
                                    </div>
                                   <div class="mb-3">
                                        <label>Proof of Academic Qualifications</label>
                                        <input type="file" name="academic_qualifications" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Work Experience Letters</label>
                                        <input type="file" name="work_experience" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Professional Certifications</label>
                                        <input type="file" name="professional_certifications" class="form-control">
                                    </div> 
                                    <div class="mb-3">
                                        <label>Proof of Identification</label>
                                        <input type="file" name="identification" class="form-control" required>
                                    </div>
                                    <input type="hidden" name="amount" value="25000" >
                                    <div class="mb-3">
                                        <label>Payment Option</label>
                                        <select name="payment_option" class="form-select" required>
                                            <option value="">-- Select Payment Option --</option>
                                            <option value="paystack">Paystack</option>
                                            <option value="moniepoint">Moniepoint</option>
                                            <option value="opay">Opay</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <input type="checkbox" name="fee_acknowledged" required>
                                        <label>I understand that the application fee is non-refundable.</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </form>
                                                                                         
                      </div><!--end card-body-->
                  </div><!--end card-->
              </div><!--end col-->
          </div><!--end row-->

          
         
      </div><!-- container -->

     
    
  </div>
  <!-- end page content -->
</div>

@endsection
