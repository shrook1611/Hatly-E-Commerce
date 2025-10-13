<div class="container-fluid nav-bar p-0">
    <div class="row gx-0 bg-primary px-5 align-items-center">
        <div class="col-lg-3 d-none d-lg-block">
            <nav class="navbar navbar-light position-relative" style="width: 250px;">
                <button class="navbar-toggler border-0 fs-4 w-100 px-0 text-start" type="button"
                    data-bs-toggle="collapse" data-bs-target="#allCat">
                    <h4 class="m-0"><i class="fa fa-bars me-2"></i>All Categories</h4>
                </button>
                <div class="collapse navbar-collapse rounded-bottom" id="allCat">
                    <div class="navbar-nav ms-auto py-0">
                        <ul class="list-unstyled categories-bars">
                            <li>
                                <div class="categories-bars-item">
                                    <a href="#">Accessories</a>
                                    <span>(3)</span>
                                </div>
                            </li>
                            <li>
                                <div class="categories-bars-item">
                                    <a href="#">Electronics & Computer</a>
                                    <span>(5)</span>
                                </div>
                            </li>
                            <li>
                                <div class="categories-bars-item">
                                    <a href="#">Laptops & Desktops</a>
                                    <span>(2)</span>
                                </div>
                            </li>
                            <li>
                                <div class="categories-bars-item">
                                    <a href="#">Mobiles & Tablets</a>
                                    <span>(8)</span>
                                </div>
                            </li>
                            <li>
                                <div class="categories-bars-item">
                                    <a href="#">SmartPhone & Smart TV</a>
                                    <span>(5)</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-12 col-lg-9">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
                <a href="" class="navbar-brand d-block d-lg-none">
                    <h1 class="display-5 text-secondary m-0"><i
                            class="fas fa-shopping-bag text-white me-2"></i>Hatly</h1>
                    <img src="{{asset('customer/')}}/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars fa-1x"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('userhome')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link me-2">Contact</a>
                        <a href="{{route('orderdetails')}}" class="nav-item nav-link">MyOrders</a>
                   

                    </div>

                    <div class="nav-item dropdown d-block d-lg-none mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">All Category</a>
                        <div class="dropdown-menu m-0">
                            <ul class="list-unstyled categories-bars">
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">Accessories</a>
                                        <span>(3)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">Electronics & Computer</a>
                                        <span>(5)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">Laptops & Desktops</a>
                                        <span>(2)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">Mobiles & Tablets</a>
                                        <span>(8)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">SmartPhone & Smart TV</a>
                                        <span>(5)</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="" class="btn btn-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0"><i
                        class="fa fa-mobile-alt me-2"></i>01278190679</a>
        </div>
        </nav>
    </div>
</div>
</div>