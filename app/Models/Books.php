<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Books Model Class
 */
class Books extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category(): BelongsTo {
        return $this->belongsTo(Categories::class);
    }
}
