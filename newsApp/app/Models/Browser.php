<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Browser extends Model
{
    use HasFactory;

    protected $fillable = [
        'rendering_engine',
        'browser',
        'platform',
        'engine_version',
        'css_grade',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}