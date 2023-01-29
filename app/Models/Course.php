<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'photo',
        'description',
        'duration',
        'admission',
        'dossier',
        'candidature',
        'datelimite',
        'selection',
        'daterentrer',
        'grade',
        'profile',
        'opportunity',
        'reviews',
    ];

    public function degree() {
        return $this->BelongsTo(Degree::class);
    }

    public function modality() {
        return $this->BelongsTo(Modality::class);
    }

    public function mode() {
        return $this->BelongsTo(Mode::class);
    }

    public function location() {
        return $this->BelongsTo(Location::class);
    }

    public function language() {
        return $this->BelongsTo(Language::class);
    }

    public function programs() {
        return $this->hasMany(Program::class);
    }
    
    public function downloads() {
        return $this->hasMany(Download::class);
    }

    protected $casts = [
        'datelimite' => 'datetime:Y-m-d ',
    ];



  
}