<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tenant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function members() :BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
