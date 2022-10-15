<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postagens', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            $table->string('titulo');
            $table->string('descricao');
            $table->text('conteudo');
            $table->foreignId('editor');
            $table->date('data_criacao');
            $table->time('hora_criacao');

            $table->foreign('editor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postagens');
    }
};
