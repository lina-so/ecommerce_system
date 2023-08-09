<?php

namespace App\Models;

use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = ['discount_rate','start_date','end_date'];

    public function classifications()
    {
        return $this->belongsToMany(Classification::class,'classification_promotion');
    }
}
