<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = [
        'course_menu_id',
        'name',
        'ingredients',
        'img',
        'price'
    ];

    // Relazione con il CourseMenu (un menu appartiene a un course_menu)
    public function courseMenu()
    {
        return $this->belongsTo(CourseMenu::class, 'course_menu_id');
    }
}
