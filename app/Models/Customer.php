<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

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

    // public function favoritable()
    // {
    //     return $this->morphMany(Favoraite::class, 'favoritable');
    // }


    public function products()
    {
        return $this->belongsToMany(Product::class,'customer_product');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
