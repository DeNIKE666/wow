<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    protected $fillable = [
        'name',
        'description',
        'image',
        'icons',
        'parent_id',
        'class',
    ];

    public $timestamps = false;

    public function products() {
        return $this->hasMany(Product::class , 'category_id' , 'id');
    }
}
