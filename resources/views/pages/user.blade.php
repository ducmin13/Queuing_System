@extends('welcome')
@section('content')

@foreach($info_user as $key => $value)
<form action="/update-user/{{$value->id}}" method="post">
	@csrf
	<div class="info">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-4 pt-4">
	                    <p><img src="img/avatar.png" alt=""></p>
	                    <div class="change-avatar">
	                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
	                        <circle cx="22.5" cy="22.5" r="21.5" fill="#FF7506" stroke="white" stroke-width="2" />
	                        <path fill-rule="evenodd" clip-rule="evenodd"
	                            d="M25.85 11.75C26.3747 11.7501 26.8861 11.9154 27.3116 12.2223C27.7372 12.5292 28.0554 12.9622 28.2213 13.46L28.9 15.5H31.75C32.7446 15.5 33.6984 15.8951 34.4017 16.5983C35.1049 17.3016 35.5 18.2554 35.5 19.25V29.25C35.5 30.2446 35.1049 31.1984 34.4017 31.9017C33.6984 32.6049 32.7446 33 31.75 33H14.25C13.2554 33 12.3016 32.6049 11.5983 31.9017C10.8951 31.1984 10.5 30.2446 10.5 29.25V19.25C10.5 18.2554 10.8951 17.3016 11.5983 16.5983C12.3016 15.8951 13.2554 15.5 14.25 15.5H17.1L17.7787 13.46C17.9446 12.962 18.263 12.5288 18.6889 12.2219C19.1147 11.915 19.6263 11.7499 20.1512 11.75H25.8488H25.85ZM25.85 14.25H20.15L19.4713 16.29C19.3054 16.788 18.987 17.2212 18.5611 17.5281C18.1353 17.835 17.6237 18.0001 17.0987 18H14.25C13.9185 18 13.6005 18.1317 13.3661 18.3661C13.1317 18.6005 13 18.9185 13 19.25V29.25C13 29.5815 13.1317 29.8995 13.3661 30.1339C13.6005 30.3683 13.9185 30.5 14.25 30.5H31.75C32.0815 30.5 32.3995 30.3683 32.6339 30.1339C32.8683 29.8995 33 29.5815 33 29.25V19.25C33 18.9185 32.8683 18.6005 32.6339 18.3661C32.3995 18.1317 32.0815 18 31.75 18H28.9C28.3753 17.9999 27.8639 17.8346 27.4384 17.5277C27.0128 17.2208 26.6946 16.7878 26.5287 16.29L25.85 14.25ZM19.875 23.625C19.875 22.7962 20.2042 22.0013 20.7903 21.4153C21.3763 20.8292 22.1712 20.5 23 20.5C23.8288 20.5 24.6237 20.8292 25.2097 21.4153C25.7958 22.0013 26.125 22.7962 26.125 23.625C26.125 24.4538 25.7958 25.2487 25.2097 25.8347C24.6237 26.4208 23.8288 26.75 23 26.75C22.1712 26.75 21.3763 26.4208 20.7903 25.8347C20.2042 25.2487 19.875 24.4538 19.875 23.625ZM23 18C21.5082 18 20.0774 18.5926 19.0225 19.6475C17.9676 20.7024 17.375 22.1332 17.375 23.625C17.375 25.1168 17.9676 26.5476 19.0225 27.6025C20.0774 28.6574 21.5082 29.25 23 29.25C24.4918 29.25 25.9226 28.6574 26.9775 27.6025C28.0324 26.5476 28.625 25.1168 28.625 23.625C28.625 22.1332 28.0324 20.7024 26.9775 19.6475C25.9226 18.5926 24.4918 18 23 18Z"
	                            fill="white" />
	                    </svg>
                </div>
	                    <h3>{{ $value->fullname }}</h3>
	                </div>
	                <div class="col-lg-8 pt-4">
	                    <div class="row" style="line-height: 40px;">
	                        <div class="col-lg-6">
	                            <p>Tên người dùng
	                                <br>
	                                <input type="text" class="input" name="fullname" value="{{ $value->fullname }}">
	                            </p>
	                        </div>
	                        <div class="col-lg-6">
	                            <p>Tên đăng nhập
	                                <br>
	                                <input type="text" class="input" name="name" disabled value="{{ $value->name }}">
	                            </p>
	                        </div>
	                        <div class="col-lg-6">
	                            <p>Số điện thoại
	                                <br>
	                                <input type="text" class="input" name="phone" value="{{ $value->phone }}">
	                            </p>
	                        </div>
	                        <div class="col-lg-6">
	                            <p>Mật khẩu
	                                <br>
	                                <input type="text" class="input" name="password" disabled value="{{ $value->password }}">
	                            </p>
	                        </div>
	                        <div class="col-lg-6">
	                            <p>Email
	                                <br>
	                                <input type="text" class="input" name="email" disabled
	                                    value="{{ $value->email }}">
	                            </p>
	                        </div>
	                        <!-- Input vai trò -->
	                        <div class="col-lg-6">
	                            <p>Vai trò
	                                <br>
	                                <input type="text" class="input" name="role" value="{{ $value->role }}">
	                            </p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
    </form>
 <link rel="stylesheet" href="{{ asset('css/user.css') }}">
 @endforeach
@endsection