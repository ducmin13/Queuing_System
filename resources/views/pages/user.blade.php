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
	            <button style="margin-left: 860px;" type="submit" class="btn btn-primary confirm">Cập nhật</button>
	        </div>
	    </div>
    </form>
 @endforeach
@endsection