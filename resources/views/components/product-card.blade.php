<div class="col-lg-4 col-sm-6">
    <div class="product-style-1 mt-30">
        <div class="product-image">
            <span class="icon-text text-style-1">NEW</span>
            <div class="product-active">
                <div class="product-item active">
                    <img src="assets2/images/product-1/product-1.jpg" alt="product">
                </div>
                <div class="product-item">
                    <img src="assets2/images/product-1/product-2.jpg" alt="product">
                </div>
            </div>
     
            <a href="{{ route('favoraite', ['ID' => $product->id, 'customerId' => $customer_id]) }}" class="add-wishlist">
                <i></i>
                <i class="mdi mdi-heart-outline"></i>
            </a>
        </div>
        <div class="product-content text-center">
            <h4 class="title"><a href="product-details-page.html">{{ $product->name }}</a></h4>
            {{-- <p>Reference 1102</p> --}}
            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                <img src="assets2/images/icon-svg/cart-7.svg" alt="">
                $ {{ $product->price }}
            </a>
        </div>
    </div>
</div>