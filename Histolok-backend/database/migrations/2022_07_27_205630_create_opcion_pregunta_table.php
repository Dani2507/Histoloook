<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcion_pregunta', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignIdFor(\App\Models\Pregunta::class);
            $table->foreignIdFor(\App\Models\Opcion::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opcion_pregunta');
    }
};
