<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignPopular extends Model
{
    use HasFactory;

    protected $table = 'popular_designs';


    protected $fillable = [
        'title',
        'description',
        'path', // Gunakan 'path' sebagai pengganti 'image'
    ];
}
