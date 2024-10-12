@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Danh sách các Sản phẩm</h5>

                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <h6 class="fw-semibold">Tổng số Sản phẩm: <span id="total-creators">{{ $products->count() }}</span></h6>
                </div>

                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" width="6%">STT</th>
                        <th scope="col">Tên Sản phẩm</th>
                        <th scope="col" width="12%">Thương hiệu</th>
                        <th scope="col" width="12%">Giá</th>
                        <th scope="col" width="12%">Giảm giá</th>
                        <th scope="col" width="12%">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $products as $key => $product )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $product->name ?? '' }}</td>
                            <td>{{ $product->brand?->name ?? '' }}</td>
                            <td>{{ number_format($product->price, 0, ',', '.') }} VND</td>
                            <td>{{ $product->sale ?? '' }}</td>
                            <td>
                                <a
                                    href="{{ route('admin.product.update', $product->id) }}" class="btn btn-sm btn-warning">Sửa</a>
                                <a
                                    href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-sm btn-danger">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
