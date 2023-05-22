@extends('admin.base')
@section('title', 'modification')
@section('content')
    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">utilisateur</h5>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a> <i class="ti-clipboard"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">utilisateur </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Modifier utilisateur </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-block">
                        <h5 class="sub-title">Modifier utilisateur </h5>
                        <form action="{{ route('admin.user.update',$User->id)}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-sm-3 col-form-label">
                                    <label for="name">Nom </label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="name" type="text" name="name" value="{{$User->name}}"class="form-control form-control-round">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('username') ? ' has-error' : '' }}">
                                <div class="col-sm-3 col-form-label">
                                    <label for="username">Nom d'utilisateur </label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="username" type="text" value="{{$User->username}}" name="username" class="form-control form-control-round">
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-sm-3 col-form-label">
                                    <label for="email">Email </label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="email" type="email" name="email" value="{{$User->email}}" class="form-control form-control-round">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-sm-3 col-form-label">
                                    <label for="password">Mot de passe </label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="password" type="password" name="password" class="form-control form-control-round">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row " style="margin-left: 911px">
                                <input type="submit" value="Valider" class="btn btn-success btn-round" style="width: 100%">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection