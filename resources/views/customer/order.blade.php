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
                    <tr>
                        <td>#123456789</td>
                        <td>10/10/2024</td>
                        <td><span class="text-warning">Đang Giao Hàng</span></td>
                        <td>₫1,200,000</td>
                        <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#orderDetailModal" onclick="showOrderDetails('#123456789')">Xem Chi Tiết</button></td>
                    </tr>
                    <tr>
                        <td>#987654321</td>
                        <td>05/10/2024</td>
                        <td><span class="text-success">Đã Giao Hàng</span></td>
                        <td>₫950,000</td>
                        <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#orderDetailModal" onclick="showOrderDetails('#987654321')">Xem Chi Tiết</button></td>
                    </tr>
                    <tr>
                        <td>#123789456</td>
                        <td>01/10/2024</td>
                        <td><span class="text-danger">Đã Hủy</span></td>
                        <td>₫0</td>
                        <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#orderDetailModal" onclick="showOrderDetails('#123789456')">Xem Chi Tiết</button></td>
                    </tr>
                    <!-- Thêm nhiều đơn hàng ở đây -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal for Order Details -->
    <div class="modal fade" id="orderDetailModal" tabindex="-1" role="dialog" aria-labelledby="orderDetailLabel" aria-hidden="true">
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
        function showOrderDetails(orderId) {
            const orders = {
                '#123456789': {
                    date: '10/10/2024',
                    status: 'Đang Giao Hàng',
                    total: '₫1,200,000',
                    items: ['Giày Thể Thao A', 'Giày Công Sở B']
                },
                '#987654321': {
                    date: '05/10/2024',
                    status: 'Đã Giao Hàng',
                    total: '₫950,000',
                    items: ['Giày Đá Bóng C']
                },
                '#123789456': {
                    date: '01/10/2024',
                    status: 'Đã Hủy',
                    total: '₫0',
                    items: []
                }
            };

            const order = orders[orderId];
            document.getElementById('orderId').innerText = orderId;
            document.getElementById('orderDate').innerText = order.date;
            document.getElementById('orderStatus').innerText = order.status;
            document.getElementById('orderTotal').innerText = order.total;

            const orderItemsList = document.getElementById('orderItemsList');
            orderItemsList.innerHTML = '';
            order.items.forEach(item => {
                const li = document.createElement('li');
                li.innerText = item;
                orderItemsList.appendChild(li);
            });
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


@endsection
