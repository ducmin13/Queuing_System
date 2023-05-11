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
                <img class="logo" src="/img/Logo alta.png" alt="Ảnh">
                <div class="form-login">
                    <form action="{{ url('password/'.$token) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="username">Mật khẩu mới</label>
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password">Nhập lại mật khẩu</label>
                            <input name="re-password" type="password" class="form-control" id="c-password">
                        </div>
                        <br><br>
                        <button style="margin-left: 130px;" type="submit"
                            class="btn btn-primary confirm">Xác
                            nhận</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8 content">
                <img src="/img/Frame.png" alt="Ảnh">

            </div>

        </div>
    </div>
    </div>

</body>
