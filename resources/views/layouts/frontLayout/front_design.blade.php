<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>MGI GRoup - Manakamana Group of Industries</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/frontend_images/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>

  @include('layouts.frontLayout.front_header')

  @yield('content')
  @include('layouts.frontLayout.front_footer')