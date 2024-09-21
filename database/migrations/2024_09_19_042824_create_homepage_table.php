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
    Schema::create('homepage', function (Blueprint $table) {
        $table->id();
        // Kolom umum untuk konten homepage
        $table->string('section');  // Akan menyimpan nama section seperti 'design_populer', 'design_3d', dll.
        $table->string('title')->nullable(); // Title tiap section
        $table->text('description')->nullable(); // Deskripsi tiap section
        $table->string('image')->nullable(); // Gambar tiap section
        $table->string('video_url')->nullable(); // URL video untuk video section
        $table->string('contact_info')->nullable(); // Kontak info untuk contact section
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage');
    }
};
