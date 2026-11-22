<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = "medicamentos";
    protected $fillable = [
        "codigo",
        "nombre",
    ];

    public function aplicaciones(){
        return $this->hasMany(Aplicacion::class, "codigo");
    }
}
