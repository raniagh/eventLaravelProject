@extends('admin.base')
@section('title', 'ajout')
@section('content')
    <!--== BODY CONTNAINER ==-->

    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Produits</h5>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a> <i class="ti-clipboard"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Produits</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Ajouter Produit</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-block">
                        <h5 class="sub-title">Ajouter un produit</h5>
                        <form action="{{ route('admin.activites.Add')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <div class="col-sm-3 col-form-label">
                                    <label for="titre">Nom produit</label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="titre" type="text" name="titre" class="form-control form-control-round">
                                    @if ($errors->has('titre'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group row{{ $errors->has('category') ? ' has-error' : '' }}">
                                 <div class="col-sm-3 col-form-label">
                                     <label for="choix">Choix Catégorie</label>
                                 </div>
                                 <div class="col-sm-9">
                                     <select name="category" size="1" class="form-control form-control-round">
                                         <option value='Woman'>Woman</option>
                                         <option value='Man'>Man</option>
                                         <option value='Kids'>Kids</option>
                                     </select>
                                     @if ($errors->has('category'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('category') }}</strong>
                                            </span>
                                     @endif
                                 </div>
                        </div>

                        <div class="form-group row{{ $errors->has('description') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label >Description de produit</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control form-control-round"></textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('prix') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label for="choix">Prix</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="prix" class="form-control form-control-round">
                                @if ($errors->has('prix'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('prix') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row{{ $errors->has('imgUrl') ? ' has-error' : '' }}">
                                <div class="col-sm-3 col-form-label">
                                    <label for="titre">Image</label>
                                </div>
                                <div class="col-sm-9">
                                <input id="imgUrl"  name="imgUrl"  type="file" class="form-control form-control-round">

                                    @if ($errors->has('imgUrl'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('imgUrl') }}</strong>
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