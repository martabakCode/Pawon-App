<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Building extends Model
{
    use HasFactory;

    public function kitchens() : HasMany {
        return $this->hasMany(Kitchen::class);
    }
    public function city() {
        return $this->belongsTo(City::class);
    }
}
