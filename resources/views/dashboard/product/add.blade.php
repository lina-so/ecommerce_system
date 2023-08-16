@extends('layouts_Dashboard.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Product</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Add Product</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">

                            <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                                action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product" value="{{ $product?->id }}">
                                <div class="">
                                    <div class="row mg-b-20">
                                        @foreach(config('translatable.locales') as $locale)
                                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" >
                                                <label for="name">{{ __('Name') }} ({{ $locale }})</label>
                                                <input type="text" name="name[{{ $locale }}]" class="form-control" value="{{ $product?->name }}" required>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>

                                <div class="row mg-b-20">
                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" >
                                        <label>quantity : <span class="text-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="quantity" required type="number" value="{{ $product?->quantity }}">
                                    </div>

                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" >
                                        <label>price : <span class="text-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="price" required type="number" step="0.01" value="{{ $product?->price }}">
                                    </div>

                                </div>

                                <div class="row mg-b-20">
                                    <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" >
                                        @foreach (config('translatable.locales') as $locale)
                                            <label for="description_{{ $locale }}"> {{ __('description') }}  ({{ $locale }}): <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="description[{{ $locale }}]" id="exampleFormControlTextarea1" rows="3" value="{{ $product?->description }}"></textarea>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="row mg-b-20">
                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" >
                                        <label > vendor</label>
                                        <select data-placeholder="select vendor"  class="custom-select my-1 mr-sm-2" name="vendor_id" value="{{ $product?->vendor_id }}">
                                            <option selected disabled>choose...</option>
                                            @foreach($vendors as $vendor)
                                                <option  value="{{$vendor->id}}">{{$vendor->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>

            
                                </div>


                                <div class="row mg-b-20">

                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" >
                                        <label > classification</label>
                                        <select data-placeholder="select classification"  class="custom-select my-1 mr-sm-2" name="classification_id" value="{{ $product?->classification_id }}">
                                            <option selected disabled>choose...</option>
                                            @foreach($classifications as $classification)
                                                <option  value="{{$classification->id}}">{{$classification->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button class="btn btn-main-primary pd-x-20" type="submit">save</button>
                                </div>
                            </form>
                        </div>


                    </div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
