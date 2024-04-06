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
        Schema::create('books', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('author_name');
            $table->string('isbn', 20); //Maximo de 20 caracteres
            $table->unsignedInteger('published_year'); //Solo permite integer positivos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
