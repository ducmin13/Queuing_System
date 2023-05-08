@extends('welcome')
@section('content')

<link rel="stylesheet" href="{{ asset('css/service.css') }}">
<div class="container mt-4" >
    <div class="mt-3">
<div class="mt-3">
    <h5 style="padding-left: 70px;color: orangered; font-size: 28px;">Quản lý dịch vụ</h5>
    <div class="row" style="width: 1200px;">
        <div class="col-lg-10">
            <div class="row">
            <div style="padding-left: 90px;" class="col-lg-4">
                <p style="font-weight: 600; line-height: 40px;">Trạng thái hoạt động
                    <span class="dropdown-icon">
                    <select name="hoatdong" class="dropd">
                        <option value="" disabled selected>Tất cả</option>
                        <option value="Hoạt động">Hoạt động</option>
                        <option value="Ngừng hoạt động">Ngừng hoạt động</option>
                    </select>
                    <span class="icon_dropd"><i class="fa-solid fa-caret-down"></i></span>
                    </span>
                </p>
            </div>
            <div style=" padding-left: 50px;" class="col-lg-4">
                <p style="font-weight: 600; margin-bottom: 5px; margin-top: 11px;">Chọn thời gian</p>
                <p style="display: flex; align-items: center;">
                    <input type="date" class="chonthoigian" name="thoigian_dau">
                    <span style="font-size: 16px; margin: 0px 10px;"><i class="fa-solid fa-caret-right"></i></span>
                    <input type="date" class="chonthoigian" name="thoigian_cuoi">
                </p>
            </div>
                <div class="col-lg-4">
                    <p style="font-weight: 600; line-height: 40px; margin-left: 150px;">Từ khóa
                        <span class="dropdown-icon">
                            <input type="search" class="dropd" name="timkiem" placeholder="Nhập từ khóa">
                            <span class="icon_search"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <!--  -->
    <div class="content-device" style="display: flex;">
        <div class="table-list-device">
            <table>
                <thead>
                    <tr>
                    <td class="th-border-left" style="color: #ffffff; font-size: 16px;">Mã dịch vụ</td>
                    <td class="border-table" style="color: #ffffff; font-size: 16px;">Tên dịch vụ</td>
                    <td class="text-light" style="color: #ffffff; font-size: 16px;">Mô tả</td>
                    <td class="border-table" style="color: #ffffff; font-size: 16px;">Trạng thái hoạt động</td>
                    <td class="text-light" style="color: #ffffff; font-size: 16px;"></td>
                    <td class="th-border-right" style="color: #ffffff; font-size: 16px;"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="color-tr-white">
                        <td>KIO_01</td>
                        <td class="border-table">Kiosk</td>
                        <td>Mô tả dịch vụ 1</td>
                        <td class="border-table">
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#35c75a" />
                            </svg> Hoạt động</td>
                        <td><a href="#">Chi tiết</a></td>
                        <td><a href="#">Cập nhật</a></td>
                    </tr>

                    <tr class="color-tr-or">
                        <td>KIO_01</td>
                        <td class="border-table">Kiosk</td>
                        <td>Hoạt động</td>
                        <td class="border-table">
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#35c75a" />
                            </svg> Hoạt động</td>
                        <td><a href="#">Chi tiết</a></td>
                        <td><a href="#">Cập nhật</a></td>
                    </tr>

                    <tr class="color-tr-white">
                        <td>KIO_01</td>
                        <td class="border-table">Kiosk</td>
                        <td>Hoạt động</td>
                        <td class="border-table">
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#E73F3F" />
                            </svg> Ngưng hoạt động</td>
                        <td><a href="#">Chi tiết</a></td>
                        <td><a href="#">Cập nhật</a></td>
                    </tr>

                    <tr class="color-tr-or">
                        <td>KIO_01</td>
                        <td class="border-table">Kiosk</td>
                        <td>Hoạt động</td>
                        <td class="border-table">
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#35c75a" />
                            </svg> Hoạt động</td>
                        <td><a href="#">Chi tiết</a></td>
                        <td><a href="#">Cập nhật</a></td>
                    </tr>

                    <tr class="color-tr-white">
                        <td>KIO_01</td>
                        <td class="border-table">Kiosk</td>
                        <td>Hoạt động</td>
                        <td class="border-table">
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#35c75a" />
                            </svg> Hoạt động</td>
                        <td><a href="#">Chi tiết</a></td>
                        <td><a href="#">Cập nhật</a></td>
                    </tr>

                    <tr class="color-tr-or">
                        <td>KIO_01</td>
                        <td class="border-table">Kiosk</td>
                        <td>Hoạt động</td>
                        <td class="border-table">
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#35c75a" />
                            </svg> Hoạt động</td>
                        <td><a href="#">Chi tiết</a></td>
                        <td><a href="#">Cập nhật</a></td>
                    </tr>

                    <tr class="color-tr-white">
                        <td>KIO_01</td>
                        <td class="border-table">Kiosk</td>
                        <td>Hoạt động</td>
                        <td class="border-table">
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#35c75a" />
                            </svg> Hoạt động</td>
                        <td><a href="#">Chi tiết</a></td>
                        <td><a href="#">Cập nhật</a></td>
                    </tr>

                    <tr class="color-tr-or">
                        <td>KIO_01</td>
                        <td class="border-table">Kiosk</td>
                        <td>Hoạt động</td>
                        <td class="border-table">
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#E73F3F" />
                            </svg> Ngưng hoạt động</td>
                        <td><a href="#">Chi tiết</a></td>
                        <td><a href="#">Cập nhật</a></td>
                    </tr>

                    <tr class="color-tr-white">
                        <td class="th-border-bottom-left">KIO_01</td>
                        <td class="border-table">Kiosk</td>
                        <td>Hoạt động</td>
                        <td class="border-table">
                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4.5" r="4" fill="#35c75a" />
                            </svg> Hoạt động</td>
                        <td><a href="#">Chi tiết</a></td>
                        <td class="th-border-bottom-right"><a href="#">Cập nhật</a></td>
                    </tr>
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

<div class="phantrang">
    <ul class="trang">
        <li>
            <a href="#" style="font-size: 29px;"><i class="fa-solid fa-caret-left"></i></a>
        </li>
        <li class="modautrang"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">...</a></li>
        <li><a href="#">10</a></li>
        <li>
            <a href="#" style="font-size: 29px;"><i class="fa-solid fa-caret-right"></i></a>
        </li>
    </ul>
</div>
</div>
</div>

@endsection