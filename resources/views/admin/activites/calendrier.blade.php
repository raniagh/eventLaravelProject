@extends('admin.base')
@section('title', 'calandrier')

@section('tete')
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/bower_components/fullcalendar/css/fullcalendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/bower_components/fullcalendar/css/fullcalendar.print.css')}}" media='print'>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/css/jquery.mCustomScrollbar.css')}}">
@endsection

@section('content')
    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Programme</h5>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a> <i class="ti-calendar"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Programme</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Calendrier</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Calendrier</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-xl-10 col-md-12">
                                    <div id='calendar'></div>
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
    <script src="{{URL::asset('../files/assets/js/classie.js')}}"></script>
    <script src="{{URL::asset('../files/bower_components/moment/js/moment.min.js')}}"></script>
    <script src="{{URL::asset('../files/bower_components/fullcalendar/js/fullcalendar.min.js')}}"></script>
    <script src="{{URL::asset('../files/assets/pages/full-calender/calendar.js')}}"></script>
    <script src="{{URL::asset('../files/assets/js/pcoded.min.js')}}"></script>
    <script src="{{URL::asset('../files/assets/js/vertical/vertical-layout.min.js')}}"></script>
    <script src="{{URL::asset('../files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{URL::asset('../files/assets/js/script.js')}}"></script>
@endsection