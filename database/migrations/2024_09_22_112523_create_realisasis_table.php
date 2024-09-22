<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRealisasisTable extends Migration
{
    public function up()
    {
        Schema::create('realisasis', function (Blueprint $table) {
            $table->id();
            $table->string('link_youtube')->nullable(); // Kolom untuk link YouTube
            $table->string('image')->nullable(); // Kolom untuk menyimpan path gambar
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });

        // Menambahkan data default ke tabel setelah dibuat
        DB::table('realisasis')->insert([
            [
                'link_youtube' => 'https://www.youtube.com/watch?v=video_id_1',
                'image' => 'images/video1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link_youtube' => 'https://www.youtube.com/watch?v=video_id_2',
                'image' => 'images/video2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link_youtube' => 'https://www.youtube.com/watch?v=video_id_3',
                'image' => 'images/video3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('realisasis');
    }
}