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
        Schema::create('offre', function (Blueprint $table) {
            $table->integer('id_offre')->primary();
            $table->string('nom_offre', 50);
            $table->date('date_offre');
            $table->text('detail_offre');
            $table->integer('id_entreprise')->index('offre_entreprise_FK');
            $table->integer('id_etudiant')->index('offre_etudiant0_FK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offre');
    }
};
