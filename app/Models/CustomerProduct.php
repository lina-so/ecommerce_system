<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CustomerProduct extends Pivot
{
    protected $fillable = ['customer_id','product_id'];
}
