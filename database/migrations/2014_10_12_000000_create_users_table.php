<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Matricule')->nullable();
            $table->string('MatriculeFiscal')->nullable();
            $table->string('CodeClient')->nullable();
            $table->string('RaisonSociale')->nullable();
            $table->string('RegistreCommerce')->nullable();
            $table->string('Nom')->nullable();
            $table->string('Prenom')->nullable();
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Password');
            $table->integer('Role_id')->default(3);
            $table->string('Adresse')->nullable();
            $table->string('Tel')->nullable();
            $table->string('CinPasseport')->nullable();
            $table->string('Agence')->nullable();
            $table->integer('Etat')->default(1);
            $table->string('Image')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
