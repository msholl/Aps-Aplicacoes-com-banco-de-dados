<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); //cria o campo id autoincremento e primary key

            $table->string('nome', 100); //cria o campo nome varchar(100)

            $table->string('descricao', 255)->nullable(); //cria o campo descricao varchar(255) e permite nulo

            $table->decimal('preco', 10, 2); //cria o campo preco decimal(10,2)

            $table->integer('quantidade'); //cria o campo quantidade int

            $table->timestamps(); //cria os campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
