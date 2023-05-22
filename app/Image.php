<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Image extends Model
{
     protected $primaryKey='id_image';
    protected $fillable=[
        'titre',
        'nom_fichier',
        
    ];
    public function Activite()
    {
        return $this->belongsTo('App\Activite', 'id_activite');

    }
}
