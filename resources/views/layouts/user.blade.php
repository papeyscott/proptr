<!doctype html>
<html>
<head>
 		<title>@yield('title') </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('/src/css/bootstrap.min.css' ) }}"/>
        <link rel="stylesheet" href="{{ asset('/src/css/bootstrap.css' ) }}"/>
        <link rel="stylesheet" href="{{ asset('/src/css/hover-min.css' ) }}"/>
        <link rel="stylesheet" href="{{ asset('/src/css/registercss.css' ) }}"/>
        <link rel="stylesheet" href="{{ asset('/src/css/set1.css' ) }}"/>
        <link rel="stylesheet" href="{{ asset('/src/css/Dashboard.css' ) }}"/>
        <link rel="stylesheet" href="{{ asset('/src/css/font-awesome.css' ) }}"/>
        <link rel="stylesheet" href="{{ asset('/src/css/styles.css' ) }}"/>
        <link rel="stylesheet" href="{{ asset('/src/css/jquery.scrollbar.css' ) }}">

    <link rel="stylesheet" href="{{ asset('/src/css/owl.carousel.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset('/src/css/owl.theme.default.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset('/src/css/easy-responsive-tabs.css' ) }}">
    <link href="{{ asset('/src/css/style.css' ) }}" rel="stylesheet" type="text/css" />
        <script src ="{{url('/jquery/dist/jquery.min.js')}}"></script>
        <script src ="{{ asset('/src/js/bootstrap.min.js') }}"></script>
</head>
<body>
  @include('includes.user')

  @yield('content')