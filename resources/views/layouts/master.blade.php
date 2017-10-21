<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="{{ asset('src/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/css/font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('src/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('src/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('src/css/easy-responsive-tabs.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/css/style.css') }}">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet"> 
@yield('styles')
</head>
<body class="home">
	@include('includes.header')
	@yield('content')
	@include('includes.footer')
	
</body>
</html>
