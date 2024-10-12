<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Kitchen extends Model
{
    use HasFactory;

    public function building():BelongsTo
    {
       return $this->belongsTo(Building::class);
    }

    public function additional_services()
    {
       return $this->belongsToMany(AdditionalService::class,'kitchens_additional_services')->withTimestamps();
    }

    public function kitchen_additional_services()
    {
       return $this->hasMany(KitchensAdditionalService::class);
    }




    public function reservations():HasMany
    {
        return $this->hasMany(Reservation::class);
    }

}
