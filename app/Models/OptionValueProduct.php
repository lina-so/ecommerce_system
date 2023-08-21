<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionValueProduct extends Model
{
    use HasFactory;
    protected $table = 'option_value_product';
    protected $fillable = ['product_id','option_value_id'];
}
