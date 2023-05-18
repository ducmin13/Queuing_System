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

           <form style="padding-left: 565px; " id="form-add-ticket" action="/new-number" method="post">
                    @csrf
                    <select class="btn-select-choose-service" name="service_name" id="">
                        @foreach($services as $service)
                        <option value="{{ $service->service_name }}">{{ $service->service_desc }}</option>
                        @endforeach
                    </select>
                </form>
            <div class="area-button-codenew">
                <a href="/number">
                    <button class="btn-codenew-abort">Hủy bỏ</button>
                </a>
                
                <button type="submit" form="form-add-ticket" class="btn-codenew-inso" onclick="openPopup()">In số</button>
            </div>
            

        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button id="closeModalBtn" type="button" class="btn-close-popup" data-bs-dismiss="modal" aria-label="Close"><svg width="24"
                        height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#FF9138" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#FF9138" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                @foreach($numbers as $number)
                <div class="content-header">
                    <h3>Số thứ tự được cấp</h3>
                    <h2>{{ $numbers -> number+1 }}</h2>
                    <p>DV: {{ $numbers->service_name }} <b>(tại quầy số 2)</b></p>
                </div>
                <div class="content-footer">
                    <div>
                        <div class="text-datetime">
                            <p>Thời gian cấp:</p>
                            <p>{{ $numbers->issued_at }}</p>
                        </div>
                        <div class="text-datetime">
                            <p>Hạn sử dụng:</p>
                            <p>{{ $numbers->expired_at }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

<script>
    function openPopup() {
        var popup = document.getElementById("staticBackdrop");
        popup.classList.add("show");
        popup.setAttribute("aria-hidden", "false");
        popup.style.display = "block";
    }

    function closePopup() {
      var popup = document.getElementById("staticBackdrop");
      popup.classList.remove("show");
      popup.setAttribute("aria-hidden", "true");
      popup.style.display = "none";
    }
    document.getElementById("closeModalBtn").addEventListener("click", closePopup);

    

</script>


</style>
<link rel="stylesheet" href="{{ asset('css/service.css') }}">
<link rel="stylesheet" href="{{ asset('css/number.css') }}">
@endsection