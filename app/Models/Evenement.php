<?php

namespace App\Models;

use App\Models\EvenementInterested;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'accroche',
    ];
    protected $casts=[
        'start_at'=>'datetime',
        'end_at'=>'datetime',
    ];

    public function evenement_interesteds() {
        return $this->hasMany(EvenementInterested::class);
    }

}