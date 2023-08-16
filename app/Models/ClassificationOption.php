<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassificationOption extends Model
{
    use HasFactory;
    protected $fillable = ['classification_id','option_id'];
    protected $table = 'classification_option';

}
