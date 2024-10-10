@extends('customer.layouts.main')
@section('content')
    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Liên Hệ Chúng Tôi</h1>
            <p>
                Chúng tôi luôn sẵn sàng lắng nghe ý kiến và câu hỏi của bạn.
                Hãy để chúng tôi giúp bạn tìm kiếm đôi giày hoàn hảo!
            </p>
        </div>
    </div>

    <!-- Start Map -->
    <div class="container py-4">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.292276418201!2d105.78484157755265!3d20.9809179894157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdd8a1ad71%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNow61uaCB2aeG7hW4gdGjDtG5n!5e0!3m2!1svi!2s!4v1728577501712!5m2!1svi!2s" width="100%" height="400" style="border:0; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Tên</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Nhập tên của bạn">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Nhập email của bạn">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Chủ đề</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Nhập chủ đề">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Tin nhắn</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Nhập tin nhắn" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Gửi Thông Điệp</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
@endsection
