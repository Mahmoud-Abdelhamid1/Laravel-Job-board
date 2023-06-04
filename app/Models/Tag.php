<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tag extends Model
{
    use HasFactory;

    protected $gaurd = [];

    /**
     * Get the clicks that owns the tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function clicks(): BelongsTo
    // {
    //     return $this->belongsTo(Click::class);
    // }
    public function listings(): BelongsToMany
    {
        return $this->belongsToMany(Listing::class);
    }
}
