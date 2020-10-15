<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        پنل مدیریت ادمین
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{url('/assets/adminpanel/css/app.css')}}" rel="stylesheet"/>

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4 {
            font-family: "Cairo";
        }
    </style>
</head>

<body class="">
<div class="wrapper ">
    @include('adminpanel.sidebar')
    <div class="main-panel">
        @include('adminpanel.navbar')
        @yield('content')
        @include('adminpanel.footer')
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{url('/assets/adminpanel/js.app.js')}}"></script>
</body>

</html>
