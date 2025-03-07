<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    // Specifica la tabella se non segue la convenzione (pluralizzazione del nome del modello)
    protected $table = 'restaurant';

    // Definisci le colonne che sono mass-assignable (puoi assegnare i valori direttamente)
    protected $fillable = [
        'coures_menu_id',
        'name',
        'address',
        'phone',
        'email',
        'piva',
        'logo'
    ];

    // Definisci la relazione con gli eventi (un ristorante può avere molti eventi)
    public function events()
    {
        return $this->hasMany(Event::class, 'restaurant_id');
    }

    // Definisci la relazione con la gallery (un ristorante può avere molte immagini nella gallery)
    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'restaurant_id');
    }

    // Definisci la relazione con gli utenti (un ristorante può avere molti utenti)
    public function users()
    {
        return $this->hasMany(User::class, 'restaurant_id');
    }
}
