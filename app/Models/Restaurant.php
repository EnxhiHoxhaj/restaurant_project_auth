<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    // Specifica le colonne "riempibili"
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'piva',
        'logo',
    ];
}
