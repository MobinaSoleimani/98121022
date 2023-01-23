<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
@font-face {
  font-family:iran-yekan;
  src: url(fonts/IRANYekanWebRegular.woff)format("woff");
} 
body {
  font-family: iran-yekan;
     }
     ::-webkit-input-placeholder {
      text-align:right;
     }
</style>
    <title>Register</title>
</head>
<body>
<main class="signup-form m-3"style="text-align: right;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                <img class="m-4" src="https://www.digikala.com/statics/img/svg/logo.svg" width="390" height="30" alt="لوگوی دیجیکالا">
                <h3 class="px-2">ثبت نام</h3>
                <p class="px-2">سلام!
لطفا نام، ایمیل و رمز ورود خود را وارد کنید</p>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3"style="text-align: left;">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-danger btn-block">ورود</button>
                            </div>
                            <p>ورود شما به معنای پذیرش شرایط دیجی‌کالا و قوانین حریم‌خصوصی است</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>