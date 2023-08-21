@extends('layouts_Dashboard.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

<!--- Custom-scroll -->
<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
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

        @if(session()->has('success'))
        <script>
        window.onload=function(){
        notif({
        msg:"product added successfuly",

        type:"success"
        })
        }
        </script>

        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

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


                                <div class="row mg-b-20">
                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" >
                                        <p class="text-danger">* صيغة المرفق png, jpeg ,.jpg </p>
                                        <h5 class="card-title">Images</h5>
                
                                        <div class="col-sm-12 col-md-12">
                                            <input type="file" name="img[]" class="dropify" accept="image/*" multiple
                                                data-height="70" />
                                        </div><br>
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
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!-- Internal Jquery.mCustomScrollbar js-->
    <script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!--Internal  Clipboard js-->
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
    <!-- Internal Prism js-->
    <script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
    
    
    
        <!--Internal  Notify js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
