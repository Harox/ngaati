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
            $table->increments('id');
            $table->string('nome');
            $table->string('apelido');
            $table->string('nacionalidade')->nullable();
            $table->date('data_nascimento');
            $table->enum('sexo', ['F', 'M']);
            $table->string('telefone')->unique();
            $table->string('email')->unique();
            $table->string('bi_nr');
            $table->integer('id_cartao');
            $table->string('provincia');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('av');
            $table->string('rua');
            $table->string('casa');
            $table->string('quarteirao');
            $table->string('municipio');
            $table->float('latitude', 10, 10)->nullable();
            $table->float('logitude', 10, 10)->nullable();
            $table->dateTime('ultimaDoacao', 0)->nullable();
            $table->dateTime('proximaDoacao', 0)->nullable();
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
