<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function subtitles() {
        return $this->hasMany(Subtitle::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
