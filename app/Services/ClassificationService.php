<?php

namespace App\Services;

use App\Models\Option;
use App\Models\Category;
use App\Models\Classification;
use App\Models\ClassificationTranslation;

class ClassificationService
{
    public function all()
    {

        $classifications =Classification::with(['products'])->get();
        $categories = Category::all();

        return [
            'classifications' => $classifications,
            'categories' => $categories,

        ];
    }

    public function create()
    {
        $classifications = Classification::paginate(request()->page_size);
        $categories= Category::distinct()->get();
        $options = Option::all();
        
        return [
            'classifications' => $classifications,
            'categories' => $categories,
            'options' => $options,
        ];
    }

    public function store(array $data)
    {
        $classification = new Classification();
        $classification->category_id  = $data['category_id'];

        foreach (['en', 'ar'] as $locale) {
            $classification->translateOrNew($locale)->name = $data['name'][$locale];
        }
        $classification->save();

        $classification->options()->attach($data['option_id']);

        return $classification;
    }

    public function update(array $data,$classificationId)
    {
        $classification = classification::findOrFail($classificationId);

        foreach (['en', 'ar'] as $locale) {
            $classification->translateOrNew($locale)->name = $data['name'][$locale];
        }
        $classification->category_id  = $data['category_id'];
        $classification->option_id  = $data['option_id'];

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


