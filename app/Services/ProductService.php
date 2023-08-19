<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Option;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Category;
use App\Models\Classification;

class ProductService
{
    public function all()
    {
        // $products = Product::with(['options'])->get();
        
        $products = Product::paginate(request()->page_size);
        return [
            'products' => $products,

        ];
    }

    public function create()
    {
        $classifications = Classification::all();
        $categories = Category::all();
        $options = Option::all();
        $vendors = Vendor::all();
        $admins = Admin::all();
        $product = null;

        return [
            'classifications' => $classifications,
            'categories' => $categories,
            'options'=> $options,
            'vendors'=> $vendors,
            'admins'=> $admins,
            'product'=> $product,

        ];
    }

    public function store(array $data)
    {  
        // dd($data);
        $productData = [
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'classification_id' => $data['classification_id'],
            'vendor_id' => $data['vendor_id']
        ];
      
        $product = Product::updateOrCreate(['id' => $data['product']], $productData);

        foreach (['en', 'ar'] as $locale) {
            $translationsData = [
                'name' => $data['name'][$locale],
                'description' => $data['description'][$locale],
            ];

            $product->translateOrNew($locale)->fill($translationsData);
        }

        $product->save();

        if (isset($data['img'])) {
            foreach ($data['img'] as $image) {
                $product->addMedia($image)->toMediaCollection('images');
            }
        }
        return $product;
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if($product)
        {
            $product->delete();
        }
        return $product;
    }
}


