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
        Schema::create('nieuws', function (Blueprint $table) {
            $table->id('nieuws_id');
            $table->string('titel');
            $table->string('beschrijving');
            $table->date('aanmaakdatum');
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('categorie_id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        Schema::dropIfExists('nieuws');
    }
};
