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
                        <h4 class="content-title mb-0 my-auto">products</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ products list</span>
                    </div>
                </div>

            </div>
            <!-- breadcrumb -->
@endsection
@section('content')


        @if(session()->has('update'))
        <script>
        window.onload=function(){
        notif({
            msg:"product updated successfuly",
             type:"success"
        })
        }
        </script>

        @endif


        @if(session()->has('delete'))
        <script>
        window.onload=function(){
        notif({
            msg:"product deleted successfuly",
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
				<div class="row">
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
                                <a class="btn btn-outline-primary btn-md"  href="{{route('product.create')}}"> Add product</a>
							</div>

							<div class="card-body">
								<div class="table-responsive">

									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
                                            <tr>
                                                <th class="border-bottom-0">#</th>
                                                <th class="border-bottom-0">Name</th>
                                                <th class="border-bottom-0">Quantity</th>
                                                <th class="border-bottom-0">Price</th>
                                                <th class="border-bottom-0">Classification</th>
                                                <th class="border-bottom-0">Vendor</th>
                                                <th class="border-bottom-0">Image</th>

                                                <th class="border-bottom-0"></th>
                                            </tr>
										</thead>
										<tbody>
										@php
										$i=0;
										@endphp
									@foreach($products as $product)
										@php
										$i++;
										@endphp
											<tr>

												<td>{{$i}}</td>
												<td>{{$product->name}}</td>
												<td>{{$product->quantity}}</td>
												<td>{{$product->price}}</td>
												<td>{{$product->classification->name}}</td>
												<td>{{$product->vendor->name}}</td>
												{{-- <td><img src=" {{ $product->getMedia('*')[0]->getUrl()}}" alt="" ></td> --}}
												{{-- <td><img src=" {{ $product->getMedia("*")->->getUrl()}}" alt="" ></td> --}}

                                                {{-- "{{ asset('storage/5/img.jpg') }}" --}}
                                                

                                                <td></td>
												<td>

                                                    <a class=" btn btn-sm btn-warning " data-effect="effect-scale"
                                                    href="{{ route('product.edit', ['product' => $product->id]) }}" title="تعديل"><i
                                                    class="las la-edit"></i></a>

                                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                    data-toggle="modal" href="#modaldemo6{{$product->id}}" title="حذف"><i
                                                        class="las la-trash"></i></a>

                                                    <a class=" btn btn-sm btn-success"
                                                    href="{{ route('addOption',$product->id) }}"
                                                    title="show">add options</a>
												</td>
											</tr>

                                            
                                            <!-- delete -->
											<div class="modal" id="modaldemo6{{$product->id}}">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title"> Delete product</h6><button aria-label="Close" class="close"
																data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
														</div>
														<form action="{{route('product.destroy',$product->id)}}" method="post" enctype="multipart/form-data">
															{{ method_field('delete') }}
															{{ csrf_field() }}
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control" id="id" name="id" value="{{$product->id}}">
                                                            </div>
															<div class="modal-body">
																<p>? Are you sure you want to delete this product</p><br>
																<input type="hidden" name="id" id="id" value="{{$product->id}}">
                                                                {{-- <br> --}}
																<input type="text" name="id" id="id" value="{{$product->name}}">
                                                               : product Name
															</div>
															<div class="modal-footer">

																<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
																<button type="submit" class="btn btn-danger">save</button>
															</div>
													    </form>
                                                    </div>
												</div>
											</div>
											@endforeach

										</tbody>
									</table>
                                    @if(count($products)>=10)
                                    <div class="pagination">
                                        {{ $products->links() }}
                                    </div>
                                    @else
                                    <div></div>
                                    @endif
								</div>
							</div>
						</div>
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
