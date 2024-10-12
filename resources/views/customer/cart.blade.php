@extends('customer.layouts.main')
@section('content')
    <!-- Start Cart Page -->
    <div class="container py-5">
        <h1 class="h1 text-center mb-4">Giỏ Hàng Của Bạn</h1>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped table-bordered custom-table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Sản Phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col" width="15%">Số Lượng</th>
                        <th scope="col">Tổng</th>
                        <th scope="col" width="15%">Thao Tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $cartItems as $cartItem )
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $cartItem->product->image ?? '/admin/images/no_image_custom.jpg' }}" alt="image" class="img-fluid product-image">
                                    <div>
                                        <h5 class="h6 mb-1">{{ $cartItem->product->name ?? '' }}</h5>
                                    </div>
                                </div>
                            </td>
                            <td>₫{{ number_format($cartItem->product->price, 0, ',', '.') }}</td>
                            <td>
                                <input type="number" class="form-control" value="{{ $cartItem->quantity ?? '' }}" min="1">
                            </td>
                            <td>₫{{ number_format($cartItem->sub_total, 0, ',', '.') ?? '' }}</td>
                            <td class="text-center">
                                <a href="{{ route('customer.removeCartItem', $cartItem->id) }}" class="btn btn-danger btn-sm">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('customer.shop') }}" class="btn btn-secondary">Tiếp Tục Mua Sắm</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success custom-card">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title">Tổng Kết</h5>
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
                    <div class="card-footer text-center">
                        <a href="{{ route('customer.checkout') }}" class="btn btn-primary btn-lg">Thanh Toán Ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart Page -->
    <style>
        /* Custom styles for cart page */
        .custom-table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .custom-table th, .custom-table td {
            vertical-align: middle;
        }

        .product-image {
            width: 80px;
            height: auto;
            margin-right: 15px;
            border-radius: 5px;
        }

        .custom-card {
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
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

        .btn-success, .btn-danger {
            transition: background-color 0.3s;
        }

        .btn-success:hover {
            background-color: #28a745;
        }

        .btn-danger:hover {
            background-color: #dc3545;
        }

    </style>
@endsection
