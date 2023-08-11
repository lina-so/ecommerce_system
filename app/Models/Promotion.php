<?php

namespace App\Models;

use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Promotion extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public $translatedAttributes = ['name','description'];
    protected $fillable = ['discount_rate','start_date','end_date'];

    public function classifications()
    {
        return $this->belongsToMany(Classification::class,'classification_promotion');
    }
}
