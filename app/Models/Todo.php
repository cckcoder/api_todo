<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $attributes = [
        'is_complete' => false,
    ];

    protected $fillable = [
        'activity',
        'is_complete'
    ];
}
