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
        Schema::create('note', function (Blueprint $table) {
            $table->integer('id_note')->primary();
            $table->integer('note');
            $table->integer('id_etudiant')->index('note_etudiant_FK');
            $table->integer('id_matiere')->index('note_matiere0_FK');
            $table->integer('id_enseignant')->index('note_enseignant1_FK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('note');
    }
};
