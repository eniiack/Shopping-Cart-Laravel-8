<?php

namespace App\Models;

use App\Models\ProductAttributeValues;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title' , 'description' , 'price' , 'inventory' , 'view_count' , 'image'];

    public function comments()
    {
        return $this->morphMany(Comment::class , 'commentable');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->using(ProductAttributeValues::class)->withPivot(['value_id']);
        
    }
}
