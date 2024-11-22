@extends('layouts.admin')
@section('content')

<div id="main-wrapper">
     <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
                <div class="me-auto d-lg-block d-block">
                    <h2 class="text-black font-w600">Application</h2>
                    <p class="mb-0">Welcome to Archway Home backend</p>
                </div>
                <a href="{{route('admin.application.index')}}" class="btn btn-primary rounded light">View Application</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Application Details</h4>
                </div>
                <div class="row justify-content-center">
                
                   
                        <div class="col-xl-6 col-lg-12 align-center">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="basic-form">
                                        @if(session('success'))
                                            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                            </div>
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
                        
                                        <form method="POST"  action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3 align-items-center">
                                                <label class="col-sm-3 col-form-label form-label">Email</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" disabled value="{{$data->user_email}}" placeholder="Title" name="title" id="title" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 align-items-center">
                                                <label class="col-sm-3 col-form-label form-label">Phone Number</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" disabled value="{{$data->phone_number}}" placeholder="Title" name="title" id="title" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 align-items-center">
                                                <label class="col-sm-3 col-form-label form-label">Qualification</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" disabled value="{{$data->qualification}}" placeholder="Title" name="title" id="title" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 align-items-center">
                                                <label class="col col-form-label form-label">Membership Category</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" disabled value="{{$data->membership_category}}" placeholder="Title" name="title" id="title" required>
                                                </div>
                                            </div>
                                        
                                    
                                        </form>
                                        <script>
                                            // Initialize CKEditor
                                            CKEDITOR.replace('ckeditor');

                                            function previewImage(event) {
                                                const input = event.target;
                                                const preview = document.getElementById('image-preview');
                                                
                                                if (input.files && input.files[0]) {
                                                    const reader = new FileReader();
                                                    
                                                    reader.onload = function(e) {
                                                        preview.src = e.target.result;
                                                        preview.style.display = 'block';
                                                    };
                                                    
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 align-center">
                            <div class="card">
                            <div class="basic-form">
                                @if(session('success'))
                                    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                    </div>
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
                
                                <form method="POST"  action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-6 col-form-label form-label">Certification Document</label>
                                        <div class="col-sm-4">
                                            @if($data->certification_path)
                                                @if(Str::endsWith($data->certification_path, ['.jpg', '.jpeg', '.png', '.gif'])) 
                                                    <img src="{{ asset($data->certification_path) }}" alt="Uploaded Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                                @elseif(Str::endsWith($data->certification_path, ['.pdf']))
                                                    <embed src="{{ asset($data->certification_path) }}" type="application/pdf" width="100%" height="500px">
                                                @else
                                                    <a href="{{ asset($data->certification_path) }}" class="btn btn-primary" target="_blank">Download File</a>
                                                @endif
                                            @else
                                                <p>No file uploaded.</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-6 col-form-label form-label">Academic Qualifications Document</label>
                                        <div class="col-sm-4">
                                            @if($data->academic_qualifications_path)
                                                @if(Str::endsWith($data->academic_qualifications_path, ['.jpg', '.jpeg', '.png', '.gif'])) 
                                                
                                                    <img src="{{ asset($data->academic_qualifications_path) }}" alt="Uploaded Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                                @elseif(Str::endsWith($data->academic_qualifications_path, ['.pdf']))
                                                    <embed src="{{ asset($data->academic_qualifications_path) }}" type="application/pdf" width="100%" height="500px">
                                                @else
                                                    <a href="{{ asset($data->academic_qualifications_path) }}" class="btn btn-primary" target="_blank">Download File</a>
                                                @endif
                                            @else
                                                <p>No file uploaded.</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-6 col-form-label form-label">Work Experience Document</label>
                                        <div class="col-sm-4">
                                            @if($data->work_experience_path)
                                                @if(Str::endsWith($data->work_experience_path, ['.jpg', '.jpeg', '.png', '.gif'])) 
                                                
                                                    <img src="{{ asset($data->work_experience_path) }}" alt="Uploaded Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                                @elseif(Str::endsWith($data->work_experience_path, ['.pdf']))
                                                    <embed src="{{ asset($data->work_experience_path) }}" type="application/pdf" width="100%" height="500px">
                                                @else
                                                    <a href="{{ asset($data->work_experience_path) }}" class="btn btn-primary" target="_blank">Download File</a>
                                                @endif
                                            @else
                                                <p>No file uploaded.</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-6 col-form-label form-label">Professional Certifications Document</label>
                                        <div class="col-sm-4">
                                            @if($data->professional_certifications_path)
                                                @if(Str::endsWith($data->professional_certifications_path, ['.jpg', '.jpeg', '.png', '.gif'])) 
                                                
                                                    <img src="{{ asset($data->professional_certifications_path) }}" alt="Uploaded Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                                @elseif(Str::endsWith($data->professional_certifications_path, ['.pdf']))
                                                    <embed src="{{ asset($data->professional_certifications_path) }}" type="application/pdf" width="100%" height="500px">
                                                @else
                                                    <a href="{{ asset($data->professional_certifications_path) }}" class="btn btn-primary" target="_blank">Download File</a>
                                                @endif
                                            @else
                                                <p>No file uploaded.</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-6 col-form-label form-label">Identification Document</label>
                                        <div class="col-sm-4">
                                            @if($data->identification_path)
                                                @if(Str::endsWith($data->identification_path, ['.jpg', '.jpeg', '.png', '.gif'])) 
                                                
                                                    <img src="{{ asset($data->identification_path) }}" alt="Uploaded Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                                @elseif(Str::endsWith($data->identification_path, ['.pdf']))
                                                    <embed src="{{ asset($data->identification_path) }}" type="application/pdf" width="100%" height="500px">
                                                @else
                                                    <a href="{{ asset($data->identification_path) }}" class="btn btn-primary" target="_blank">Download File</a>
                                                @endif
                                            @else
                                                <p>No file uploaded.</p>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    
                                </form>
                                
                            </div>
                            </div>
                        </div>
                   
                </div>
            </div>
           

        </div>
    </div>
</div>
@endsection