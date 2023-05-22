<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lila Jmila</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="{{URL::asset('images/fav.ico')}}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/mob.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/materialize.css')}}" />
</head>

<body>
    @yield('body')
    <!--======== SCRIPT FILES =========-->
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/materialize.min.js')}}"></script>
    <script src="{{URL::asset('js/custom.js')}}"></script>
</body>
</html>