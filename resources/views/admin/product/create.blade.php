@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tạo mới Sản phẩm</h5>

                <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="campaignName" class="form-label">Tên Sản phẩm</label>
                        <input type="text" class="form-control" id="campaignName" placeholder="Nhập tên Sản phẩm" name="name" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="description" rows="4" placeholder="Nhập mô tả chi tiết" name="description" required></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="specification" class="form-label">Đặc điểm nổi bật</label>
                        <textarea class="form-control" id="specification" rows="4" placeholder="Nhập đặc điểm nổi bật" name="specification" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fileInput" class="form-label">Ảnh sản phẩm</label>
                        <input type="file" class="form-control" id="fileInput" accept="image/*" name="image"  multiple>
                        <div id="filePreview" class="mt-3">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Thương hiệu</label>
                        <select class="form-control" id="status" name="brand_id" required>
                            @foreach( $brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="followerRequired" class="form-label">Giá</label>
                        <input type="number" class="form-control" id="followerRequired" placeholder="Nhập Giá sản phẩm" name="price" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="followerRequired" class="form-label">Giảm giá</label>
                        <input type="text" class="form-control" id="followerRequired" placeholder="Giảm giá" name="sale" required>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Tạo Sản phẩm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        #filePreview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        #filePreview img {
            width: 650px;
            height: 300px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px;
        }
    </style>

    <script>
        document.getElementById('fileInput').addEventListener('change', function (event) {
            const files = event.target.files;
            const filePreview = document.getElementById('filePreview');
            filePreview.innerHTML = '';

            for (let i = 0; i < files.length; i++) {
                const file = files[i];

                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    filePreview.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });


    </script>
@endsection
