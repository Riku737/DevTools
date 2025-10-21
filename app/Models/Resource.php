<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Resource extends Model
{
    // Table name
    protected $table = 'resources';

    // Primary keys
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    // Timestamps
    public $timestamps = false;

    // PRICING OPTIONS
    private const PRICING_OPTIONS = [
        0 => 'Free',
        1 => 'Freemium',
        2 => 'Paid',
    ];

    public function getPricingLabel()
    {
        return self::PRICING_OPTIONS[$this->pricing] ?? 'Unknown';
    }

    public function getPricingBadge()
    {
        $badges = [
            0 => 'badge text-bg-success',
            1 => 'badge text-bg-warning',
            2 => 'badge text-bg-danger',
        ];

        $class = $badges[$this->pricing] ?? 'badge text-bg-dark';
        return "<span class=\"$class\">{$this->getPricingLabel()}</span>";
    }

    // RELATIONSHIPS

    // Each resource belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Each resource belongs to a subcategory
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
