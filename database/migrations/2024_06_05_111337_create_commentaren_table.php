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
        Schema::create('commentaren', function (Blueprint $table) {
            $table->id('commentaar_id');
            $table->string('content');
            $table->date('aanmaakdatum');
            $table->foreignid('user_id')->constrained('users');
            $table->unsignedBigInteger('nieuws_id');
            $table->foreign('nieuws_id')->references('nieuws_id')->on('nieuws');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaren');
    }
};
