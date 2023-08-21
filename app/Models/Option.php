<?php

namespace App\Models;

use App\Models\Product;
use App\Models\OptionValue;
use App\Models\Classification;
use App\Models\OptionTranslation;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Option extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public $translatedAttributes = ['name'];

    protected $fillable = ['product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function optionValue()
    {
        return $this->hasMany(OptionValue::class,'option_id');
    }
    public function classifications()
    {
        return $this->belongsToMany(Classification::class,'classification_option');
    }
    public function optionTranslations()
    {
        return $this->hasMany(OptionTranslation::class, 'option_id');
    }
}
