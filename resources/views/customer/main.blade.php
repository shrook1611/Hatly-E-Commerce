@include('customer.layouts.head')

<!-- Spinner Start -->
<!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
<!-- Spinner End -->


<!-- Topbar Start -->
@include('customer.layouts.topnavbar')
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
@include('customer.layouts.navbar')
<!-- Navbar & Hero End -->

<!-- Carousel Start -->
@include('customer.layouts.carsole')
<!-- Carousel End -->

<!-- Searvices Start -->
@include('customer.layouts.ourservices')
<!-- Searvices End -->

<!-- Products Offer Start -->
@include('customer.layouts.offer')
<!-- Products Offer End -->


<!-- Our Products Start -->
@yield('content')
<!-- Our Products End -->


@include('customer.layouts.productbaner')

<!-- Footer Start -->
@include('customer.layouts.footer')
<!-- Footer End -->