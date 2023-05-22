@extends('layoutAuth')

@section('body')
    <div class="blog-login">
        <div class="blog-login-in">
            <form action="{{ route('admin.auth.login')}}" method="post">
             <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                <img src="{{URL::asset('images/logo.png')}}" alt="" />
                <div class="row">
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <div class="input-field col s12">
                        <input id="first_name1" type="text" name="username" class="validate" value="{{ old('username') }}">
                        <label for="first_name1">Nom d'utilisateur </label>
                         @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                </div>
                <div class="row">
                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-field col s12">
                        <input id="last_name" type="password" name="password" class="validate">
                        <label for="last_name">Mot de passe</label>
                         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                </div>
                <div  style="text-align:center;">
                    <div class="input-field col s12">
                        <input type="submit" value="Se connecter" class="waves-effect waves-light btn-large btn-log-in" >
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop