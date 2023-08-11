<?php

namespace App\Http\Controllers\product;

use App\Models\Category;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function __construct(private CategoryService $categoryService)
    {
    }

    /*************************************************************************************************/

    public function index()
    {
        $data = $this->categoryService->all();
        $categories = $data['categories'];
        $classifications = $data['classifications'];

        return view('dashboard.category.index', compact('categories', 'classifications'));
    }
    /*************************************************************************************************/
    public function create()
    {
        $categories = $this->categoryService->create();

        return view('dashboard.category.add', compact('categories'));

    }

    /*************************************************************************************************/

    public function store(StoreCategoryRequest $request)
    {
        $data=$request->validated();
        $category= $this->categoryService->store($data);

        return redirect()->route('category.create')->with('success','تم اضافة معلومات الصنف بنجاح');

    }

    /*************************************************************************************************/

    public function show($id)
    {
        //
    }

    /*************************************************************************************************/

    public function edit($id)
    {
        //
    }


    /*************************************************************************************************/

    public function update(UpdateCategoryRequest $request, $id)
    {

        $data = $request->validated();
        $category = $this->categoryService->update($data, $id);

        return redirect()->route('category.create')->with('update', 'تم تعديل معلومات الصنف بنجاح');

    }

    /*************************************************************************************************/

    public function destroy($id)
    {
        $Category = $this->categoryService->destroy($id);
        return back()->with('delete','تم حذف معلومات الصنف بنجاح');
    }
}
