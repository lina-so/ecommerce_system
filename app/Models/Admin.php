<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Admin extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    protected $guard = 'admin';
    
    public $translatedAttributes = ['name'];
    protected $fillable = ['id'];

    public function vendorPersonal(){

        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    public function vendorBusiness(){
        
        return $this->belongsTo(VendorBusinessDetail::class, 'vendor_id');
    }

    public function vendorBank(){
        
        return $this->belongsTo(VendorBankDetail::class, 'vendor_id');
    }


}
