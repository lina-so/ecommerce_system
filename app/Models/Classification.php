<?php

namespace App\Models;

use App\Models\Option;
use App\Models\Category;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Classification extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['category_id'];

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
    public function options()
    {
        return $this->belongsToMany(Option::class,'classification_option');
    }
}
