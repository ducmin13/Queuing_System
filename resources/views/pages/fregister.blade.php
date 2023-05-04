<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/login.css">
    <title>Đăng ký</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="logo" src="img/Logo alta.png" alt="Ảnh">
                <div class="form-login">
                    <form action="/register" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Tên đăng nhập *</label>
                            <input required name="name" type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Tên người dùng *</label>
                            <input required name="fullname" type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input required name="email" type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu *</label>
                            <input required name="password" type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password">Xác nhận mật khẩu *</label>
                            <input required name="repassword" type="password" class="form-control" id="password">
                        </div>
                        <a style="color: #FF9138;" href="flogin">Đã có tài khoản?</a>
                        <br><br>
                        <?php 
                            $message = Session::get('message');
                            if($message){
                              echo '<span class="--bs-danger">',$message.'</span>';
                              Session::put('message',null);
                            }
                          ?>
                        <button type="submit" style="margin-left: 130px;"
                            class="btn btn-primary confirm">Đăng
                            ký</button>
                            
                    </form>
                </div>
            </div>
            <div class="col-md-8 content">
                <img src="img/Group 341.png" alt="Ảnh">
                <div>
                    <img src="img/title1.png" alt="">
                    <img src="img/title2.png" alt="">
                </div>

            </div>

        </div>
    </div>
    </div>

</body>


</html>