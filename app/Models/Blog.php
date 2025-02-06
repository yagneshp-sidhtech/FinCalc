<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title',
        'description',
        'content',
        'author',
        'viewers',
        'created_at'
    ];

    protected $hidden = [
        'is_deleted',
        'updated_at'
    ];
}
