<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

    public function curriculum() {
        return $this->BelongsTo(Curriculum::class);
    }

    public function trainingType() {
        return $this->BelongsTo(TrainingType::class);
    }


}
