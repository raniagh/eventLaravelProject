@extends('users.base')
@section('title', 'ajout')
@section('content')
    <!--== BODY CONTNAINER ==-->

    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Activités</h5>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a> <i class="ti-clipboard"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Activités</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Ajouter activité</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-block">
                        <h5 class="sub-title">Ajouter une nouvelle activité</h5>
                        <form action="{{ route('users.activites.Add')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <div class="col-sm-3 col-form-label">
                                    <label for="titre">Nom activité</label>
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

                        <div class="form-group row{{ $errors->has('classement') ? ' has-error' : '' }}">
                                 <div class="col-sm-3 col-form-label">
                                     <label for="choix">Choix Catégorie</label>
                                 </div>
                                 <div class="col-sm-9">
                                     <select name="classement" size="1" class="form-control form-control-round">
                                         <option value='Easy chat for research'>Easy chat for research</option>
                                         <option value='Scientific workshops'>Scientific workshops</option>
                                         <option value='Special research entertainment'>Special research entertainment</option>
                                         <option value='Social actvities'>Social actvities</option>
                                         <option value='Science and culture wedding'>Science and culture wedding</option>
                                         <option value='Inclusive classrooms'>Inclusive classrooms</option>
                                         <option value='Eu corner'>Eu corner</option>
                                     </select>
                                     @if ($errors->has('classement'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('classement') }}</strong>
                                            </span>
                                     @endif
                                 </div>
                        </div>

                        <div class="form-group row{{ $errors->has('description') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label >Description de l'activité </label>
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

                        <div class="form-group row{{ $errors->has('responsable') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label>Responsable</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="responsable" class="form-control form-control-round">
                                @if ($errors->has('responsable'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('responsable') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('horaire') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label>Horaire</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="time" name="horaire" class="form-control form-control-round">
                                @if ($errors->has('horaire'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('horaire') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('duree') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label>Durée (minutes)</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="duree" class="form-control form-control-round">
                                @if ($errors->has('duree'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('duree') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('lieu') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label>Lieu</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="lieu" class="form-control form-control-round">
                                @if ($errors->has('lieu'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('lieu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('logistique') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label>Logistique</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="logistique" class="form-control form-control-round">
                                @if ($errors->has('logistique'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('logistique') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('nb_animateur') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label>Nombre d'animateurs</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="nb_animateur" class="form-control form-control-round">
                                @if ($errors->has('nb_animateur'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('nb_animateur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('spectateur') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label for="choix">Nombre de spectateurs</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="spectateur" class="form-control form-control-round">
                                @if ($errors->has('spectateur'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('spectateur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('observation') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-form-label">
                                <label>Observation</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="observation" class="form-control form-control-round">
                                @if ($errors->has('observation'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('observation') }}</strong>
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