<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $table = "visitas";
    protected $fillable = [
        "fecha",
        "motivo",
        "mascota_id",
        "veterinario_id",
    ];

    public function mascota(){
        return $this->belongsTo(Mascota::class, "mascota_id");
    }

    public function veterinario(){
        return $this->belongsTo(Veterinario::class, "veterinario_id");
    } 

}
