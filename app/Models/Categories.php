<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Categories Model Class
 */
class Categories extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function books(): HasMany {
        return $this->hasMany(Books::class);
    }
}
