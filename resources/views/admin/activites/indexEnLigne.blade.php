@extends('admin.base')
@section('title', 'admin')
@section('content')
    <!-- Dropdown Structure -->


    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Activités</h5>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a > <i class="ti-clipboard"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Activités</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">activités en ligne</a>
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
    @if($activites->isEmpty())

<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<i class="icofont icofont-close-line-circled"></i>
</button>
<strong>Désolé!</strong> aucune activité n'est disponible pour le moment 
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
                                    <th>catégorie</th>
                                    <th>Responsable</th>
                                    <th>Horaires</th>
                                    <th>Durée</th>
                                    <th>Lieu</th>
                                    <th>voir</th>
                                    <th>Modifier</th>
                                    <th>Supprimer</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($activites as $activite)
                                    <tr>
                                        <td><a href="#"><span class="list-enq-name">{{$activite->titre}}</span></a></td>
                                        <td><span class="list-enq-city">{{$activite->classement}}</span></td>
                                        <td>{{$activite->responsable}}</td>
                                        <td>{{$activite->horaire}}</td>
                                        <td>{{$activite->duree}}</td>
                                        <td>{{$activite->lieu}}</td>
                                        <td>
                                            <a href=""><i class="ti-eye" aria-hidden="true"></i></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.activites.edit', $activite->id_activite) }}"><i class=" ti-pencil-alt" aria-hidden="true"></i></a>
                                        </td>
                                        <td>

                                            <form action="{{ route('admin.activites.destroy', $activite->id_activite) }}" method="patch">
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
