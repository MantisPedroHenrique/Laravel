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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); //int
            $table->string('name'); //string
            $table->string('cpf'); // string 7777.777.777
            $table->string('email');
            $table->string('fone');
            $table->date('nascimento'); //date 1998-07-24
            $table->datetime('data'); //datetime 1998-07-24 18:03:15
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
