<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeatureSku extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'feature_id',
        'sku_id',
        'value'
    ];

    public function feature(): BelongsTo
    {
        return $this->belongsTo(Feature::class);
    }
}
