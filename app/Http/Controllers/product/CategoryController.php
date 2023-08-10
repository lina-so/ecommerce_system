<?php

namespace App\Http\Controllers\product;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
  
    /*************************************************************************************************/

    public function index()
    {
        //
    }


    /*************************************************************************************************/

    public function create()
    {
        //
    }


    /*************************************************************************************************/

    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /*************************************************************************************************/

    public function show(Category $category)
    {
        //
    }

    /*************************************************************************************************/

    public function edit(Category $category)
    {
        //
    }


    /*************************************************************************************************/

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /*************************************************************************************************/

    public function destroy(Category $category)
    {
        //
    }
}
