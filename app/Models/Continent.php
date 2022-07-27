<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a conectar:
    protected $table ="continents";
    //la clave primaria de esa tabla:
    protected $primaryKey = "continent_id";
    //omitir campos de auidtoria:
    public $timestamps =false;
    use HasFactory;
}
