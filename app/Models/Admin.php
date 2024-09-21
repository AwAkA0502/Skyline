<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // Pastikan Anda sudah menyertakan kolom yang benar di sini
    protected $fillable = ['name', 'email', 'password'];

    // Kolom password harus disembunyikan ketika model dikonversi menjadi array atau JSON
    protected $hidden = ['password', 'remember_token'];
}