<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    // Table name
    protected $table = 'categories';

    // Primary keys
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    // Timestamps
    public $timestamps = false;

    // RELATIONSHIPS
    // Manage relationships between different database tables using Eloquent
    // Eloquent is Laravel's ORM (Object-Relational Mapping) system
    // Relationships allow you to easily query related data and enforce data associations in your application

    // A category has many subcategories
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'category_id');
    }

    public function resources()
    {
        return $this->hasMany(Resource::class, 'category_id');
    }

    // BOOT METHOD TO HANDLE SLUG CREATION
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
}
