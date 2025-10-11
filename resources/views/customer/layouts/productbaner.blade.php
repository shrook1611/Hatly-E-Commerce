<!-- Product Banner Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <a href="#">
                    <div class="bg-primary rounded position-relative">
                        <img src="{{asset('customer/')}}/img/product-banner.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center rounded p-4"
                            style="background: rgba(255, 255, 255, 0.5);">
                            <h3 class="display-5 text-primary">EOS Rebel <br> <span>T7i Kit</span></h3>
                            <p class="fs-4 text-muted">$899.99</p>
                            <a href="#" class="btn btn-primary rounded-pill align-self-start py-2 px-4">Shop Now</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <a href="#">
                    <div class="text-center bg-primary rounded position-relative">
                        <img src="{{asset('customer/')}}/img/product-banner-2.jpg" class="img-fluid w-100" alt="">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center rounded p-4"
                            style="background: rgba(242, 139, 0, 0.5);">
                            <h2 class="display-2 text-secondary">SALE</h2>
                            <h4 class="display-5 text-white mb-4">Get UP To 50% Off</h4>
                            <a href="#" class="btn btn-secondary rounded-pill align-self-center py-2 px-4">Shop
                                Now</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Product Banner End -->

<!-- Product List Satrt -->

<!-- Product List End -->

<!-- Bestseller Products Start -->
<div class="container-fluid products pb-5">
    <div class="container products-mini py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 700px;">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius wow fadeInUp"
                data-wow-delay="0.1s">Bestseller Products</h4>
            <p class="mb-0 wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Modi, asperiores ducimus sint quos tempore officia similique quia? Libero, pariatur
                consectetur?</p>
        </div>
        <div class="row g-4">
            @foreach($topSellingProducts as $product)
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="products-mini-item border">
                    <div class="row g-0">
                        <div class="col-5">
                            <div class="products-mini-img border-end h-100">
                                <img src="{{asset('storage/'.$product->image)}}" class="img-fluid w-100 h-100" alt="Image">
                                <div class="products-mini-icon rounded-circle bg-primary">
                                    <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="products-mini-content p-3">
                                <a href="#" class="d-block mb-2">{{$product->name}}</a>
                                <a href="#" class="d-block h4">{{$product->description}} </a>
                                <span class="me-2 fs-5">${{$product->price}}</span>
                              
                            </div>
                        </div>
                    </div>
                    <div class="products-mini-add border p-3 d-flex justify-conten-between align-items-center">
                        <div>
                        <form method="POST" action="{{route('addCart',$product->id)}}">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        @csrf
                                        <button href="#"
                                            class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                class="fas fa-shopping-cart me-2"></i> Add To Cart</button>
                                    </form>
                                    </div>
                        <div >
                        
                          @php
    $isFavorite = false;

    if(auth()->check() && auth()->user()->wishlist) {
        $isFavorite = auth()->user()->wishlist
            ->items()
            ->where('product_id', $product->id)
            ->exists();
    }
@endphp

<form method="POST" action="{{ route('wishlist.toggle', $product->id) }}">
    <input type="hidden" name="product_id" value="{{$product->id}}">
    @csrf
    <button type="submit" class="text-primary">
        @if($isFavorite)
            <i class="fas fa-heart" style="color:red;"></i>
        @else
            <i class="far fa-heart"></i>
        @endif
    </button>
</form>

                        </div>
                    </div>
                </div>
            </div>
         
            @endforeach
        </div>
    </div>
</div>
<!-- Bestseller Products End -->