@extends('web.layouts.main')
@section('title','e-store')
@section('styles')
<style>
    .product-style-1 .product-content {
    background-color: rgba(0, 0, 0, 0.64);
    margin: -133px 41px 0;
    position: relative;
    z-index: 5;
    padding: 30px 20px 35px;
}
</style>

@endsection
@section('content')
    <x-pre-loader />
    @include('web.sections.header')
    @include('web.sections.feature-items-area', [
        'title' => 'Featured Items',
      ])
      @include('web.sections.product-wrapper')
      @include('web.sections.features-section')
      @include('web.sections.clients-logo-section')
      @include('web.sections.subscribe-section')
      @include('web.sections.footer')




@endsection

@section('scripts')
    <!--====== Bootstrap 5 js ======-->
    <script src="assets2/js/popper.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>


    <!--====== Jquery js ======-->
    <script src="assets2/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets2/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets2/js/slick.min.js"></script>

    <!--====== Accordion Steps Form js ======-->
    <script src="assets2/js/jquery-vj-accordion-steps.js"></script>

    <!--====== Jquery Ui js ======-->
    <script src="assets2/js/jquery-ui.min.js"></script>

    <!--====== Form validator js ======-->
    <script src="assets2/js/jquery.form-validator.min.js"></script>

    <!--====== nice select js ======-->
    <script src="assets2/js/jquery.nice-select.min.js"></script>

    <!--====== formatter js ======-->
    <script src="assets2/js/jquery.formatter.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets2/js/count-up.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets2/js/main.js"></script>


    <!--====== e-store js ======-->
    <script src="assets2/js/e_store.js"></script>
 @endsection

