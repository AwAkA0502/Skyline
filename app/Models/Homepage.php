<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model
    protected $table = 'homepage';

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'section', 
        'title', 
        'description', 
        'image', 
        'video_url', 
        'contact_info',
    ];
}
