<?php

namespace App\Models;

use App\Models\Product;
use App\Models\OptionValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Option extends Model
{
    use HasFactory;
    protected $fillable = ['name','product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function optionValue()
    {
        return $this->hasMany(OptionValue::class);
    }
}
