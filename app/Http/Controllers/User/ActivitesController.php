<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Activite;
use App\Models\User;
use Auth;

class ActivitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   protected $activites;
      public function __construct(Activite $activites)
    {
        $this->activites = $activites;
    }

    public function setValidatesRequestErrorBag($validatesRequestErrorBag)
    {
        $this->validatesRequestErrorBag = $validatesRequestErrorBag;
    }

     public function index()
    {   $id=Auth::guard('users')->user()->id;
        $activites = $this->activites->where('id','=',$id)->get();
        return view('users.indexUser', compact('activites'));
    
    }

    public function getActivite()
    {
        return view('users.activites.add');
    }

    public function create(Activite $activite)
    {
       return view('users.activites.add', compact('activite'));
    }

    public function store(Request $request)
    {
        $Activite = new Activite();
        $this->validate($request, [
            'titre' => 'required',
            'classement' => 'required',
            'description' => 'required',
            'responsable' => 'required',
            'horaire' => 'required',
            'duree' => 'required',
            'lieu' => 'required',
            'logistique' => 'required',
            'nb_animateur' => 'required',
            'spectateur' => 'required',
            'observation' => 'required',
        ]);

        $Activite->titre = $request->titre;
        $Activite->classement= $request->classement;
        $Activite->description = $request->description;
        $Activite->responsable = $request->responsable;
        $Activite->horaire = $request->horaire;
        $Activite->duree = $request->duree;
        $Activite->lieu = $request->lieu;
        $Activite->logistique = $request->logistique;
        $Activite->nb_animateur= $request->nb_animateur;
        $Activite->spectateur = $request->spectateur;
        $Activite->observation = $request->observation;
        $Activite->statut="en attente";
        $Activite->id=Auth::guard('users')->user()->id;
        $Activite->save();
        return redirect(route('user.activites.index'))->with('message','' .$Activite->titre . ' a été ajouté avec succès');
    }

    public function edit($id_activite)
    {
         $Activite = Activite::findOrFail($id_activite);
          return view('users.activites.edit', compact('Activite'));
    }

    public function update(Request $request, $id_activite)
   {
    $this->validate($request, [
        'titre' => 'required',
        'classement' => 'required',
        'description' => 'required',
        'responsable' => 'required',
        'horaire' => 'required',
        'duree' => 'required',
        'lieu' => 'required',
        'logistique' => 'required',
        'nb_animateur' => 'required',
        'spectateur' => 'required',
        'observation' => 'required',
    ]);
        $Activite = Activite::findOrFail($id_activite);
        $Activite->fill($request->only('titre','classement','description','responsable','horaire','duree','lieu','logistique','nb_animateur','spectateur','observation'))->save();
      

        return redirect(route('user.activites.index'))->with('message','Activité' .$Activite->titre . ' a été modifié avec succès');
    }


    public function destroy($id_activite)
    {
         Activite::where('id_activite','=', $id_activite)->delete();
         return redirect(route('users.activites.index'))->with('message','Activité a été suppimé avec succès!');
    }

    public function Recherche()
    {

        $keyword = Input::get('keyword');
        $activites = $this->activites
                      ->where('titre', 'like', '%' . $keyword . '%') 
                      ->orwhere('responsable', 'like', '%' . $keyword . '%') 
                      ->orwhere('classement', 'like', '%' . $keyword . '%') 
                      ->orwhere('horaire', 'like', '%' . $keyword . '%') 
                      ->orwhere('duree', 'like', '%' . $keyword . '%') 
                      ->orwhere('lieu', 'like', '%' . $keyword . '%')  
                      ->get();
        return view('users.activites.index', compact('activites'));

    }
     public function Recherchechat()
    {$id=Auth::guard('users')->user()->id;
         $activites = $this->activites
                      ->where('classement', 'like', '%' . 'Easy chat for research' . '%')
                      ->where('id','=',$id)
                      ->get();
        return view('users.indexUser', compact('activites'));
    }
    public function Recherchework()
    {
      $id=Auth::guard('users')->user()->id;
         $activites = $this->activites
                      ->where('classement', 'like', '%' . 'Scientific workshops' . '%')
                      ->where('id','=',$id)
                      ->get();
        return view('users.indexUser', compact('activites'));
    }
    public function Rechercheenjoy()
    {
      $id=Auth::guard('users')->user()->id;
         $activites = $this->activites
                      ->where('classement', 'like', '%' . 'Special research entertainment' . '%')
                      ->where('id','=',$id)
                      ->get();
        return view('users.indexUser', compact('activites'));
    }
    public function Rechercheplay()
    {
      $id=Auth::guard('users')->user()->id;
         $activites = $this->activites
                      ->where('classement', 'like', '%' . 'Social actvities' . '%')
                      ->where('id','=',$id)
                      ->get();
        return view('users.indexUser', compact('activites'));
    }
    public function Recherchelearn()
    {
      $id=Auth::guard('users')->user()->id;
         $activites = $this->activites
                      ->where('classement', 'like', '%' . 'Science and culture wedding' . '%')
                      ->where('id','=',$id)
                      ->get();
        return view('users.indexUser', compact('activites'));
    }
    public function Rechercheclass()
    {
      $id=Auth::guard('users')->user()->id;
         $activites = $this->activites
                      ->where('classement', 'like', '%' . 'Inclusive classrooms' . '%')
                      ->where('id','=',$id)
                      ->get();
        return view('users.indexUser', compact('activites'));
    }
    public function Recherchecorner()
    {
      $id=Auth::guard('users')->user()->id;
         $activites = $this->activites
                      ->where('classement', 'like', '%' . 'Eu corner' . '%')
                      ->where('id','=',$id)
                      ->get();
        return view('users.indexUser', compact('activites'));
    }
    

}
