<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date_from',
        'date_to',
        'description_1',
        'description_2',
        'description_3',
        'img_main',
        'img_2',
    ];
}
