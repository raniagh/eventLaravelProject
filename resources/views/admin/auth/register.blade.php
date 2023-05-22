@extends('admin.index')
@section ('titre','ajout Utilisateur')
@section('body')
   <div class="col-md-4 col-md-offset-4 text-center">
        <h1>ajout utilisateur </h1>
        <form action="{{route('admin.auth.register')}}" method="post">
             <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
            <div class="form-group">
                <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <input name="username" type="text" value="{{ old('username') }}" class="form-control" placeholder=" User Name">
            </div>
            <div class="form-group">
                <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            </div>
            
            <div class="form-group">
                <input type="submit" value="Register" class="btn btn-default pull-left">
                
            </div>
        </form>
    </div>
@endsection

