<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Option;
use App\Models\Vendor;
use App\Models\Customer;
use App\Models\Favoraite;
use App\Models\OptionValue;
use App\Models\OrderProduct;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Product extends Model implements TranslatableContract , HasMedia
{
    use HasFactory,Translatable,InteractsWithMedia;

    public $translatedAttributes = ['name','description'];

    protected $fillable = ['id','quantity','price','classification_id','vendor_id','admin_id','img'];

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
    
    public function optionValues()
    {
        return $this->belongsToMany(OptionValue::class, 'option_value_product');
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class,'customer_product');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function orderProduct()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function favoritable()
    {
        return $this->morphMany(Favoraite::class, 'favoritable');
    }

    public function MediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->acceptsMimeTypes(['image/jpeg', 'image/png','image/jpeg']) ; // تحديد انواع الصور المسموحة 
    }


}
