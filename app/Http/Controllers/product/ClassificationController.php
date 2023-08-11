<?php

namespace App\Http\Controllers\product;


use App\Models\Classification;
use App\Http\Controllers\Controller;
use App\Services\ClassificationService;
use App\Http\Requests\StoreClassificationRequest;
use App\Http\Requests\UpdateClassificationRequest;

class ClassificationController extends Controller
{

    public function __construct(private ClassificationService $classificationService)
    {
    }

    /*************************************************************************************************/

    public function index()
    {
        $data = $this->classificationService->all();
        $classifications = $data['classifications'];
        $categories = $data['categories'];

        return view('dashboard.classification.index', compact('classifications','categories'));
    }
    /*************************************************************************************************/
    public function create()
    {
        $data = $this->classificationService->create();
        $categories = $data['categories'];
        $classifications = $data['classifications'];

        return view('dashboard.classification.add', compact('classifications','categories'));

    }

    /*************************************************************************************************/
    public function store(StoreClassificationRequest $request)
    {
        $data=$request->validated();
        $classifications = $this->classificationService->store($data);

        return redirect()->route('classification.create')->with('success','تم اضافة معلومات النوع بنجاح');



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

    public function update(UpdateClassificationRequest $request, $id)
    {

        $data = $request->validated();
        $classifications = $this->classificationService->update($data, $id);

        return redirect()->route('classification.create')->with('update', 'تم تعديل معلومات النوع بنجاح');

    }

    /*************************************************************************************************/

    public function destroy($id)
    {
        $classifications = $this->classificationService->destroy($id);
        return back()->with('delete','تم حذف معلومات النوع بنجاح');
    }
}
