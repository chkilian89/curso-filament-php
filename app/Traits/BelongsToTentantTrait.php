<?php

namespace App\Traits;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToTentantTrait{

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
