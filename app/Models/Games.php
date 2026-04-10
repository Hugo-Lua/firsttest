<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $fillable = [
        'title',
        'tags',
        'creator',
        'genre',
        'email',
        'short_description',
        'description',
    ];
    use HasFactory;
}
