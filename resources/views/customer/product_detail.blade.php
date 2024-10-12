@extends('customer.layouts.main')
@section('content')
    <!-- Open Content -->
    <section class="bg-light" style=" height: 1100px;">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Product Image 7">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Product Image 8">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ $model->image ?? '/admin/images/no_image_custom.jpg' }}" alt="Product Image 9">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Third slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"> {{ $model->name ?? '' }} </h1>
                            <p class="h3 py-2">{{ number_format($model->price, 0, ',', '.') }} VND</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Thương hiệu:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $model->brand?->name ?? '' }}</strong></p>
                                </li>
                            </ul>

                            <h6>Mô tả:</h6>
                            <p>
                                {{ $model->description ?? '' }}
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Màu khả dụng:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul>

                            <h6>Đặc điểm đặc biệt:</h6>
                            <ul class="list-unstyled pb-3">
                                {{ $model->specification ?? '' }}
                            </ul>

                            <form action="{{ route('customer.addToCart') }}" method="post">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="product_id" value="{{ $model->id }}">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="size" id="product-size" value="37">
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-success btn-size" data-size="37">37</button>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-success btn-size" data-size="38">38</button>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-success btn-size" data-size="39">39</button>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-success btn-size" data-size="40">40</button>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-success btn-size" data-size="41">41</button>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-success btn-size" data-size="42">42</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Số lượng
                                                <input type="hidden" name="quantity" id="quantity" value="1">
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-success" id="btn-minus">-</button>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="badge bg-secondary" id="var-value">1</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-success" id="btn-plus">+</button>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit">Mua</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sizeButtons = document.querySelectorAll('.btn-size');
            sizeButtons.forEach(button => {
                button.addEventListener('click', function () {
                    document.getElementById('product-size').value = this.getAttribute('data-size');

                    sizeButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            const quantityInput = document.getElementById('quantity');
            const varValue = document.getElementById('var-value');

            document.getElementById('btn-plus').addEventListener('click', function () {
                let currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
                varValue.textContent = quantityInput.value;
            });

            document.getElementById('btn-minus').addEventListener('click', function () {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                    varValue.textContent = quantityInput.value;
                }
            });
        });
    </script>


@endsection
