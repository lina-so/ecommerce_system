<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Classification;

class ClassificationService
{
    public function all()
    {

        $classifications = Classification::all();
        $categories = Category::all();
        $products = Classification::with(['products'])->get();

        return [
            'classifications' => $classifications,
            'products' => $products,
            'categories' => $categories,

        ];
    }

    public function create()
    {
        $classifications = Classification::paginate(request()->page_size);
        $categories = Category::all();

        return [
            'classifications' => $classifications,
            'categories' => $categories,

        ];
    }


    // public function store(array $data)
    // {
    //     $classification = Classification::create($data);
    //     return $classification;


    // }

    // public function update(array $data, $id)
    // {
    //     $classification = Classification::findOrFail($id);
    //     $classification->update($data);

    //     return $classification;
    // }

    public function store(array $data)
    {
        $classification = new Classification();
        $classification->category_id  = $data['category_id'];
        $classification->save();

        foreach (['en', 'ar'] as $locale) {
            $classification->translateOrNew($locale)->name = $data['name'][$locale];
        }
        $classification->save();
        return $classification;
    }

    public function update(array $data,$classificationId)
    {
        $classification = classification::findOrFail($classificationId);

        foreach (['en', 'ar'] as $locale) {
            $classification->translateOrNew($locale)->name = $data['name'][$locale];
        }
        $classification->category_id  = $data['category_id'];
        $classification->save();

        return $classification;
    }


    public function destroy($id)
    {
        $classification = Classification::find($id);
        if($classification)
        {
            $classification->delete();
        }
        return $classification;
    }
}


