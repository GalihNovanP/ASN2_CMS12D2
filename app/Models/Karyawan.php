<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // Tambahkan properti ini agar bisa mass assignment
    protected $fillable = ['nama', 'deskripsi'];
}

