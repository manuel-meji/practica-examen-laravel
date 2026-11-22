<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{

    protected $edad;
    protected $table = "mascota";
    protected $fillable = [
        "nombre",
        "especie",
        "fecha_nacimiento",
    ];

    public function visitas(){
        return $this->hasMany(Visita::class, "mascota_id");
    }



    public function Edad(){
        $hoy = now();
        $nacimiento = \DateTime::createFromFormat('Y-m-d', $this->fecha_nacimiento);
        $edad = $hoy->diff($nacimiento)->y;
        return $edad;
    }


}
