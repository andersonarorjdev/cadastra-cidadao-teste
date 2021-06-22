<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id()->autoincrement();
            $table->timestamps();
            $table->string('name');
            $table->date('nascimento')->__calluseCurrent();
            $table->enum('sexo', ['H', 'M']);
            $table->integer('cep');
            $table->text('endereco');
            $table->integer('numero')->default(0);
            $table->text('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
        });
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastros');
    }
}
