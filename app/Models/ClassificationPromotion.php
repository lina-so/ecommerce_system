<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ClassificationPromotion extends Model
{
    use HasFactory;
    protected $fillable = ['classification_id','promotion_id'];
}
