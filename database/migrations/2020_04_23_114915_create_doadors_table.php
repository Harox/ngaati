<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('nacionalidade')->nullable();
            $table->string('celular')->unique();
            $table->string('email')->unique();
            $table->string('provincia');
            $table->string('endereco');
            $table->float('latitude', 10, 10)->nullable();
            $table->float('logitude', 10, 10)->nullable();
            $table->date('nascimento');
            $table->dateTime('ultimaDoacao', 0)->nullable();
            $table->enum('tipoSanguineo', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'])->nullable();
            $table->string('depostoFavorito')->nullable();
            $table->float('pontos', 3, 3);
            $table->float('peso', 3, 3)->nullable();
            $table->float('altura', 3, 3)->nullable();
            $table->enum('estado', ['A', 'D']);
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
        Schema::dropIfExists('doadors');
    }
}
