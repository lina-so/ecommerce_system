<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ClassificationPromotion extends Pivot
{
    use HasFactory;

    protected $fillable = ['classification_id','promotion_id'];
}
