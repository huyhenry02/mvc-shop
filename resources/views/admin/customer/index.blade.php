@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Danh sách các Khách hàng</h5>

                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <h6 class="fw-semibold">Tổng số Khách hàng: <span id="total-creators">{{ $customers->count() }}</span></h6>
                </div>

                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên Khách hàng</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Số đơn hàng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $customers as $key => $customer)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $customer->name ?? '' }}</td>
                            <td>{{ $customer->email ?? '' }}</td>
                            <td>0{{ $customer->phone ?? '' }}</td>
                            <td>{{ $customer->orders()->count() ?? '' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
