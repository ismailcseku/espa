<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'start_at',
        'end_at',
        'location',
        'photo',
    ];
    protected $casts=[
        'start_at'=>'datetime',
        'end_at'=>'datetime',
    ];
}