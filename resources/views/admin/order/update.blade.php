@php use App\Models\Order; @endphp
@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Thông tin đơn hàng</h5>

                <form action="{{ route('admin.order.edit', $model->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="campaignName" class="form-label">Mã đơn hàng</label>
                        <input type="text" class="form-control" id="campaignName" disabled
                               value="{{ $model->code ?? '' }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="ship_name" class="form-label">Tên người nhận</label>
                        <input type="text" class="form-control" id="campaignName" disabled
                               value="{{ $model->ship_name ?? '' }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="ship_phone" class="form-label">SĐT người nhận</label>
                        <input type="text" class="form-control" id="campaignName" disabled
                               value="{{ $model->ship_phone ?? '' }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="ship_email" class="form-label">Email người nhận</label>
                        <input type="text" class="form-control" id="campaignName" disabled
                               value="{{ $model->ship_email ?? '' }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="ship_address" class="form-label">Địa chỉ người nhận</label>
                        <input type="text" class="form-control" id="ship_address" disabled
                               value="{{ $model->ship_address ?? '' }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="followerRequired" class="form-label">Tổng tiền</label>
                        <input type="number" class="form-control" id="followerRequired" disabled
                               value="{{ $model->total ?? '' }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select class="form-control" id="status" name="status">
                            <option selected="selected" value="{{ $model->status }}">
                                @switch( $model->status )
                                    @case( $model->status === Order::STATUS_PENDING )
                                        Chờ xác nhận
                                        @break
                                    @case( $model->status === Order::STATUS_SHIPPING )
                                        Đang giao hàng
                                        @break
                                    @case( $model->status === Order::STATUS_COMPLETED )
                                        Giao hàng thành công
                                        @break
                                @endswitch
                            </option>
                                <option value="pending">Chờ xác nhận</option>
                                <option value="shipping">Đang giao hàng</option>
                                <option value="completed">Giao hàng thành công</option>
                        </select>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" width="6%">STT</th>
                            <th scope="col" width="12%">Ảnh sản phẩm</th>
                            <th scope="col">Tên Sản phẩm</th>
                            <th scope="col" width="12%">Số lượng</th>
                            <th scope="col" width="12%">Tổng giá</th>
                            <th scope="col" width="12%">Size</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $model->orderDetails as $key => $orderDetail)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <img src="{{ $orderDetail->product->image ?? '/admin/images/no_image_custom.jpg' }}" alt="image" class="img-fluid product-image">
                                </td>
                                <td>{{ $orderDetail->product?->name ?? '' }}</td>
                                <td>{{ $orderDetail->quantity ?? '' }}</td>
                                <td>{{ number_format($orderDetail->sub_total, 0, ',', '.') }}</td>
                                <td>{{ $orderDetail->size ?? '' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update Trạng thái</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .product-image {
            width: 80px;
            height: auto;
            margin-right: 15px;
            border-radius: 5px;
        }

    </style>
@endsection
