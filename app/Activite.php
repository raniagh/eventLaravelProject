<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Activite extends Model
{
   protected $primaryKey='id_activite';
    protected $fillable=[
        'titre',
        'category',
        'description',
        'prix',
        'imgUrl',
        
    ];
    public function Image()
    {
        return $this->hasMany('App\Image', 'id_image');

    }
}
