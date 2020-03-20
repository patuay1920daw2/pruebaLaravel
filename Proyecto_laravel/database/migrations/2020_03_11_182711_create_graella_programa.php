<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraellaPrograma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graella_programa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_programa');
            $table->foreignId('id_graella');
            $table->timestamps();

            
            $table->foreign('id_programa')->references('id')->on('programas')->onDelete('cascade');
            $table->foreign('id_graella')->references('id')->on('graellas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graella_programa');
    }
}
