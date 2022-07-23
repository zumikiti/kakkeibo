<?php

namespace App\Models;

use App\Traits\LoggableModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    use LoggableModel;

    protected $fillable = [
        'name',
        'use_count',
        'color_r',
        'color_g',
        'color_b',
    ];
}
