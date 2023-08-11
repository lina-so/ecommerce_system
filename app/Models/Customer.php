<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Favoraite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Customer extends Model  implements TranslatableContract
{
    use HasFactory,Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['id'];


    public function carts()
    {
        return $this->hasMany(Customer::class);
    }

    public function favoraites()
    {
        return $this->hasMany(Favoraite::class);
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }


    public function products()
    {
        return $this->belongsToMany(Product::class,'customer_product');
    }
}
