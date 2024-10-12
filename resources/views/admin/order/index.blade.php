@php use App\Models\Order; @endphp
@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Danh sách các Đơn hàng</h5>

                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <h6 class="fw-semibold">Tổng số Đơn hàng: <span id="total-creators"> {{ $orders->count() }}</span></h6>
                </div>

                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">Ngày đặt</th>
                        <th scope="col">Tổng số tiền</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $orders as $key => $order )
                        <tr>
                            <td> {{ $key + 1 }}</td>
                            <td> {{ $order->code ?? '' }}</td>
                            <td>{{ $order->user->name ?? '' }}</td>
                            <td>{{ $order->order_date ?? '' }}</td>
                            <td>₫{{ number_format($order->total, 0, ',', '.') ?? '' }}</td>
                            <td>
                                @switch( $order->status )
                                    @case( $order->status === Order::STATUS_PENDING )
                                        <span class="badge bg-warning">Chờ xác nhận</span>
                                        @break
                                    @case( $order->status === Order::STATUS_SHIPPING )
                                        <span class="badge bg-info">Đang giao hàng</span>
                                        @break
                                    @case( $order->status === Order::STATUS_COMPLETED )
                                        <span class="badge bg-success">Giao hàng thành công</span>
                                        @break
                                @endswitch
                            </td>
                            <td>
                                <a href="{{ route('admin.order.update', $order->id) }}" class="btn btn-sm btn-info">Xem chi tiết</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
