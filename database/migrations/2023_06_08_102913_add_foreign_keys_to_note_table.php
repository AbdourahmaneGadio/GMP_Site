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
        Schema::table('note', function (Blueprint $table) {
            $table->foreign(['id_enseignant'], 'note_enseignant1_FK')->references(['id_enseignant'])->on('enseignant')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_etudiant'], 'note_etudiant_FK')->references(['id_etudiant'])->on('etudiant')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_matiere'], 'note_matiere0_FK')->references(['id_matiere'])->on('matiere')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('note', function (Blueprint $table) {
            $table->dropForeign('note_enseignant1_FK');
            $table->dropForeign('note_etudiant_FK');
            $table->dropForeign('note_matiere0_FK');
        });
    }
};
