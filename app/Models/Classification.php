<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classification extends Model
{
    use HasFactory;

    protected $fillable = ['name','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function promotions()
    {
        return $this->belongsToMany(Promotion::class,'classification_promotion');
    }
}
