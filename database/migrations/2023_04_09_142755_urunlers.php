<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\urunlers;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('urunlers', function (Blueprint $table) {
            $table->id();
            $table->string('gorsel')->nullable();
            $table->string('urunadi')->nullable();
            $table->string('marka')->nullable();
            $table->string('model')->nullable();
            $table->string('bilgi')->nullable();
            $table->string('fiyat')->nullable();
            $table->string('kategori')->nullable();
            $table->string('satici')->nullable();
     
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
