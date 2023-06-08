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
        Schema::create('agenda_enseignant', function (Blueprint $table) {
            $table->integer('id_agenda');
            $table->integer('id_enseignant')->index('agenda_enseignant_enseignant0_FK');
            $table->string('agenda_enseignant');

            $table->primary(['id_agenda', 'id_enseignant']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_enseignant');
    }
};
