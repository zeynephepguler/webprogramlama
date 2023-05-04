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
        Schema::create('sepets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sepet_id');
            $table->unsignedBigInteger('urun_id');
            $table->integer('adet')->default(1);
            $table->timestamps();

           
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepets');
    }
};
