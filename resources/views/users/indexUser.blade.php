@extends('users.base')
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
                                <div class="card-block p-0">

                                    <ul class="nav nav-tabs md-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a  class="nav-link" href="{{ route('users.activites.rechercheChat')}}" role="tab"><i class="fa fa-database"></i>#Chat</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a   class="nav-link" href={{ route('users.activites.rechercheWork')}} role="tab"><i class="fa fa-home"></i>#Work</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a  class="nav-link" href="{{ route('users.activites.rechercheEnjoy')}}" role="tab"><i class="fa fa-database"></i>#Enjoy</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  href="{{ route('users.activites.recherchePlay')}}" role="tab"><i class="fa fa-database"></i>#Play</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('users.activites.rechercheLearn')}}" role="tab"><i class="fa fa-play-circle"></i>#Learn</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  href="{{ route('users.activites.rechercheClass')}}" role="tab"><i class="fa fa-key"></i>#Class</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('users.activites.rechercheCorner')}}" role="tab"><i class="fa fa-key"></i>#EU Corner</a>
                                            <div class="slide"></div>
                                        </li>

                                    </ul>
                                    @if($activites->isEmpty())

                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="icofont icofont-close-line-circled"></i>
                                            </button>
                                            <strong>Désolé!</strong> aucune activité n'est disponible pour le moment
                                        </div>

                                    @else

                                        <div class="tab-content card-block">
                                            <div class="tab-pane active" id="home3" role="tabpanel">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr>
                                                            <th>Nom activité</th>
                                                            <th>Responsable</th>
                                                            <th>Horaires</th>
                                                            <th>Durée</th>
                                                            <th>Lieu/Superficie</th>
                                                            <th>Statut</th>
                                                        </tr>
                                                        @foreach($activites as $activite)
                                                            <tr>
                                                                <td>{{$activite->titre}}</td>
                                                                <td>{{$activite->responsable}}</td>
                                                                <td>{{$activite->horaire}}</td>
                                                                <td>{{$activite->duree}}</td>
                                                                <td>{{$activite->lieu}}</td>
                                                                <td><span class="label label-danger">{{$activite->statut}}</span></td>

                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                </div>
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