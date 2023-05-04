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
        Schema::create('siparislers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kullanici_id')->constrained('kullanicis')->onDelete('cascade');
            $table->string('adres');
            $table->decimal('toplam_tutar', 10, 2);
            $table->string('durum')->default('Onay Bekliyor');
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
