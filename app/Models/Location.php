<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['locationable_type','locationable_id','location_type','address','longitude','latitude'];


    public function locationable()
    {
        return $this->morphTo();
    }
}
