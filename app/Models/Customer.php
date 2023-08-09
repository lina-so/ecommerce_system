<?php

namespace App\Models;

use App\Models\Favoraite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // public function userable()
    // {
    //     return $this->morphMany(Person::class, 'userable');
    // }

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
