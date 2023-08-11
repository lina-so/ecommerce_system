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
        $category = Category::create($data);
        return $category;


    }

    public function update(array $data, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($data);

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


