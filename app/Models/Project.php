<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'timeline_from',
        'timeline_to',
        'color',
        'type'
    ];

    protected $dates = [
        'timeline_from',
        'timeline_to',
    ];


}
