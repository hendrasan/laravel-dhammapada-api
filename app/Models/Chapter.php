<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chapter extends Model
{
    public function verses(): HasMany
    {
        return $this->hasMany(Verse::class);
    }
}
