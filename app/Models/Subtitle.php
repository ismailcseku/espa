<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];

    public function tab() {
        return $this->belongsTo(Tab::class);
    }

}
