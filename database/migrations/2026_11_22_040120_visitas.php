<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("visitas", function (Blueprint $table) {
            $table->id();
            $table->date("fecha");
            $table->string("motivo");
            $table->foreignId("mascota_id")->constrained("mascotas")->cascadeOnDelete();
            $table->foreignId("veterinario_id")->constrained("veterinarios")->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("visitas");
    }
};
