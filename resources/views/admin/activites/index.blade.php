@extends('admin.base')
@section('title', 'admin')
@section('content')
    <!-- Dropdown Structure -->


    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Produits</h5>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a > <i class="ti-clipboard"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Produits</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Toutes les produits</a>
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
<strong>Désolé!</strong> aucune produit n'est disponible pour le moment 
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
                                    <th>description</th>
                                    <th>Prix</th>
                                    <th>images</th>
                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($activites as $activite)
                                    <tr>
                                        <td><a href="#"><span class="list-enq-name">{{$activite->titre}}</span></a></td>
                                        <td><span class="list-enq-city">{{$activite->category}}</span></td>
                                        <td>{{$activite->description}}</td>
                                        <td>{{$activite->prix}}</td>
                                       
                                        <td><img src="{{asset('/images/'.$activite->imgUrl)}}" width="100" height="100" alt="Italian Trulli"> </td>
                        
                                        <td>
                                            <a href="{{ route('admin.activites.edit', $activite->id_activite) }}"><i class=" ti-pencil-alt" aria-hidden="true"></i></a>
                                        </td>
                                        <td>

                                            <form action="{{ route('admin.activites.destroy', $activite->id_activite) }}" method="patch">
                                                 <input type="submit" value="supprimer" class="btn btn-success btn-round" style="width: 90%" onclick="return confirm('Voulez-vous Vraiment supprimer cette activité ?')">
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
