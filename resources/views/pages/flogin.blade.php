<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="logo" src="{{ asset('img/Logo alta.png') }}" alt="Ảnh">
                <div class="form-login">
                    <form  action="/login" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="username">Tên đăng nhập *</label>
                            <input required name="name" type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu *</label>
                            <input required name="password" type="password" class="form-control" id="password">
                        </div>
                        <a style="color: #FF9138;" href="fforgot">Quên mật khẩu?</a>
                        <br><br>
                        <?php 
                            $message = Session::get('message');
                            if($message){
                              echo '<span class="danger">',$message.'</span>';
                              Session::put('message',null);
                            }
                          ?>
                        <button style="margin-left: 130px;" type="submit"
                            class="btn btn-primary confirm">Đăng
                            nhập</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8 content">
                <img src="{{ asset('img/Group 341.png') }}" alt="Ảnh">
                <div>
                    <img src="{{ asset('img/title1.png') }}" alt="">
                    <img src="{{ asset('img/title2.png') }}" alt="">
                </div>

            </div>

        </div>
    </div>
    </div>

</body>


</html>