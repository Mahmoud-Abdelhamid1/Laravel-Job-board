<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class click extends Model
{
    use HasFactory;
    protected $guard = [];
    protected   $fillable = ['user_agent' , 'ip'];
    /**
     * Get all of the tags for the click
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function tags(): HasMany
    // {
    //     return $this->hasMany(Tag::class);
    // }
    /**
     * Get the listings that owns the click
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listings(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
