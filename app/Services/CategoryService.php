<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function all()
    {

        $categories = Category::all();
        $classifications = Category::with(['classifications'])->get();

        return [
            'categories' => $categories,
            'classifications' => $classifications,
        ];
    }

    public function create()
    {
        // $categories = Category::all();
        $categories = Category::paginate(request()->page_size);

        return $categories;
    }


    public function store(array $data)
    {
        $category = new Category();

        foreach (['en', 'ar'] as $locale) {
            $category->translateOrNew($locale)->name = $data['name'][$locale];
        }

        $category->save();

        return $category;
    }

    public function update(array $data,$categoryId)
    {
        $category = Category::findOrFail($categoryId);

        foreach (['en', 'ar'] as $locale) {
            $category->translateOrNew($locale)->name = $data['name'][$locale];
        }

        $category->save();

        return $category;
    }

    public function destroy($id)
    {
        $Category = Category::find($id);
        if($Category)
        {
            $Category->delete();
        }
        return $Category;
    }
}


