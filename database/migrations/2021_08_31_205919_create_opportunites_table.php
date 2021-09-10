<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunites', function (Blueprint $table) {
            $table->id();
            $table->string('MatriculeFiscal')->nullable();
            $table->string('RefMatriculeFiscal')->nullable();
            $table->string('CodeClient')->nullable();
            $table->string('RaisonSociale')->nullable();
            $table->string('RegistreCommerce')->nullable();
            $table->string('RefRegistreCommerce')->nullable();
            $table->string('Nom')->nullable();
            $table->string('Prenom')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('Tel')->nullable();
            $table->string('CinGerant')->nullable();
            $table->string('Offre')->nullable();
            $table->integer('Etat')->default(1);
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
        Schema::dropIfExists('opportunites');
    }
}
