<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'PTitle',
        'ETitle',
        'user_id',
        'parent_id',
        'is_active',
    ];
}
