 @extends('layoutAuth')

@section('body')
    <div class="blog-login">
        <div class="blog-login-in">
            <form action="{{ route('users.auth.login')}}" method="post">
                {!! csrf_field() !!}
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
            <a href="{{route('users.password.reset')}}">Je ne connais pas le nom d'utilisateur ou le mot de passe</a>
        </div>
    </div>
@stop
                   