<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    use HasFactory;

    public function kitchen():BelongsTo
    {
     return $this->belongsTo(Kitchen::class);
    }
    public function status(): BelongsTo
    {
        return $this->BelongsTo(Status::class);
    }
}
