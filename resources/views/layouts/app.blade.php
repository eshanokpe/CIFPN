<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $contactUs->company_name }}</title> 
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($contactUs->footer_logo)}}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/plugins/fontawesome-5.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/plugins/unicons.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
</head>
<body class="home-blue">

    @include('partials.navbar')
       
    <main class="py-4">
        @yield('content')
    </main>

    @include('partials.footer')
    

</body>
</html>
