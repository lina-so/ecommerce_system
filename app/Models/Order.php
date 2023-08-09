<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['order_date','total_order_price','payment_method_id','customer_id'];



    public function orderProduct()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
