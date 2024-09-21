<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('design_populers', function (Blueprint $table) {
        $table->id();
        $table->string('image')->nullable();  // URL gambar
        $table->string('theme');              // Tema card
        $table->string('category');           // Kategori card
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('design_populers');
    }
};
