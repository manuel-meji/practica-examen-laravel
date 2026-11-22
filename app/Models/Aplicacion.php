<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Aplicacion extends Pivot
{
    protected $table= "aplicaciones";
    protected $fillable=[
        "dosis_ml",
        "medicamento_id",
        "visita_id"
    ];

    public function medicamento(){
        return $this->belongsTo(Medicamento::class, "medicamento_id");
    }

    public function visita(){
        return $this->belongsTo(Visita::class, "visita_id");
    }
}
