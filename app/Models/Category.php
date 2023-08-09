<?php

namespace App\Models;

use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function classification()
    {
        return $this->hasMany(Classification::class);
    }
}
