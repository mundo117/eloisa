<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon" />
    <title>Universal - Premium Admin Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themify.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.cs')}}s">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
</head>
<body>
    <div id="app">
     

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('script')
</body>
</html>
