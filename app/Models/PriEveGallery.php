<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriEveGallery extends Model
{
    use HasFactory;

    protected $table = 'pri_eve_gallery';

    protected $fillable = [
        'privat_event_id',
        'img',
        'title'
    ];

    // Relazione con l'evento privato (una galleria di evento privato appartiene a un evento privato)
    public function privatEvent()
    {
        return $this->belongsTo(PrivatEvent::class, 'privat_event_id');
    }
}
