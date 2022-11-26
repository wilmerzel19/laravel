<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table ='personas';
    protected $fillable =
    [
        'nombre',
        'cedula',
        'telefono',
        'sexo',
    ];
        //Relaciones
        public function recorridos()
        {
            return $this->hasMany(PersonaUnidad::class, 'persona_id');
        }
}
