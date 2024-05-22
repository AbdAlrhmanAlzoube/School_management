<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Import the HasFactory trait

class Guardian extends Model
{
    use HasFactory; // Use the HasFactory trait

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
    ];

    /**
     * Get the user that owns the guardian.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
