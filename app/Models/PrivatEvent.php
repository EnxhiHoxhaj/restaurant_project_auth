<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivatEvent extends Model
{
    use HasFactory;

    protected $table = 'privats_events';

    protected $fillable = [
        'restaurant_id',
        'title',
        'description'
    ];

    // Relazione con il ristorante (un evento privato appartiene a un ristorante)
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }
}
