<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function locations()
    {
        return $this->morphMany(Location::class, 'locationable');
    }
}
