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
    <title>Details</title>
</head>
<body>
<div class="ml-2" style="text-align: right;width:100%;">
<h3 class="m-5"style="text-align: center;">{{$good->title}}</h3>
  <div class="row">
    <div class="col-2 ml-5">
    <div class="card" style="width: 18rem;">
  <div class="card-header">
    فروشنده
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">پخش کالا تهران</li>
    <li class="list-group-item">گارانتی اصالت و سلامت فیزیکی کالا</li>
    <li class="list-group-item">موجود در انبار فروشنده</li>
    <li class="list-group-item">امتیاز دیجی‌کلاب</li>
    <li class="list-group-item"> قیمت فروشنده         {{$good->price}} تومان
    <button type="button" class="btn btn-danger w-100 mt-3"><a class="text-white text-decoration-none" href="{{ url('shop').$good->id }}">افزودن به سبد</a></button>
    </li>
    <li class="list-group-item">فرآیند قیمت‌گذاری و نظارت بر قیمت</li>
  </ul>
</div>
    </div>
    <div class="col-6 ml-5">
      <p>اندازه: 400 عدد</p>
      <p class="text-secondary ml-2" style="font-size:14px;">درخواست مرجوع کردن کالا در گروه برچسب پرینتر لیبل زن با دلیل "انصراف از خرید" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد </p>
      <div class="border border-secondary ml-3 px-3 mb-2">
      <p style="color: #DB6F91;">ارسال رایگان سفارش‌ها برای اعضای دیجی‌پلاس</p>
      <p>۲۹ هزارتومان هزینه ارسال به سراسر ایران برای کاربران غیر دیجی‌پلاس</p>
      </div>
      <div class="border border-secondary ml-3 px-3 mb-2">
      <h5>الان بخر، بعدا پرداخت کن!</h5>
      <p class="text-secondary"style="font-size:14px;"> با اعتبار دیجی‌پی الان بخرید، ابتدای ماهِ بعد بپردازید</p>
      </div>
      <div class="border border-secondary ml-3 px-3 mb-2">
      <h6>ویژه اعضای دیجی‌پلاس</h6>
      <p class="text-secondary"style="font-size:15px;">۳۷۰ تومان هدیه نقدی </p>
      <p class="text-secondary"style="font-size:15px;"> ارسال رایگان </p>
      </div>
    </div>
    <div class="col-3 mr-2">
    <div class="px-0">
    <img src="{{ asset('/images/47.jpg') }}" width="350" height="400" alt="img">
 </div>

    </div>
  </div>
</div>
</body>
</html>