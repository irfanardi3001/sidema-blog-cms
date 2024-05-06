<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    protected $fillable = [
        'title',
        'content',
        'status',
        'reply',
        // tambahkan kolom-kolom lain yang ingin diizinkan untuk mass assignment di sini
    ];
}
