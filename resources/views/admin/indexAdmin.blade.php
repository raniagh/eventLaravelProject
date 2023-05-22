@extends('admin.base')
@section('title', 'admin')
@section('tete')
     <!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
        <meta name="author" content="codedthemes" />
        <link rel="icon" href="http://html.codedthemes.com/gradient-able/files/assets/images/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/bower_components/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/icon/themify-icons/themify-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/css/jquery.mCustomScrollbar.css')}}">
        <link rel="stylesheet" href="{{URL::asset('../files/assets/pages/chart/radial/css/radial.css')}}" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/css/style.css')}}">

@endsection
@section('content')

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card tabs-card">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('pied')
            <script src="{{URL::asset('../files/bower_components/jquery/js/jquery.min.js')}}"></script>
            <script src="{{URL::asset('../files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
            <script src="{{URL::asset('../files/bower_components/popper.js/js/popper.min.js')}}"></script>
            <script src="{{URL::asset('../files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{URL::asset('../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
            <script src="{{URL::asset('../files/bower_components/modernizr/js/modernizr.js')}}"></script>
            <script src="{{URL::asset('../files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
            <script src="{{URL::asset('../files/assets/js/vertical/vertical-layout.min.js')}}"></script>
            <script src="{{URL::asset('../files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
            <script src="{{URL::asset('../files/assets/js/script.js')}}"></script>
            <script src="{{URL::asset('../files/assets/js/pcoded.min.js')}}"></script>
            <script src="{{URL::asset('../files/assets/pages/dashboard/custom-dashboard.js')}}"></script>
            <script src="{{URL::asset('../files/assets/pages/widget/amchart/light.js')}}"></script>
            <script src="{{URL::asset('../files/assets/pages/widget/amchart/amcharts.js')}}"></script>
            <script src="{{URL::asset('../files/assets/pages/widget/amchart/serial.js')}}"></script>
            <script src="{{URL::asset('../files/assets/js/SmoothScroll.js')}}"></script>
            <script src="{{URL::asset('../files/assets/pages/widget/excanvas.js ')}} "></script>
@endsection