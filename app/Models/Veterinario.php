<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    protected $table = "veterinarios";
    protected $fillable = [
        "codigo",
        "nombre",
    ];

    public function visitas(){
        return $this->hasMany(Visita::class, "veterinario_id");
    }




    
}
