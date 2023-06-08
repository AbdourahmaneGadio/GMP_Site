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
        Schema::create('agenda_etudiant', function (Blueprint $table) {
            $table->integer('id_agenda');
            $table->integer('id_etudiant')->index('agenda_etudiant_etudiant0_FK');
            $table->string('agenda');

            $table->primary(['id_agenda', 'id_etudiant']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_etudiant');
    }
};
