<!DOCTYPE html>
<html class="no-js" lang="en">
<head>    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <!--====== Title ======-->
        <title>@yield('title')</title>
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets2/images/favicon.png" type="image/png">
    
        <!--====== Slick CSS ======-->
        <link rel="stylesheet" href="assets2/css/slick.css">
    
        <!--====== Line Icons CSS ======-->
        <link rel="stylesheet" href="assets2/css/LineIcons.css">
    
        <!--====== Material Design Icons CSS ======-->
        <link rel="stylesheet" href="assets2/css/materialdesignicons.min.css">
    
        <!--====== Jquery Ui CSS ======-->
        <link rel="stylesheet" href="assets2/css/jquery-ui.min.css">
    
        <!--====== nice select CSS ======-->
        <link rel="stylesheet" href="assets2/css/nice-select.css">
    
        <!--====== Bootstrap CSS ======-->
        <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    
        <!--====== Default CSS ======-->
        <link rel="stylesheet" href="assets2/css/default.css">
    
        <!--====== Style CSS ======-->
        <link rel="stylesheet" href="assets2/css/style.css">
    
      @yield('styles')
       {{-- <style>
        .product-style-1 .product-content {
            background-color: rgba(0, 0, 0, 0.64);
            margin: -133px 41px 0;
            position: relative;
            z-index: 5;
            padding: 30px 20px 35px;
        }
       </style> --}}

    </head>

<body>
    @yield('content')


    @yield('scripts')
</body>

</html>
