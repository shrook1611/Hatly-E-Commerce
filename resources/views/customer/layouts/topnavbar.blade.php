<!-- 2nd topnav br -->

<div class="container-fluid px-5 py-4 d-none d-lg-block">
    <div class="row gx-0 align-items-center text-center">
        <div class="col-md-4 col-lg-3 text-center text-lg-start">
            <div class="d-inline-flex align-items-center">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-5 text-primary m-0"><i
                            class="fas fa-shopping-bag text-secondary me-2"></i>Hatly</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
            </div>
        </div>
        <div class="col-md-4 col-lg-6 text-center">
            <div class="position-relative ps-4">
                <div class="d-flex border rounded-pill">
                    <input class="form-control border-0 rounded-pill w-100 py-3" type="text"
                        data-bs-target="#dropdownToggle123" placeholder="Search Looking For?">
                    <select class="form-select text-dark border-0 border-start rounded-0 p-3" style="width: 200px;">
                        <option value="All Category">All Category</option>
                        @foreach($categories as $category)

                        <option value="{{$category->name}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <button type="button" class="btn btn-primary rounded-pill py-3 px-5" style="border: 0;"><i
                            class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 text-center text-lg-end">
            <div class="d-inline-flex align-items-center">



                <a href="#" class="text-muted d-flex align-items-center justify-content-center me-3" data-bs-target="#offcanvasHeart"
                    aria-controls="offcanvasHeart" data-bs-toggle="offcanvas"><span
                        class="rounded-circle btn-md-square border"><i class="fas fa-heart"></i></a>
                <a href="#" class="text-muted d-flex align-items-center justify-content-center"><span
                        class="rounded-circle btn-md-square border" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasCart"
                        aria-controls="offcanvasCart"><i class="fas fa-shopping-cart"></i></span>
                    <span class="text-dark ms-2">{{$total}}<small>$</small></span></a>



                <a href="#" class=" ms-5 btn btn-primary">logOut</a>
            </div>
        </div>
    </div>