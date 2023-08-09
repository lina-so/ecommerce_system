<?php

namespace App\Models;

use App\Models\Option;
use App\Models\Vendor;
use App\Models\Customer;
use App\Models\Favoraite;
use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['quantity','price','classification_id','vendor_id'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class,'customer_product');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function orderProduct()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function favoritable()
    {
        return $this->morphMany(Favoraite::class, 'favoritable');
    }


}
