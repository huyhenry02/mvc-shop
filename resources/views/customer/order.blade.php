@php use App\Models\Order; @endphp
@extends('customer.layouts.main')
@section('content')
    <!-- Start Order List Page -->
    <div class="container py-5">
        <h1 class="h1 text-center mb-4">Danh Sách Đơn Hàng Của Tôi</h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead class="bg-success text-white">
                    <tr>
                        <th scope="col">Mã Đơn Hàng</th>
                        <th scope="col">Ngày Đặt</th>
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Tổng Tiền</th>
                        <th scope="col">Chi Tiết</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $value)
                        <tr>
                            <td> {{ $value['code'] ?? '' }}</td>
                            <td>{{ $value['order_date'] ?? '' }}</td>
                            <td>
                                @switch( $value['status'] )
                                    @case( $value['status'] === Order::STATUS_PENDING )
                                        <span class="text-warning">Chờ xác nhận</span>
                                        @break
                                    @case( $value['status'] === Order::STATUS_SHIPPING )
                                        <span class="text-info">Đang giao hàng</span>
                                        @break
                                    @case( $value['status'] === Order::STATUS_COMPLETED )
                                        <span class="text-success">Giao hàng thành công</span>
                                        @break
                                @endswitch
                            </td>
                            <td>₫{{ number_format($value['total'], 0, ',', '.') ?? '' }}</td>
                            <td>
                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#orderDetailModal"
                                        onclick="showOrderDetails({{ json_encode($value, JSON_THROW_ON_ERROR) }})">Xem
                                    Chi Tiết
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal for Order Details -->
    <div class="modal fade" id="orderDetailModal" tabindex="-1" role="dialog" aria-labelledby="orderDetailLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderDetailLabel">Chi Tiết Đơn Hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Mã Đơn Hàng:</strong> <span id="orderId"></span></p>
                    <p><strong>Ngày Đặt:</strong> <span id="orderDate"></span></p>
                    <p><strong>Trạng Thái:</strong> <span id="orderStatus"></span></p>
                    <p><strong>Tổng Tiền:</strong> <span id="orderTotal"></span></p>
                    <hr>
                    <h5>Danh Sách Sản Phẩm:</h5>
                    <ul id="orderItemsList"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <style>
        /* Custom styles for order list page */
        .container {
            max-width: 1200px; /* Giới hạn chiều rộng của container */
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #28a745; /* Màu xanh thành công */
            font-weight: bold;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1; /* Màu nền khi hover */
        }

        .btn-info {
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-info:hover {
            background-color: #17a2b8; /* Màu xanh dương đậm */
            transform: scale(1.05); /* Tăng kích thước nhẹ khi hover */
        }

        .text-warning {
            color: #ffc107;
        }

        .text-success {
            color: #28a745;
        }

        .text-danger {
            color: #dc3545;
        }

        .modal-header {
            background-color: #28a745; /* Màu nền cho header modal */
            color: white;
        }

        .modal-body {
            font-size: 1.1em;
        }

        .modal-footer .btn {
            margin: 0 5px;
        }

    </style>
    <script>
        function showOrderDetails(order) {
            console.log('order', order);
            document.getElementById('orderId').innerText = order.code;
            document.getElementById('orderDate').innerText = order.order_date;

            let statusText = '';
            switch (order.status) {
                case '{{ Order::STATUS_PENDING }}':
                    statusText = 'Chờ xác nhận';
                    break;
                case '{{ Order::STATUS_SHIPPING }}':
                    statusText = 'Đang giao hàng';
                    break;
                case '{{ Order::STATUS_COMPLETED }}':
                    statusText = 'Giao hàng thành công';
                    break;
                default:
                    statusText = 'Trạng thái không xác định';
            }
            document.getElementById('orderStatus').innerText = statusText;
            document.getElementById('orderTotal').innerText = '₫' + new Intl.NumberFormat().format(order.total);

            const orderItemsList = document.getElementById('orderItemsList');
            orderItemsList.innerHTML = '';

            order.items.forEach(item => {
                const li = document.createElement('li');
                li.innerText = `${item.product_name} - Kích cỡ: ${item.size} - Số lượng: ${item.quantity} - Tổng: ₫${item.sub_total}`;
                orderItemsList.appendChild(li);
            });
        }


    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

@endsection
