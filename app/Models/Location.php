<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['locationable_id','locationable_type','location_type','address','longitude','latitude'];


    public function locationable()
    {
        return $this->morphTo();
    }
}
