<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subcategory extends Model
{
    // Table name
    protected $table = 'subcategories';

    // Primary keys
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    // Timestamps
    public $timestamps = false;

    // RELATIONSHIPS

    // Each subcategory belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function resources()
    {
        return $this->hasMany(Resource::class, 'subcategory_id');
    }
}
