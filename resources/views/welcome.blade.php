@include('head')
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shop"></i> Hatly
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('userhome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categories">Categories</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                      @if(!auth()->user())
                    <a href="{{route('register')}}" class="btn btn-orange">register</a>
                 
                    <a href="{{route('login')}}" class="btn btn-orange ms-2">log in</a>
                   
                    @else
                     <a href="{{route('logout')}}" class="btn btn-orange ms-2">log out</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Shop Smart, <span style="color: var(--primary-orange);">Live Better</span></h1>
                    <p class="hero-subtitle">Discover amazing products at unbeatable prices. Quality you can trust, delivered to your door.</p>
                    <div class="d-flex gap-3">
                        <a href="{{route('userhome')}}" class="btn btn-orange btn-lg">Shop Now</a>
                        <a href="#categories" class="btn btn-outline-dark btn-lg">Browse Categories</a>
                    </div>
                    <div class="mt-4">
                        <small class="text-muted">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <strong class="ms-2">4.9/5</strong> from 10,000+ happy customers
                        </small>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="bi bi-truck feature-icon"></i>
                        <h5>Free Shipping</h5>
                        <p class="text-muted mb-0">On orders over $50</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="bi bi-shield-check feature-icon"></i>
                        <h5>Secure Payment</h5>
                        <p class="text-muted mb-0">100% secure transactions</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="bi bi-arrow-repeat feature-icon"></i>
                        <h5>Easy Returns</h5>
                        <p class="text-muted mb-0">30-day return policy</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="bi bi-headset feature-icon"></i>
                        <h5>24/7 Support</h5>
                        <p class="text-muted mb-0">Dedicated customer service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5" id="categories">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Shop by Category</h2>
                <p class="section-subtitle">Find exactly what you're looking for</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="category-card card text-center p-4">
                        <div class="card-body">
                            <i class="bi bi-laptop category-icon"></i>
                            <h4>Electronics</h4>
                            <p class="text-muted">Latest gadgets & tech</p>
                            <a href="#" class="btn btn-orange">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card card text-center p-4">
                        <div class="card-body">
                            <i class="bi bi-watch category-icon"></i>
                            <h4>Fashion</h4>
                            <p class="text-muted">Trendy clothes & accessories</p>
                            <a href="#" class="btn btn-orange">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card card text-center p-4">
                        <div class="card-body">
                            <i class="bi bi-house-door category-icon"></i>
                            <h4>Home & Living</h4>
                            <p class="text-muted">Furniture & decor</p>
                            <a href="#" class="btn btn-orange">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
  

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4 style="color: var(--primary-orange);">
                        <i class="bi bi-shop"></i> Hatly
                    </h4>
                    <p class="text-muted">Your trusted online shopping destination for quality products at great prices.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-youtube fs-4"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">About Us</a></li>
                        <li><a href="#" class="footer-link">Shop</a></li>
                        <li><a href="#" class="footer-link">Blog</a></li>
                        <li><a href="#" class="footer-link">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Help Center</a></li>
                        <li><a href="#" class="footer-link">Track Order</a></li>
                        <li><a href="#" class="footer-link">Returns</a></li>
                        <li><a href="#" class="footer-link">Shipping</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Policy</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Privacy Policy</a></li>
                        <li><a href="#" class="footer-link">Terms of Service</a></li>
                        <li><a href="#" class="footer-link">Refund Policy</a></li>
                        <li><a href="#" class="footer-link">Cookies</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Contact</h5>
                    <ul class="list-unstyled text-muted">
                        <li><i class="bi bi-geo-alt"></i> 123 Shop Street</li>
                        <li><i class="bi bi-telephone"></i> +1 234 567 890</li>
                        <li><i class="bi bi-envelope"></i> info@shophub.com</li>
                    </ul>
                </div>
            </div>
            <hr style="border-color: #555;">
            <div class="text-center text-muted">
                <p>&copy; 2024 ShopHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>