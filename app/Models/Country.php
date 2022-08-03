<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla a conectar:
    protected $table ="countries";
    //la clave primaria de esa tabla:
    protected $primaryKey = "country_id";
    //omitir campos de auidtoria:
    public $timestamps =false;
    use HasFactory;

     //relacion entre pais y region
     public function region(){
        return $this->hasMany(Region::class,'region_id');
    }

    /*relacion entre pais y continente
    public function continente(){
        return $this->belongsTo(Continent::Class,'continent_id');
    }*/

      //Relacion M a M con lenguaje
      public function idioma(){
        return $this->belongsToMany(Language::class,'country_languages','country_id','language_id');
    }

}
