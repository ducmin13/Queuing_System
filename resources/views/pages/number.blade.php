@extends('welcome')
@section('content')


<div class="container mt-4" >
<div class="mt-3">
    <h1>Quản lý cấp số</h1>
    
    <div class="menubar-device">
        <div style="padding-left: 80px" class="area-filter">
            <div class="dropdown status-device">
                <p class="text-status-device">Tên dịch vụ</p>
                <form action="/number/filterbyname" method="post" id="filterForm1">
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

            <div class="dropdown status-device">
                <p class="text-status-device">Tình trạng</p>
                <form action="/number/filterbystatus" method="post" id="filterForm2">
                        @csrf
                <span class="dropdown-icon">
                    <select name="status" class="dropd" id="statusDropdown2">
                        <option value="" selected>Tất cả</option>
                        <option {!! (request()->input('status')) == 'pending' ? 'selected' : '' !!} value="pending">Đang chờ</option>
                        <option {!! (request()->input('status')) == 'used' ? 'selected' : '' !!} value="used">Đã sử dụng</option>
                        <option {!! (request()->input('status')) == 'skipped' ? 'selected' : '' !!} value="skipped">Bỏ qua</option>
                    </select>
                    <span class="icon_dropd"><i class="fa-solid fa-caret-down"></i></span>
                </span>
                </form>
            </div>

            <div class="dropdown status-device">
                    <p class="text-status-device">Nguồn cấp</p>
                    <form action="/number/filterbysource" method="post" id="filterForm3">
                        @csrf
                    <span class="dropdown-icon">
                    <select name="source" class="btn-condition" name="filter_source" id="statusDropdown3">
                        <option value=" ">Tất cả</option>
                        <option {!! (request()->input('source')) == 'Kiosk' ? 'selected' : '' !!} value="Kiosk">Kiosk</option>
                        <option {!! (request()->input('source')) == 'system' ? 'selected' : '' !!} value="system">Hệ thống</option>
                    </select>
                </span>
                    </form>
                </div>

            <div class="area-date">
                <p class="text-status-device">Chọn thời gian</p>
                <div class="area-input-date">
                    <input class="input-date-service" type="date" name="" id="statusDropdown3">
                    <svg width="5" height="6" viewBox="0 0 5 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.13346 2.46129L2.9735 1.75776L1.08342 0.611381C0.683023 0.372106 0 0.543527 0 0.886368V3.11126V5.11474C0 5.45758 0.683023 5.629 1.08342 5.38616L4.13346 3.53624C4.62218 3.2434 4.62218 2.75771 4.13346 2.46129Z"
                            fill="#535261" />
                    </svg>
                    <input class="input-date-service" type="date">
                </div>

            </div>
        </div>

        <div class="area-search">
            <form action="/number/search" method="post">
                @csrf
                <p style="font-weight: 600; line-height: 40px; margin-left: 10px;">Từ khóa
                    <span class="dropdown-icon">
                        <input type="search" class="dropd" name="keyword" placeholder="Nhập từ khóa">
                        <span class="icon_search"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <button type="submit" id="hidden-button" style="display: none;"></button>
                    </span>
            </form>
        </div>
    </div>

    <div class="content-device" style="display: flex; padding-top: 30px;">
        <div class="table-list-device">
            <div class="button-add-device">
                    <a href="/add-new-number">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.8884 2.33301H9.11171C4.86504 2.33301 2.33337 4.86467 2.33337 9.11134V18.8763C2.33337 23.1347 4.86504 25.6663 9.11171 25.6663H18.8767C23.1234 25.6663 25.655 23.1347 25.655 18.888V9.11134C25.6667 4.86467 23.135 2.33301 18.8884 2.33301ZM18.6667 14.8747H14.875V18.6663C14.875 19.1447 14.4784 19.5413 14 19.5413C13.5217 19.5413 13.125 19.1447 13.125 18.6663V14.8747H9.33337C8.85504 14.8747 8.45837 14.478 8.45837 13.9997C8.45837 13.5213 8.85504 13.1247 9.33337 13.1247H13.125V9.33301C13.125 8.85467 13.5217 8.45801 14 8.45801C14.4784 8.45801 14.875 8.85467 14.875 9.33301V13.1247H18.6667C19.145 13.1247 19.5417 13.5213 19.5417 13.9997C19.5417 14.478 19.145 14.8747 18.6667 14.8747Z"
                            fill="#FF9138" />
                    </svg>
                    <p>Cấp số mới</p>
                </a>
                </div>
            <table>
                <thead>
                    <tr>
                    <td class="th-border-left" style="color: #ffffff; font-size: 16px;">STT</td>
                    <td class="border-table" style="color: #ffffff; font-size: 16px;">Tên khách hàng</td>
                    <td class="text-light" style="color: #ffffff; font-size: 16px;">Tên dịch vụ</td>
                    <td class="border-table" style="color: #ffffff; font-size: 16px;">Thời gian cấp</td>
                    <td class="text-light" style="color: #ffffff; font-size: 16px;">Hạn sử dụng</td>
                    <td class="border-table" style="color: #ffffff; font-size: 16px;">Trạng thái</td>
                    <td class="border-table" style="color: #ffffff; font-size: 16px;">Nguồn cấp</td>
                    <td class="th-border-right" style="color: #ffffff; font-size: 16px;"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($numbers as $number)
                    <tr class="color-tr-white">
                        <td>{{ $number -> number }}</td>
                        <td class="border-table">{{ $number -> name }}</td>
                        <td class="border-table">{{ $number -> service_name }}</td>
                        <td class="border-table">{{ $number -> issued_at }}</td>
                        <td class="border-table">{{ $number -> expired_at }}</td>
                        <td>
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#4277FF" />
                            </svg> Đang chờ</td>
                        <td class="border-table">{{ $number -> source }}</td>
                        <td class="border-table"><a href="/number/info/{{$number->id}}">Chi tiết</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>

            <div class="themthietbi">
                <a href="insert-service" style="text-decoration: none; color: orangered;">
                    <div>
                        <p><i class="fa-solid fa-square-plus"></i><br>
                        Thêm dịch vụ</p>
                    </div>
                </a>
            </div>
        </div>
    <!--  -->
</div>

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