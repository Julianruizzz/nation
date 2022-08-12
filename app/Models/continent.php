<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class continent extends Model
{
        //La tabla con la cual el modelo se relaciona dentro de la clase continent
        protected $table = "continents";
        //La clave primaria de dicha tabla 
        protected $primaryKey="continent_id";
        //Anular
        public $timestamps =  false;
    use HasFactory;
        //relacion entre continente y region 
        Public  function regiones(){
            return $this->hasMany( Region::class , 
                                'continent_id' );
    
        }
    
}