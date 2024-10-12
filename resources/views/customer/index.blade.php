@extends('customer.layouts.main')
@section('content')
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="/customer/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Cửa Hàng Giày</b></h1>
                                <h3 class="h2">Mẫu Giày Đẹp Và Hoàn Hảo Nhất</h3>
                                <p>
                                    Cửa Hàng Giày là nơi cung cấp những mẫu giày thời trang, chất lượng cao với những thiết kế mới nhất.
                                    Chúng tôi cam kết mang đến cho bạn sản phẩm tốt nhất với giá cả hợp lý.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="/customer/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Chất Lượng Đỉnh Cao</h1>
                                <h3 class="h2">Giày Thể Thao Đẳng Cấp</h3>
                                <p>
                                    Bạn được phép sử dụng mẫu giày này cho các trang web thương mại của bạn.
                                    Bạn <strong>không được phép</strong> phân phối lại tệp mẫu trong bất kỳ loại trang web nào khác.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="/customer/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Mẫu Giày Mới Nhất</h1>
                                <h3 class="h2">Cập nhật Xu Hướng Mới</h3>
                                <p>
                                    Chúng tôi mang đến cho bạn những mẫu giày hoàn toàn miễn phí cho các trang web của bạn.
                                    Nếu bạn muốn ủng hộ chúng tôi, hãy đóng góp nhỏ qua PayPal hoặc giới thiệu cho bạn bè về cửa hàng của chúng tôi. Xin cảm ơn!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Danh Mục Trong Tháng</h1>
                <p>
                    Khám phá những mẫu giày thời trang hàng đầu cho mùa này!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="/customer/img/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Giày Thể Thao</h5>
                <p class="text-center"><a class="btn btn-success">Mua Ngay</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="/customer/img/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Giày Da</h2>
                <p class="text-center"><a class="btn btn-success">Mua Ngay</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="/customer/img/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Giày Sandal</h2>
                <p class="text-center"><a class="btn btn-success">Mua Ngay</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Sản Phẩm Nổi Bật</h1>
                    <p>
                        Khám phá những sản phẩm giày tuyệt vời nhất của chúng tôi.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="/customer/img/feature_prod_01_v2.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">₫240.000</li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark">Giày Tập Gym</a>
                            <p class="card-text">
                                Được thiết kế đặc biệt cho những người yêu thích thể thao, chắc chắn mang đến sự thoải mái.
                            </p>
                            <p class="text-muted">Đánh giá (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="/customer/img/feature_prod_02_v2.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">₫480.000</li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark">Giày Da Thời Trang</a>
                            <p class="card-text">
                                Mẫu giày hoàn hảo cho những buổi tiệc tùng, mang đến sự sang trọng và đẳng cấp.
                            </p>
                            <p class="text-muted">Đánh giá (50)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="/customer/img/feature_prod_03_v2.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">₫350.000</li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark">Giày thể thao</a>
                            <p class="card-text">
                                Thiết kế chắc chắn, bảo vệ đôi chân bạn trong những chuyến đi dã ngoại.
                            </p>
                            <p class="text-muted">Đánh giá (30)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
@endsection
