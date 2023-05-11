@extends('welcome')
@section('content')

<main>
    <div class="title-heading">
            <p>Quản lý cấp số</p>
        </div>
    <div class="content-codes-new">
        <div class="area-codes-new">
            <p class="heading-codes-new">CẤP SỐ MỚI</p>
            <p class="text-codes-new">Dịch vụ khách hàng lựa chọn</p>
            <form style="padding-left: 565px; " id="form-add-ticket" action="" method="post">
                <select class="btn-select-choose-service" name="service_name" id="">
                    <option value="Khám tim mạch">Khám tim mạch</option>
                    <option value="Khám sản - Phụ khoa">Khám sản - Phụ khoa</option>
                    <option value="Khám răng hàm mặt">Khám răng hàm mặt</option>
                    <option value="Khám tai mũi họng">Khám tai mũi họng</option>
                </select>
            </form>
            <div class="area-button-codenew">
                <button class="btn-codenew-abort">Hủy bỏ</button>
                <!-- Popup Button -->
                <button class="btn-codenew-inso" data-bs-toggle="modal" data-bs-target="#staticBackdrop">In
                    số</button>
            </div>
        </div>
    </div>
</main>

<link rel="stylesheet" href="{{ asset('css/service.css') }}">
<link rel="stylesheet" href="{{ asset('css/number.css') }}">
@endsection