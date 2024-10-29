@extends('layouts.admin')

<style>
    #calender a{
        color: #000000;
        text-decoration: none;
    }
    .mr-auto{
        margin-right: auto;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

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
                    <h2 class="text-black font-w600">Consultant</h2>
                    <p class="mb-0">Welcome to {{ $contactUs->company_name}} backend</p>
                </div>
                <a href="{{route('admin.consultant.index')}}" class="btn btn-primary rounded light">View Consultant</a>
            </div> 
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 align-center">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-12 align-center mt-2">
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-12 align-center mt-2">
                                    @if(session('success'))
                                        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-12 align-center mt-2">
                                    @if(session('error'))
                                        <div id="success-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="basic-form">
                                <form method="POST" action="{{ route('admin.consultant.post') }}" enctype="multipart/form-data" id="form">
                                    @csrf
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Full Name" name="name" id="name" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label">Phone Number</label>
                                        <div class="col-sm-9">
                                            <input type="tel" class="form-control" placeholder="Phone" name="phone" id="phone">
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label">Select Solution</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="solution_id" id="solution" required>
                                                <option value="" disabled selected>Select a solution</option>
                                                @foreach($solutions as $solution)
                                                    <option value="{{ $solution->id }}">{{ $solution->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label">Calendar Date</label>
                                        <div class="col-sm-9">
                                            <div id='calendar'></div>
                                            <input type="hidden" name="calendar_date" id="calendar_date" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label">Time Slot</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="time_slot" id="time_slot" required>
                                                <option value="" disabled selected>Select time slot</option>
                                                <option value="15">15 Minutes</option>
                                                <option value="30">30 Minutes</option>
                                                <option value="60">60 Minutes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-start mt-4 mb-2">
                                        <button class="btn btn-primary btn-sl-sm me-2" type="submit">Create</button>
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
@section('content')

    <div id='calendar'></div>
    
@endsection
<script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
<script>

    $(document).ready(function() {
        $('#solution').select2({
            placeholder: "Select a solution",
            allowClear: true
        });
    });
   
  document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar')
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        initialDate: new Date(),
        selectable: true,
        start: 'title', 
        center: '',
        end: 'today prev,next',
        dateClick: function(info) {
            document.getElementById('calendar_date').value = info.dateStr; 
            console.log('Clicked on: ' + info.dateStr);
        }
    });
    calendar.render()
  })

</script>