<?php

namespace App\Http\Controllers\product;


use App\Models\Option;
use App\Models\Product;
use App\Models\OptionValue;
use Illuminate\Http\Request;
use App\Models\Classification;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOptionValueRequest;
use App\Http\Requests\UpdateOptionValueRequest;

class OptionValueController extends Controller
{
    
    /*************************************************************************************************/

    public function index()
    {
        //
    }

    /*************************************************************************************************/

    public function getOption($id)
    {  
        $product = Product::findOrFail($id);
        $classification = $product->classification;
        $options = Option::join('classification_option', 'options.id', '=', 'classification_option.option_id')
            ->join('option_translations', 'options.id', '=', 'option_translations.option_id')
            ->where('classification_option.classification_id', $classification->id)
            ->select('options.id', 'option_translations.name')
            ->distinct('option_translations.option_id')
            ->get();
         
        return view('dashboard.product.add_option', compact('options', 'id'));
        
    }

    /*************************************************************************************************/

    public function getOptionValue($id)
    {
        $option = Option::with('optionValue')->findOrFail($id);
 
        $option_values = OptionValue::where("option_id", $id)
            ->join('option_value_translations', 'option_values.id', '=', 'option_value_translations.option_value_id')
            ->select('option_values.id', 'option_value_translations.name')
            ->get();
            
        return $option_values;
    }

    /*************************************************************************************************/

    public function addOption(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $product->optionValues()->attach($request->option_value_id);
        return redirect()->back()->with('success','option value add successfully');
    }

    /*************************************************************************************************/

    public function create()
    {
        //
    }


    /*************************************************************************************************/

    public function store(StoreOptionValueRequest $request)
    {
        dd($request);
    }


    /*************************************************************************************************/

    public function show(OptionValue $optionValue)
    {
        //
    }


    /*************************************************************************************************/

    public function edit(OptionValue $optionValue)
    {
        //
    }


    /*************************************************************************************************/

    public function update(UpdateOptionValueRequest $request, OptionValue $optionValue)
    {
        //
    }


    /*************************************************************************************************/

    public function destroy(OptionValue $optionValue)
    {
        //
    }
}
