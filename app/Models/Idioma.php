<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
        //La tabla con la cual el modelo se relaciona dentro de la clase continent
        protected $table = "languages";
        //La clave primaria de dicha tabla 
        protected $primaryKey="language_id";
        //Anular campos de auditoria
        public $timestamps =  false;
        use HasFactory;

        //relacion M:M con paises(Country)
        public function paises(){
            //belongsToMany : Parametros
            //1 El modelo a relacionar
            //2 La tabla pivot
            //3 la FK del modelo actual en el pivot
            //4 La FK del modelo a relacionar en el pivot
            return $this->belongsToMany(Country::class,
                                        'country_languages',
                                        'language_id',
                                        'country_id'
                                        )->withPivot('official');
        }
}
