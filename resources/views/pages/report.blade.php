@extends('welcome')
@section('content')


<div class="container mt-4" >
<div class="mt-3">
    <div class="menubar-device">
        <div style="padding-left: 70px" class="area-filter">
            <div class="dropdown status-device">
                <p class="text-status-device">Tên dịch vụ</p>
                <form action="/report/filterbyname" method="post" id="filterForm1">
                        @csrf
                <span class="dropdown-icon">
                    <select name="service_name" class="dropd" id="statusDropdown1">
                        <option value="" selected>Tất cả</option>
                        @foreach($services as $service)
                        <option {!! (request()->input('service_name')) == $service->service_name ? 'selected' : '' !!} value="{{ $service->service_name }}">{{ $service->service_name }}</option>
                        @endforeach
                    </select>
                    <span class="icon_dropd"><i class="fa-solid fa-caret-down"></i></span>
                </span>
                </form>
            </div>
            <div class="area-date">
                <p style="font-weight: 600;" class="text-status-device">Chọn thời gian</p>
                 <form action="/report/filterbydate" method="post" id="filterForm2">
                        @csrf
                <div class="area-input-date">
                    <input class="input-date-service" type="date" name="" id="statusDropdown2">
                    <svg width="5" height="6" viewBox="0 0 5 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.13346 2.46129L2.9735 1.75776L1.08342 0.611381C0.683023 0.372106 0 0.543527 0 0.886368V3.11126V5.11474C0 5.45758 0.683023 5.629 1.08342 5.38616L4.13346 3.53624C4.62218 3.2434 4.62218 2.75771 4.13346 2.46129Z"
                            fill="#535261" />
                    </svg>
                    <input class="input-date-service" type="date">
                </div>
                </form>

            </div>

            <div style="padding-left: 40px" class="dropdown status-device">
                <p class="text-status-device">Tình trạng</p>
                <form action="/report/filterbystatus" method="post" id="filterForm3">
                        @csrf
                <span class="dropdown-icon">
                    <select name="status" class="dropd" id="statusDropdown3">
                        <option value="" selected>Tất cả</option>
                        <option {!! (request()->input('status')) == 'pending' ? 'selected' : '' !!} value="pending">Đang chờ</option>
                        <option {!! (request()->input('status')) == 'used' ? 'selected' : '' !!} value="used">Đã sử dụng</option>
                        <option {!! (request()->input('status')) == 'skipped' ? 'selected' : '' !!} value="skipped">Bỏ qua</option>
                    </select>
                    <span class="icon_dropd"><i class="fa-solid fa-caret-down"></i></span>
                </span>
                
            </div>
        </div>
    </div>

    <div class="content-device" style="display: flex; padding-top: 30px;">
        <div class="table-list-device">
            <div class="button-add-device">
                    <a href="#">
                <div class="button-add-device">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.9166 11.888H20.545C17.78 11.888 15.5283 9.63634 15.5283 6.87134V3.49967C15.5283 2.85801 15.0033 2.33301 14.3616 2.33301H9.41496C5.82163 2.33301 2.91663 4.66634 2.91663 8.83134V19.168C2.91663 23.333 5.82163 25.6663 9.41496 25.6663H18.585C22.1783 25.6663 25.0833 23.333 25.0833 19.168V13.0547C25.0833 12.413 24.5583 11.888 23.9166 11.888ZM14.3266 18.4097L11.9933 20.743C11.9116 20.8247 11.8066 20.8947 11.7016 20.9297C11.5966 20.9763 11.4916 20.9997 11.375 20.9997C11.2583 20.9997 11.1533 20.9763 11.0483 20.9297C10.955 20.8947 10.8616 20.8247 10.7916 20.7547C10.78 20.743 10.7683 20.743 10.7683 20.7313L8.43496 18.398C8.09663 18.0597 8.09663 17.4997 8.43496 17.1613C8.77329 16.823 9.33329 16.823 9.67163 17.1613L10.5 18.013V13.1247C10.5 12.6463 10.8966 12.2497 11.375 12.2497C11.8533 12.2497 12.25 12.6463 12.25 13.1247V18.013L13.09 17.173C13.4283 16.8347 13.9883 16.8347 14.3266 17.173C14.665 17.5113 14.665 18.0713 14.3266 18.4097Z"
                            fill="#FF7506" />
                        <path
                            d="M20.335 10.2779C21.4434 10.2896 22.9834 10.2896 24.3017 10.2896C24.9667 10.2896 25.3167 9.50792 24.85 9.04125C23.17 7.34958 20.16 4.30458 18.4334 2.57792C17.955 2.09958 17.1267 2.42625 17.1267 3.09125V7.16292C17.1267 8.86625 18.5734 10.2779 20.335 10.2779Z"
                            fill="#FF7506" />
                    </svg>
                    <p>Tải về</p>
                </div>
            </a>
                </div>
            <table>
                <thead>
                    <tr>

                        <td class="th-border-left" style="color: #ffffff; font-size: 16px;">STT</td>
                        <td class="border-table" style="color: #ffffff; font-size: 16px;">Tên dịch vụ</td>
                        <td class="text-light" style="color: #ffffff; font-size: 16px;">Thời gian cấp</td>
                        <td class="border-table" style="color: #ffffff; font-size: 16px;">Tình trạng</td>
                        <td class="th-border-right" style="color: #ffffff; font-size: 16px;">Nguồn cấp</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($numbers as $number)
                    <tr class="color-tr-white">
                        <td>{{ $number -> number }}</td>
                        <td class="border-table">{{ $number -> service_name }}</td>
                        <td class="border-table">{{ $number -> issued_at }}</td>
                        <td>
                            @if($number -> status == 'pending')
                            <svg class="me-1" width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#4277FF" />
                            </svg> Đang chờ
                            @elseif ($number -> status == 'used')
                            <svg class="me-1" width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#7E7D88" />
                            </svg> Đã sử dụng
                            @else
                            <svg class="me-1" width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#E73F3F" />
                            </svg> Bỏ qua
                            @endif
                        </td>
                        <td class="border-table">{{ $number -> source }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="navigation">
              <ul class="pagination mt-50 mb-70">
                {{-- Hiển thị nút Previous --}}
                <li class="page-item"><a class="page-link" href="{{ $numbers->previousPageUrl() }}"><i class="fa-solid fa-caret-left"></i></a></li>

                {{-- Hiển thị các nút số trang --}}
                @for ($i = 1; $i <= $numbers->lastPage(); $i++)
                  @if ($i >= $numbers->currentPage() - 2 && $i <= $numbers->currentPage() + 2)
                    <li class="page-item {{ ($i == $numbers->currentPage()) ? 'active' : '' }}"><a class="page-link" href="{{ $numbers->url($i) }}">{{ $i }}</a></li>
                  @endif
                @endfor

                <li class="page-item"><a class="page-link" href="{{ $numbers->nextPageUrl() }}"><i class="fa-solid fa-caret-right"></i></a></li>
              </ul>
            </div>
            </div>
        </div>
    <!--  -->
</div>
</div>
</div>

<script>
    const statusDropdown1 = document.getElementById('statusDropdown1');
    const statusDropdown2 = document.getElementById('statusDropdown2');
    const statusDropdown3 = document.getElementById('statusDropdown3');

    statusDropdown1.addEventListener('change', function () {
        document.getElementById('filterForm1').submit();
    });

    statusDropdown2.addEventListener('change', function () {
        document.getElementById('filterForm2').submit();
    });

    statusDropdown3.addEventListener('change', function () {
        document.getElementById('filterForm3').submit();
    });

</script>
<link rel="stylesheet" href="{{ asset('css/service.css') }}">
<link rel="stylesheet" href="{{ asset('css/number.css') }}">
<link rel="stylesheet" href="{{ asset('css/device.css') }}">
@endsection