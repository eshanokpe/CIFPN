<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $contactUs->company_name }}</title> 
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo/CIFPN_favi.jpg')}}">
    
    <!-- FontAwesome JS-->
    <script defer src="{{ asset('portal/plugins/fontawesome/js/all.min.js')}}"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('portal/css/portal.css')}}">


    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- jQuery (required for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Toastr JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- recaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>
<body class="app">  
    <header class="app-header fixed-top">
        @include('portal.partials.navbar')
        @include('portal.partials.sidebar')
    </header>
    <main class="py-4">
        @yield('content')
    </main> 

    @include('portal.partials.footer')
    

</body>
</html>
