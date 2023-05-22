@extends('admin.base')
@section('title', 'admin')
@section('content')
    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Utilisateurs</h5>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a > <i class="ti-clipboard"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Utilisateurs</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Tous les utilisateurs</a>
                </li>
            </ul>
        </div>
    </div>
    @if(Session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled"></i>
            </button>{{Session::get('message') }}</div>

    @endif
    @if($users->isEmpty())

        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled"></i>
            </button>
            <strong>Désolé!</strong> aucun utilisateur n'est disponible pour le moment
        </div>

    @else
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="dom-table" class="table  table-bordered nowrap">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Nom d'utilisateur</th>
                                        <th>Email</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>

                                            <td>{{$user->name}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <a href="{{ route('admin.user.edit', $user->id) }}"><i class=" ti-pencil-alt" aria-hidden="true"></i></a>
                                            </td>
                                            <td>

                                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="patch">
                                                     <input type="submit" value="supprimer" class="btn btn-success btn-round" style="width: 100%" onclick="return confirm('Voulez-vous Vraiment supprimer cette activité ?')">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
