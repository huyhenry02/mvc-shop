@extends('customer.layouts.main')
@section('content')

    <div class="container-fluid bg-light py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h2 class="h2">Đăng Ký Tài Khoản</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.post_register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ và Tên</label>
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Nhập họ và tên">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Nhập email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" required placeholder="Số điện thoại">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Mật khẩu">
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-success btn-lg">Đăng Ký</button>
                            </div>
                            <div class="text-center">
                                <p class="mb-0">Bạn đã có tài khoản? <a href="{{ route('auth.login') }}">Đăng nhập ngay!</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
    body {
        background-size: cover;
        background-attachment: fixed;
    }

    .card {
        border-radius: 15px;
        overflow: hidden;
    }

    .card-header {
        background-color: #28a745;
        color: white;
        padding: 20px;
        border-bottom: none;
    }

    .card-body {
        padding: 30px;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
    }

    .btn-success:hover {
        background-color: #218838;
    }

</style>
@endsection
