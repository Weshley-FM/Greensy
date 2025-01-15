<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tweet extends Model
{
    use HasFactory;

    // Properti untuk mencegah mass assignment error
    protected $fillable = ['content'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
