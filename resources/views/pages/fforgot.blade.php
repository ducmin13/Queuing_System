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
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p><img class="logo" src="img/Logo alta.png" alt="Ảnh"></p>
                <!-- Form login -->

                <form action="send-mail" method="POST" class="form-login">
                    @csrf
                    <h4 style="text-align: center; font-weight: bold;">Đặt lại mật khẩu</h4>
                    <p>Vui lòng nhập lại email để đặt lại mật khẩu của bạn *</p>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Nhập email">
                    </div>
                    <br>
                    <a href="flogin" type="submit" class="btn btn-primary cancel">Hủy</a>
                    <button type="submit" class="btn btn-primary confirm">Tiếp tục</button>
                </form>
            </div>
            <div class="col-md-8 content">
                <img src="img/Frame.png" alt="Ảnh">
            </div>

        </div>
    </div>
    </div>

</body>


</html>