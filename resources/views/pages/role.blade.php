@extends('welcome')
@section('content')


<div class="container mt-4" >
<div class="mt-3">
    <h1>Danh sách vai trò</h1>
    <div style="padding-left: 1160px;" class="menubar-device">
	    <div class="area-search">
	    	<p style="font-weight: 600; line-height: 40px; margin-left: 10px;">Từ khóa
	            <form action="/number/search" method="post">
	                @csrf
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
                    <a href="/frole">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.8884 2.33301H9.11171C4.86504 2.33301 2.33337 4.86467 2.33337 9.11134V18.8763C2.33337 23.1347 4.86504 25.6663 9.11171 25.6663H18.8767C23.1234 25.6663 25.655 23.1347 25.655 18.888V9.11134C25.6667 4.86467 23.135 2.33301 18.8884 2.33301ZM18.6667 14.8747H14.875V18.6663C14.875 19.1447 14.4784 19.5413 14 19.5413C13.5217 19.5413 13.125 19.1447 13.125 18.6663V14.8747H9.33337C8.85504 14.8747 8.45837 14.478 8.45837 13.9997C8.45837 13.5213 8.85504 13.1247 9.33337 13.1247H13.125V9.33301C13.125 8.85467 13.5217 8.45801 14 8.45801C14.4784 8.45801 14.875 8.85467 14.875 9.33301V13.1247H18.6667C19.145 13.1247 19.5417 13.5213 19.5417 13.9997C19.5417 14.478 19.145 14.8747 18.6667 14.8747Z"
                            fill="#FF9138" />
                    </svg>
                    <p>Thêm vai trò</p>
                </a>
                </div>
            <table>
                <thead>
                    <tr>
                    <td class="th-border-left" style="color: #ffffff; font-size: 16px;">Tên vai trò</td>
                    <td class="border-table" style="color: #ffffff; font-size: 16px;">Số người dùng</td>
                    <td class="text-light" style="color: #ffffff; font-size: 16px;">Mô tả</td>
                    <td class="th-border-right" style="color: #ffffff; font-size: 16px;"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="color-tr-white">
                        <td>Tên vai trò</td>
                        <td class="border-table">Số người dùng</td>
                        <td class="border-table">Mô tả</td>
                        <td class="border-table"><a href="/role/update/">Cập nhật</a></td>
                    </tr>

                </tbody>
            </table>
            </div>
        </div>
    <!--  -->


{{-- <div class="navigation">
      <ul class="pagination mt-50 mb-70">
        <li class="page-item"><a class="page-link" href="{{ $numbers->previousPageUrl() }}"><i class="fa-solid fa-caret-left"></i></a></li>
        @for ($i = 1; $i <= $numbers->lastPage(); $i++)
          @if ($i >= $numbers->currentPage() - 2 && $i <= $numbers->currentPage() + 2)
            <li class="page-item {{ ($i == $numbers->currentPage()) ? 'active' : '' }}"><a class="page-link" href="{{ $numbers->url($i) }}">{{ $i }}</a></li>
          @endif
        @endfor

        <li class="page-item"><a class="page-link" href="{{ $numbers->nextPageUrl() }}"><i class="fa-solid fa-caret-right"></i></a></li>
      </ul>
    </div> --}}

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