<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
     protected $fillable = [ 'userable_type', 'userable_id','user_type'];
    public function userable()
    {
        return $this->morphToMany('userable');
    }
}
