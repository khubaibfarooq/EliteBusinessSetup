<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreeZone extends Model
{
    protected $fillable = ['name', 'abbreviation', 'description', 'emirate', 'sort_order', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }
}
