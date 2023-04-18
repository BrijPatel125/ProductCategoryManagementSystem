<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getNestedCategories($categories, $parent_id = null, $level = 0)
    {
        $result = [];

        foreach ($categories as $category) {
            if ($category->parent_id === $parent_id) {
                $category->level = $level;
                $result[] = $category;
                $result = array_merge($result, $this->getNestedCategories($categories, $category->id, $level + 1));
            }
        }

        return $result;
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
