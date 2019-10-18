<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'evaluaciones';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario', 'prueba', 'respuesta', 'puntaje', 'estado', 'notas'];

    
}
