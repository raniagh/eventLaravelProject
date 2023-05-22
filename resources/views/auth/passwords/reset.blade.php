@extends('layoutAuth')

@section('body')
    <div class="panel panel-default">
        <div class="panel-heading">réinitialiser le mot de passe</div>

        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url(Request::segment(1) . '/password/reset') }}">
                {!! csrf_field() !!}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">E-Mail </label>

                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Mot de passe</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Confirmer mot de passe</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-refresh"></i>réinitialiser le mot de passe
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
