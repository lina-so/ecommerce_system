<?php

namespace App\Http\Controllers\product;


use App\Models\Product;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function __construct(private ProductService $productService)
    {
      
    }


    /*************************************************************************************************/

    public function index()
    {
        $data = $this->productService->all();
        $products = $data['products'];

        return view('dashboard.product.index', compact('products'));
    }


    /*************************************************************************************************/

    public function create()
    {
        $data = $this->productService->create();

        $categories = $data['categories'];
        $classifications = $data['classifications'];
        $options = $data['options'];
        $vendors = $data['vendors'];
        $admins = $data['admins'];
        $product = $data['product'];


        return view('dashboard.product.add', compact('categories','classifications','options','vendors','admins','product'));
    }


    /*************************************************************************************************/

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        $product = $this->productService->store($data);
        // dd($product);

        return redirect()->route('product.create')->with('success','تم اضافة معلومات المنتج بنجاح');
    }


    /*************************************************************************************************/

    public function show(Product $product)
    {
        //
    }


    /*************************************************************************************************/

    public function edit($id)
    {
        $product = $this->productService->edit($id);
        // dd($product);
        return redirect()->route('product.create',compact('product'));
    }


    /*************************************************************************************************/

    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }


    /*************************************************************************************************/

    public function destroy(Product $product)
    {
        //
    }
}
