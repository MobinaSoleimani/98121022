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
<div class="m-3" style="text-align: right;width:95%;">
<h3 class="m-5"style="text-align: center;">title</h3>
  <div class="row">
    <div class="col-2">
    <div class="card" style="width: 18rem;">
  <div class="card-header">
    فروشنده
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">پخش کالا تهران</li>
    <li class="list-group-item">گارانتی اصالت و سلامت فیزیکی کالا</li>
    <li class="list-group-item">موجود در انبار فروشنده</li>
    <li class="list-group-item">امتیاز دیجی‌کلاب</li>
    <li class="list-group-item"> قیمت فروشنده         price تومان
    <button type="button" class="btn btn-danger w-100 mt-3">افزودن به سبد </button>
    </li>
    <li class="list-group-item">فرآیند قیمت‌گذاری و نظارت بر قیمت</li>
  </ul>
  @foreach ($goods as $good)
@if ( $good->id < 2)
<div class="px-5">
<img src="{{ asset('/images/1a9e53cd390a8698ec880cb29ac054645f38dcc7_1636540872.jpg') }}" width="130" height="100" alt="img">
    <p>{{$good->title}}</p>
</div>
   @endif
@endforeach
</div>
    </div>
    <div class="col-6 ml-5 mr-5">
      <p>اندازه: 400 عدد</p>
      <p class="text-secondary ml-2" style="font-size:14px;">درخواست مرجوع کردن کالا در گروه برچسب پرینتر لیبل زن با دلیل "انصراف از خرید" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد</p>
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
    <div class="col-4">
    <div class="d-flex flex-row-reverse justify-content-around flex-wrap mb-5"> 
    <div class="px-5">
    <!-- <img src="{{ asset('/images/1a9e53cd390a8698ec880cb29ac054645f38dcc7_1636540872.jpg') }}" width="230" height="300" alt="img"> -->
</div>
</div>
    </div>
  </div>
</div>
</body>
</html>