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
							<h4 class="content-title mb-0 my-auto">Classifications</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Classifications list</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

				<!-- row -->
				<div class="row">


					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<a class="btn btn-outline-primary btn-md"  href="{{route('classification.create')}}"> Add Classification</a>
                        </div>



                        {{-- start card body --}}

                            <div class="card-body">
								<div id="accordion" class="w-100 br-2 overflow-hidden">

										@php
										$i=0;
										@endphp
							  @foreach ($classifications as $classification )
								  @php
								$i++;
								@endphp
								  	<div class="">
										<div class="accor  bg-primary" id="headingThree3">
											<h4 class="m-0">
												<a href="#collapseThree{{$i}}" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
													{{$classification->name}} <i class="si si-cursor-move ml-2"></i>
												</a>
											</h4>
										</div>
										<div id="collapseThree{{$i}}" class="collapse b-b0 bg-white" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="border p-3">
												<table class="table mb-0 table-bordered border-top mb-0">
													<thead>
													  <tr>
														<th>#</th>
														<th>name</th>
													  </tr>
													</thead>
													<tbody>
													 <?php $i = 0; ?>


                                                    @foreach ($classification->products as $list_Sections)


                                                        <tr>
                                                            <?php $i++; ?>
                                                            <td>{{ $i }}</td>
                                                            <td>{{$list_Sections->id}}</td>

                                                            <td>

                                                                <a class="modal-effect btn btn-sm btn-warning " data-effect="effect-scale"
                                                                    href="#modaldemo9{{$list_Sections->id}}"  data-toggle="modal"  title="تعديل"><i
                                                                class="las la-edit"></i></a>

                                                                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                                data-toggle="modal" href="#modaldemo6" title="حذف"><i
                                                                    class="las la-trash"></i></a>
                                                            </td>
                                                        </tr>


                                                        <!-- Edit modal -->
                                                        <div class="modal" id="modaldemo9{{$list_Sections->id}}">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content modal-content-demo">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title"> Edit product</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <form action="{{route('product.update',$list_Sections->id)}}" method="post">
                                                                            {{method_field('patch')}}
                                                                            {{csrf_field()}}

                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <input type="hidden" class="form-control" id="id" name="id" value="{{$list_Sections->id}}">
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                {{-- <div class="form-group">
                                                                                    <label for="exampleInputEmaili"> name</label>

                                                                                    <input type="text" class="form-control" id="name" name="name"  value="{{ $list_Sections->name }}" required>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label > categorey</label>
                                                                                    <select class="custom-select my-1 mr-sm-2" name="categorey_id">
                                                                                        <option selected disabled>choose...</option>
                                                                                        @foreach($categories as $categorey)
                                                                                            <option style="color: black" value="{{$categorey->id}}">{{$categorey->name}}</option>
                                                                                        @endforeach
                                                                                    </select>

                                                                                </div> --}}
                                                                            </div>


                                                                            <div class="modal-footer">
                                                                                <button class="btn  btn-primary" type="submit">save</button>
                                                                                <button class="btn  btn-secondary" data-dismiss="modal" type="button">cancel</button>
                                                                            </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

							                         @endforeach

													</tbody>
												</table>
											</div>
										</div>
									</div>
							  @endforeach
								</div>
							</div>
                            {{-- end card body --}}
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
