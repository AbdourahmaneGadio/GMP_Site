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
        Schema::create('projet', function (Blueprint $table) {
            $table->integer('id_projet')->primary();
            $table->string('nom_projet', 50);
            $table->text('detail_projet');
            $table->integer('id_entreprise')->index('projet_entreprise_FK');
            $table->integer('id_etudiant')->index('projet_etudiant0_FK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projet');
    }
};
