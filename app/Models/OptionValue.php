<?php

namespace App\Models;

use App\Models\Option;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class OptionValue extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public $translatedAttributes = ['name'];

    protected $fillable = ['option_id'];


    public function option()
    {
        return $this->belongsTo(Option::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'option_value_product');
    }

}
