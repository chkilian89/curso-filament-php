<?php

namespace App\Models;

use App\Traits\BelongsToTentantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory, BelongsToTentantTrait;

    protected $guarded = [];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}
