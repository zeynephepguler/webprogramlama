<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\users;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kullanicis', function (Blueprint $table) {
            $table->id();
            $table->string('kullaniciAdi')->nullable();
            $table->string('Soyad')->unique();
            $table->string('Telefon')->nullable();
            $table->string('Adres')->nullable();
            $table->string('Sifre')->nullable();
            $table->string('Email')->nullable();
                       
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
