@extends('customer.layouts.main')
@section('content')
    <!-- Start Checkout Page -->
    <div class="container py-5">
        <h1 class="h1 text-center mb-4">Xác Nhận Đơn Hàng</h1>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('customer.post.checkout') }}" method="post">
                    @csrf
                <h5>Thông Tin Giao Hàng</h5>
                    <div class="form-group mb-3">
                        <label for="ship_name">Họ và Tên</label>
                        <input type="text" class="form-control" id="ship_name" name="ship_name"
                               placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="ship_email">Email</label>
                        <input type="email" class="form-control" id="ship_email" name="ship_email"
                               placeholder="Nhập email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="ship_phone">Số Điện Thoại</label>
                        <input type="tel" class="form-control" id="ship_phone" name="ship_phone"
                               placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Địa Chỉ</label>
                        <textarea class="form-control" id="address" name="ship_address" rows="3"
                                  placeholder="Nhập địa chỉ giao hàng" required></textarea>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary btn-lg">Xác Nhận Đơn Hàng</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-flex align-items-start">
                <div class="card border-success custom-card w-100">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title">Tổng Kết Đơn Hàng</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="d-flex justify-content-between">
                            <span>Tổng Tiền:</span>
                            <span>₫{{ number_format($totalCart, 0, ',', '.') ?? '' }}</span>
                        </h6>
                        <h6 class="d-flex justify-content-between">
                            <span>Phí Vận Chuyển:</span>
                            <span>₫30,000</span>
                        </h6>
                        <h6 class="d-flex justify-content-between">
                            <span>Giảm Giá:</span>
                            <span>-₫30,000</span>
                        </h6>
                        <hr>
                        <h5 class="d-flex justify-content-between">
                            <span>Tổng Cộng:</span>
                            <span class="text-success">₫{{ number_format($totalCart, 0, ',', '.') ?? '' }}</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Checkout Page -->
    <style>
        /* Custom styles for checkout page */
        .custom-card {
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 60px;
        }

        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0;
        }

        .btn {
            border-radius: 5px;
        }

        .btn-primary {
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #007bff;
        }

    </style>
@endsection
