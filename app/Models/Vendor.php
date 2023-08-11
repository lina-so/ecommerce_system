<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Favoraite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Vendor extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function favoritable()
    {
        return $this->morphMany(Favoraite::class, 'favoritable');
    }
}
