<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Details</title>
</head>
<body>
<div class="" style="text-align: right;">
<h3 class="mb-3 p-4">{{$good->title}}</h3>
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
    <li class="list-group-item"> قیمت فروشنده         {{$good->price}}تومان
    <button type="button" class="btn btn-danger w-100 mt-3">افزودن به سبد خرید</button>
    </li>
    <li class="list-group-item">فرآیند قیمت‌گذاری و نظارت بر قیمت</li>
  </ul>
</div>
    </div>
    <div class="col-6 ml-5 mr-5">
      <p>اندازه: 400 عدد</p>
      <p>درخواست مرجوع کردن کالا در گروه برچسب پرینتر لیبل زن با دلیل "انصراف از خرید" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).</p>
      <div class="border border-secondary ml-3">
      <p style="color: #DB6F91;">ارسال رایگان سفارش‌ها برای اعضای دیجی‌پلاس</p>
      <p>۲۹ هزارتومان هزینه ارسال به سراسر ایران برای کاربران غیر دیجی‌پلاس</p>
      </div>
      <div class="border border-secondary ml-3">
      <h5>الان بخر، بعدا پرداخت کن!</h5>
      <p class="text-secondary"> با اعتبار دیجی‌پی الان بخرید، ابتدای ماهِ بعد بپردازید</p>
      </div>
      <div class="border border-secondary ml-3">
      <h6>ویژه اعضای دیجی‌پلاس</h6>
      <p class="text-secondary">۳۷۰ تومان هدیه نقدی </p>
      <p class="text-secondary"> ارسال رایگان </p>
      </div>
    </div>
    <div class="col-4">
    <div class="d-flex flex-row-reverse justify-content-around flex-wrap mb-5"> 
    <div class="px-5">
    <img src="{{ asset('/images/1a9e53cd390a8698ec880cb29ac054645f38dcc7_1636540872.jpg') }}" width="230" height="300" alt="img">

</div>

</div>
    </div>
  </div>
</div>
</body>
</html>