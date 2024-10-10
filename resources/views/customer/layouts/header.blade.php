<!-- Start Top Nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">nhom4@gmail.com</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">099999999</a>
            </div>
            <div>
                <a class="text-light" href="{{ route('auth.login') }}">Đăng nhập</a>
                <a class="text-light" href="#" target="_blank">/</a>
                <a class="text-light" href="{{ route('auth.register') }}">Đăng ký</a>
            </div>
        </div>
    </div>
</nav>
<!-- Close Top Nav -->
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="{{ route('customer.index') }}">
            Zay
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.index') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.about') }}">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.shop') }}">Cửa hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.contact') }}">Liên lạc</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <a class="nav-icon position-relative text-decoration-none" href="{{ route('customer.cart') }}">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="{{ route('customer.order') }}">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                </a>
            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->
