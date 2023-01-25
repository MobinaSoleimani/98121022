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
    <title>Shop</title>
</head>
<body>
<div class="ml-5 mt-5" style="text-align: right;width:90%;">
  <div class="row">
    <div class="col-3 ml-5">
    <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><span class="mr-5 pr-5">{{$good->price}}</span> قیمت کالاها  </li>
    <li class="list-group-item"><span class="mr-5 pr-5">{{$good->price}}</span>جمع سبد خرید</li>
    <li class="list-group-item text-danger"><span class="mr-5 pr-2">۱۱۳,۵۲۰ (۸۶٪)</span>سود شما از خرید</li>
    <button type="button" class="btn btn-danger w-100 mt-3">ادامه </button>
    </li>
    <li class="list-group-item">دیجی کلاب   2 امتیاز</li>
  </ul>
  <p class="text-secondary"style="font-size:14px;"> هزینه این سفارش هنوز پرداخت نشده‌ و در صورت اتمام موجودی، کالاها از سبد حذف می‌شوند</p>

</div>
<div class="border border-secondary mb-3 mt-3 px-2"style="width: 18rem;">
      <p style="color: #DB6F91;">ارسال رایگان سفارش‌ها برای اعضای دیجی‌پلاس</p>
      <p>۲۹ هزارتومان هزینه ارسال به سراسر ایران برای کاربران غیر دیجی‌پلاس</p>
      </div>
      <div class="border border-secondary mb-2 px-2"style="width: 18rem;">
      <h6>الان بخر، بعدا پرداخت کن!</h6>
      <p class="text-secondary"style="font-size:12px;"> با اعتبار دیجی‌پی الان بخرید، ابتدای ماهِ بعد بپردازید</p>
      </div>
    </div>
    <div class="col-8" style="">
    <div class="ml-3 px-1 mb-5 d-flex flex-row-reverse justify-content-between"style="border:solid 1px #b12ba4;background-image: url('https://www.digikala.com/statics/img/svg/digiplus/digiplus-purple-pattern.svg');background-repeat: no-repeat;">
    <div>      
    <h3 style="color: #b12ba4;"> دیجی‌پلاس</h3>
      <p>  خدمات ویژه با اشتراک دیجی‌پلاس</p>
    <button type="button" style="border: none;color: white;background-color: #b12ba4;" class="rounded p-2 my-2">دریافت این خدمات ویژه </button>
      </div>
      <div class="ml-5 p-5">
      <p class="text-secondary"style="font-size:13px;"> ارسال رایگان این سفارش و ۳ سفارش دیگر (در هرماه اشتراک)</p>
      <p class="text-secondary"style="font-size:13px;">  مهلت بیشتر مرجوعی کالا تا ۳۰ روز (جز موبایل و کالای بهداشتی)  </p>
      </div>
      </div>
      <div class="ml-3 p-3 mb-2 border border-secondary"style="border-color: #eee;">
      <h4>سبد خرید شما</h4>
      <div class="d-flex flex-row-reverse">
      <div class="mt-5">
    <img src="{{ asset('/images/47.jpg') }}" width="150"height="200" alt="img">
    </div>
    <div>
    <h5 class=" mr-5 px-5">{{$good->title}}</h5>
      <p class="text-secondary mr-5 px-5"style="font-size:14px;"> 400 عدد</p>
      <p class="text-secondary mr-5 px-5"style="font-size:14px;">  پخش کالا تهران</p>
      <p class="text-secondary mr-5 px-5"style="font-size:14px;">  موجود در انبار فروشنده</p>
      <p class="text-secondary mr-5 px-5"style="font-size:14px;"> موجود در انبار فروشنده</p>
      <p class="text-secondary mr-5 px-5"style="font-size:14px;"> ارسال دیجی‌کالا از ۱ روز کاری دیگر</p>
      <p class="text-danger mr-5 px-5"style="font-size:12px;">  تومان تخفیف{{$good->price}} </p>
      <p class=" mr-5 px-5"style="font-size:12px;"> ۱۸,۴۸۰ تومان</p>
      <p class="text-success mr-5 px-5"style="font-size:12px;"> بهترین قیمت در ۳۰ روز گذشته</p>
      </div>
      </div>
      </div>
    </div>
    </div>
    </div>
</body>
</html>