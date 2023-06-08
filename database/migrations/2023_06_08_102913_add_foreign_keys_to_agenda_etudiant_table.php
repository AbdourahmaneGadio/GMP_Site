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
        Schema::table('agenda_etudiant', function (Blueprint $table) {
            $table->foreign(['id_agenda'], 'agenda_etudiant_agenda_FK')->references(['id_agenda'])->on('agenda')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_etudiant'], 'agenda_etudiant_etudiant0_FK')->references(['id_etudiant'])->on('etudiant')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agenda_etudiant', function (Blueprint $table) {
            $table->dropForeign('agenda_etudiant_agenda_FK');
            $table->dropForeign('agenda_etudiant_etudiant0_FK');
        });
    }
};
