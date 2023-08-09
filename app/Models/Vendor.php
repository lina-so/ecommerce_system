<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Favoraite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // public function userable()
    // {
    //     return $this->morphMany(Person::class, 'userable');
    // }
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function favoritable()
    {
        return $this->morphMany(Favoraite::class, 'favoritable');
    }
}
