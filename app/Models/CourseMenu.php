<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMenu extends Model
{
    use HasFactory;

    protected $table = 'course_menu';

    protected $fillable = [
        'name'
    ];

    // Relazione con il menu (un course_menu può avere molti menu)
    public function menus()
    {
        return $this->hasMany(Menu::class, 'course_menu_id');
    }
}
