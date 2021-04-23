<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjoutLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajout_livres', function (Blueprint $table) {
            $table->id();
            $table->string('nom_livre');
            $table->string('nom_auteur');
            $table->string('prenom_auteur');
            $table->string('pays');
            $table->date('date_parution');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ajout_livres');
    }
}
