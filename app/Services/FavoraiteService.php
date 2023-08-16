<?php

namespace App\Services;


use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class FavoraiteService
{
    public function favoraite($productId,$customerId)
    {
        $customer_id = Auth::id();

        $product = Product::findOrFail($productId);
        $product->favoritable()->create([
            'favoritable_id' => $productId,
            'favoritable_type' => Product::class,
            'customer_id' => $customerId,
        ]);

    }
    
}