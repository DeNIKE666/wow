<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'image',
        'price',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
