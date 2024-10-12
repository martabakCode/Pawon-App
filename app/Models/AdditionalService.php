<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalService extends Model
{
    use HasFactory;

    public function kitchens()
    {
       return $this->belongsToMany(Kitchen::class,'kitchens_additional_services');
    }
}
