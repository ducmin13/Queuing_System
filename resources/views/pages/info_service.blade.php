@extends('welcome')
@section('content')


<div class="title-heading">
    <p>Quản lý dịch vụ</p>
</div>
<div class="content-service">
    <div class="content-info-service">
        @foreach($services as $service)
        <div class="button-update-back-info-service">
            <a href="/service/fupdate/{{ $service->id }}">
                <div class="button-update-info-service">
                    <svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.443 2.5521C21.1213 2.44721 22.7762 3.02994 24.0233 4.17209C25.1655 5.41913 25.7482 7.07409 25.655 8.764V19.6494C25.7599 21.3393 25.1655 22.9943 24.035 24.2413C22.7879 25.3835 21.1213 25.9662 19.443 25.8613H8.55751C6.86758 25.9662 5.21261 25.3835 3.96556 24.2413C2.8234 22.9943 2.24066 21.3393 2.34555 19.6494V8.764C2.24066 7.07409 2.8234 5.41913 3.96556 4.17209C5.21261 3.02994 6.86758 2.44721 8.55751 2.5521H19.443ZM12.8115 19.8592L20.6551 11.9923C21.366 11.2697 21.366 10.1043 20.6551 9.39335L19.14 7.87825C18.4174 7.15567 17.2519 7.15567 16.5293 7.87825L15.7485 8.67077C15.6319 8.78731 15.6319 8.98544 15.7485 9.10199C15.7485 9.10199 17.6016 10.9434 17.6365 10.99C17.7647 11.1299 17.8463 11.3164 17.8463 11.5261C17.8463 11.9457 17.5083 12.2953 17.0771 12.2953C16.879 12.2953 16.6925 12.2138 16.5643 12.0856L14.618 10.1509C14.5247 10.0577 14.3616 10.0577 14.2683 10.1509L8.70902 15.7101C8.32442 16.0948 8.10298 16.6076 8.09132 17.1553L8.02139 19.9175C8.02139 20.069 8.06801 20.2088 8.17291 20.3137C8.2778 20.4186 8.41765 20.4769 8.56917 20.4769H11.308C11.8674 20.4769 12.4036 20.2554 12.8115 19.8592Z"
                            fill="#FF7506" />
                    </svg>
                    <p>Cập nhật danh sách</p>
                </div>
            </a>
            <a href="/service">
                <div class="button-update-info-service border-top-info-service">
                    <svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.8885 2.54004H9.1235C4.86516 2.54004 2.3335 5.07171 2.3335 9.31837V19.0834C2.3335 23.33 4.86516 25.8617 9.11183 25.8617H18.8768C23.1235 25.8617 25.6552 23.33 25.6552 19.0834V9.31837C25.6668 5.07171 23.1352 2.54004 18.8885 2.54004Z"
                            fill="#FF7506" />
                        <path
                            d="M16.2398 10.1H10.2315L10.6165 9.71503C10.9548 9.37669 10.9548 8.81669 10.6165 8.47836C10.2782 8.14003 9.71818 8.14003 9.37985 8.47836L7.54818 10.31C7.20985 10.6484 7.20985 11.2084 7.54818 11.5467L9.37985 13.3784C9.55485 13.5534 9.77652 13.635 9.99818 13.635C10.2198 13.635 10.4415 13.5534 10.6165 13.3784C10.9548 13.04 10.9548 12.48 10.6165 12.1417L10.3132 11.8384H16.2398C17.7332 11.8384 18.9582 13.0517 18.9582 14.5567C18.9582 16.0617 17.7448 17.275 16.2398 17.275H10.4998C10.0215 17.275 9.62485 17.6717 9.62485 18.15C9.62485 18.6284 10.0215 19.025 10.4998 19.025H16.2398C18.7015 19.025 20.7082 17.0184 20.7082 14.5567C20.7082 12.095 18.7015 10.1 16.2398 10.1Z"
                            fill="#FFF2E7" />
                    </svg>

                    <p>Quay lại</p>
                </div>
            </a>

        </div>

        <div class="content-info-service-left">
            <h2>Thông tin dịch vụ</h2>
            
            <div class="info-service">
                
                <div class="info-service-left">
                    <p>Mã dịch vụ: {{ $service-> service_id }}</p>
                    <p>Tên dịch vụ: {{ $service -> service_name }}</p>
                    <p>Mô tả: {{ $service -> service_desc }}</p>
                </div>

                <div class="info-service-right">
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
                
            </div>

            <div>
                <div class="area-number-level-rules">
                    <p class="heading-number-level-rules">Quy tắc cấp số</p>
                    <div class="alert-danger"></div>
                    <div class="items-checkbox-service">
                        <div class="left-checkbox-service">
                            <input disabled class="checkbox-service" type="checkbox" name="auto_increment" value="1" id="auto_increment"
                                @if(isset($service->auto_increment) && $service->auto_increment == 1) checked @endif>
                            <p>Tăng tự động từ:</p>
                        </div>

                        <div class="right-checkbox-service">
                            <input type="text" placeholder="0001" disabled>
                            <p>đến</p>
                            <input type="text" placeholder="9999" disabled>
                        </div>
                    </div>

                    <div class="items-checkbox-service">
                        <div class="left-checkbox-service">
                            <input disabled class="checkbox-service" type="checkbox" name="prefix" value="1" id="prefix"
                                @if(isset($service->prefix) && $service->prefix == 1) checked @endif>
                            <p>Prelix: </p>
                        </div>

                        <div class="right-checkbox-service">
                            <input type="text" placeholder="0001" disabled>
                        </div>
                    </div>

                    <div class="items-checkbox-service">
                        <div class="left-checkbox-service">
                            <input disabled class="checkbox-service" type="checkbox" name="surfix" value="1" id="surfix"
                                @if(isset($service->surfix) && $service->surfix == 1) checked @endif>
                            <p>Surfix: </p>
                        </div>

                        <div class="right-checkbox-service">
                            <input type="text" placeholder="0001" disabled>
                        </div>
                    </div>

                    <div class="items-checkbox-service">
                        <div class="left-checkbox-service">
                            <input disabled class="checkbox-service" type="checkbox" name="reset_daily" value="1"
                                @if(isset($service->reset_daily) && $service->reset_daily == 1) checked @endif>
                            <p>Reset mỗi ngày</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="content-info-service-right">
            <div class="menu-info-service">
                <div class="area-filter-info-service">
                    <div class="dropdown status-device">
                        <p class="text-status-device">Trạng thái</p>

                        <button class="btn-select-info-service" role="button" id="dropdownMenuStatusDevice"
                            data-bs-toggle="dropdown" aria-expanded="false"> Tất cả
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L13 1" fill="#FF7506" />
                                <path d="M1 1L7 7L13 1H1Z" stroke="#FF7506" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>

                        <ul class="dropdown-menu list-status-active-info-service"
                            aria-labelledby="dropdownMenuStats">
                            <li><a class="dropdown-item active-date-stats item-date-stats" href="#">Tất cả</a>
                            </li>
                            <li><a class="dropdown-item item-date-stats" href="#">Đã hoàn thành</a></li>
                            <li><a class="dropdown-item item-date-stats" href="#">Đã thực hiện</a></li>
                            <li><a class="dropdown-item item-date-stats" href="#">Vắng</a></li>
                        </ul>
                    </div>

                    <div class="">
                        <p class="text-status-device">Chọn thời gian</p>
                        <div class="area-input-date">
                            <input class="input-date-info-service" type="date" name="" id="">
                            <svg width="5" height="6" viewBox="0 0 5 6" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.13346 2.46129L2.9735 1.75776L1.08342 0.611381C0.683023 0.372106 0 0.543527 0 0.886368V3.11126V5.11474C0 5.45758 0.683023 5.629 1.08342 5.38616L4.13346 3.53624C4.62218 3.2434 4.62218 2.75771 4.13346 2.46129Z"
                                    fill="#535261" />
                            </svg>
                            <input class="input-date-info-service" type="date">
                        </div>

                    </div>

                    <div class="area-search">
                        <p class="text-status-device">Từ khóa</p>
                        <div class="input-search">
                            <input class="search-info-service" type="text" placeholder="Nhập từ khóa">
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-info-service">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="th-border-left border-info-service">Số thứ tự</th>
                            <th scope="col" class="th-border-right">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $numbers as $number)
                        <tr class="color-tr-white">
                            <td class="border-info-service">
                                {{ $number -> number }}
                            </td>
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
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <div class="navigation">
      <ul class="pagination mt-50 mb-70">
        <li class="page-item"><a class="page-link" href="{{ $numbers->previousPageUrl() }}"><i class="fa-solid fa-caret-left"></i></a></li>
        @for ($i = 1; $i <= $numbers->lastPage(); $i++)
          @if ($i >= $numbers->currentPage() - 2 && $i <= $numbers->currentPage() + 2)
            <li class="page-item {{ ($i == $numbers->currentPage()) ? 'active' : '' }}"><a class="page-link" href="{{ $numbers->url($i) }}">{{ $i }}</a></li>
          @endif
        @endfor

        <li class="page-item"><a class="page-link" href="{{ $numbers->nextPageUrl() }}"><i class="fa-solid fa-caret-right"></i></a></li>
      </ul>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('css/service.css') }}">
<link rel="stylesheet" href="{{ asset('css/device.css') }}">
@endsection