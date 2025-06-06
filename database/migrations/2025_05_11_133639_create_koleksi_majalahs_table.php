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
    Schema::create('koleksi_majalahs', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('edisi');
        $table->string('penerbit');
        $table->date('tanggal_terbit');
        $table->text('deskripsi')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksi_majalahs');
    }
};
