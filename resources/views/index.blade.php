<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
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
  <title>index</title>
  
</head>
<body>
    <div>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: sticky; top: 0;z-index:5;">
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('shop') }}"><i class="fa-solid fa-cart-shopping"></i></a>
      </li>
      <li class="nav-item active border border-black rounded ml-3 py-2">
        <a class="nav-link d-inline" href="{{ url('registration') }}"><span> ثبت نام  |</span></a>
        <a class="nav-link d-inline" href="{{ url('login') }}"><span>ورود</span> <i class="fa-solid fa-arrow-left"></i></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 w-25 px-0 mr-0 position-relative" >
      <input class="form-control mr-sm-2 w-100 " type="search" placeholder="جستجو" aria-label="Search">
      <i class="fa-solid fa-magnifying-glass" style="position: absolute; top:10px;right:15px;"></i>
    </form>
    <img class="ml-2" src="https://www.digikala.com/statics/img/svg/logo.svg" width="115" height="30" alt="لوگوی دیجیکالا">
  </div>
</nav> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
   
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
<a class="nav-link text-secondary" data-toggle="modal" data-target="#exampleModal">لطفا شهر خود را انتخاب کنید <i class="fa-solid fa-location-dot"></i></a>
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align: right;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="position: relative; left:370px">انتخاب شهر</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow: scroll;">
        <h3 class="text-info">مکان یابی خودکاری <i class="fa-solid fa-location-crosshairs"></i></h3>
        <p class="py-3 mt-4">آذربایجان شرقی</p>
        <p class="py-3">اردبیل</p>
        <p class="py-3">اصفهان</p>
        <p class="py-3">البرز</p>
        <p class="py-3">ایلام</p>
        <p class="py-3">بوشهر</p>
        <p class="py-3">تهران</p>
        <p class="py-3">چهار محال و بختیاری</p>
        <p class="py-3">خراسان جنوبی</p>
        <p class="py-3">خراسان رضوی</p>
        <p class="py-3">خراسان شمالی</p>
        <p class="py-3">خوزستان</p>
        <p class="py-3">زنجان</p>
        <p class="py-3">سمنان</p>
      </div>
    </div>
  </div>
</div>
    </li>
      </ul>
    <form class="form-inline my-2 my-lg-0">
    <div class="collapse navbar-collapse pl-5 mr-1" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto px-5">
      <li class="nav-item active">
        <a class="nav-link text-secondary" href="#">!در دیجی کالا بفروشید </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-secondary" href="#">سوالی دارید؟ </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-secondary" href="#">شگفت انگیزها <i class="fa-solid fa-percent"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-secondary" href="#">تخفیف ها و پیشنهادها <i class="fa-solid fa-percent"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-secondary" href="#">پرفروش ترین ها <i class="fa-solid fa-fire-flame-curved"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-secondary" href="#">سوپرمارکت <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
      </li>
    </ul>
  </div>
    </form>
  </div>
</nav> 

<div class="container-fluid ">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " style="background-color:#fe4345;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <h2 class="fs-5 d-none d-sm-inline py-5 mb-5 mt-2">دسته بندی کالاها</h2>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class=" my-5 py-5">
                        <a href="#" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">موبایل</span>
                        </a>
                    </li>
                    <li class=" my-5 py-5">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">کالای دیجیتال</span> </a>
                    </li>                             
                            <li class=" my-5 py-5">
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">خودرو، ابزار و تجهیزات صنعتی</span></a>
                    </li>
                    <li class=" my-5">
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">مد و پوشاک</span></a>
                    </li>
                    <li class=" my-5 py-5">
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">کالاهای سوپرمارکتی</span></a>
                    </li>
                    <li class=" my-5 py-5">
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">اسباب بازی، کودک و نوزاد</span></a>
                    </li>
                    <li class=" my-5 py-5">
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold"> محصولات بومی و محلی</span></a>
                    </li>
                    <li class=" my-5 py-5">
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">زیبایی و سلامت</span></a>
                    </li>
                    <li class=" my-5 py-5">
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">خانه و آشپزخانه </span></a>
                    </li>
                    <li class=" my-5 py-5">
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">کتاب، لوازم تحریر و هنر</span></a>
                    </li>                                
                    <li class=" my-5 py-5">
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table "></i> <span class="ms-1 d-none d-sm-inline font-weight-bold">ورزش و سفر </span></a>
                    </li>                                                           
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
            @yield('content')
      </div>
</div>
<footer style="text-align: right;">
<div class="py-5 mt-4 mr-3">
<div class="px-5">
<h3>کالای دیجیتال</h3>
<h4>کالای دیجیتال، سرزمین تکنولوژی</h4>
<p>اگر شما هم هر سال چشم انتظار ارائه جدیدترین محصولات برندهای مطرح دنیا هستید، کالای دیجیتال دسته بندی مورد علاقه شماست. محصولات این دسته بسیار متنوع هستند و در قلب تپنده‌ی آن‌ها جدیدترین تکنولوژی‌ها قرار گرفته است. شما می‌توانید این محصولات را از قیمت‌های اقتصادی تا گران‌ترین و کامل‌ترین کانفیگ ممکن تهیه کنید. </p>
<span id="dots"></span>
<span id="more">
<h4 >انواع کالای دیجیتال</h4>
<p>موبایل: تلفن همراه یکی از مهم‌ترین و اصلی‌ترین کالای دیجیتال در زندگی مدرن است. این محصولات هوشمند حتی اقتصادی‌ترین آن‌ها امکانات بسیار زیادی را در اختیار شما قرار می‌دهد و لذت زندگی مدرن را برای‌تان به ارمغان می‌آورد. با خرید یک تلفن هوشمند می‌توانید بهترین عکس‌ها را بگیرید، به موسیقی با بالاترین کیفیت گوش دهید و با تمام دنیا به راحتی چند کلیک ارتباط برقرار کنید.  
لپتاپ: اهمیت لپتاپ، فراتر از یک دستگاه دیجیتال امروزی است زیرا به یک وسیله مهم برای کار و کسب درآمد تبدیل شده است. در واقع شما می‌توانید در هر نقطه‌ از دنیا که هستید، با فشردن یک دکمه لپتاپ، وارد فضای کاری یا خانوادگی شوید. این محصولات برای هر نوع کاربری  به صورت تخصصی طراحی می‌شوند. از این رو می‌توانید یک لپتاپ خاص را برای گیمینگ یا کارهای فنی و مهندسی تهیه کنید.
تبلت: تبلت‌ها عمر کوتاه‌تری نسبت به سایر لوازم دیجیتال دارند. با این حال بسیار مورد استقبال قرار گرفته‌اند و امکانات زیادی گاهی در حد یک لپتاپ ارائه می‌کنند. شما می‌توانید از این محصولات برای طراحی یا مطالعه کتاب الکتارونیکی استفاده کنید. 
هدست و هندز فری: این محصول از جالب‌ترین تولیدات ابزارهای دیجیتال است. هندزفری‌ها در دو نوع بلوتوثی یا با سیم طراحی می‌شوند که با اتصال به موبایل دست شما را برای انجام سایر امور آزاد می‌گذارد. 
اسپیکر: چندین سال پیش به همراه تلویزیون‌ها سیستم صوتی جدیدی به بازار عرضه شد تحت عنوان سینماهای خانوادگی. امروزه اما برای پخش موسیقی دیگر نیازی به اسپیکرها و دستگاه‌ها ضبط و پخش بزرگ نیست. با یک اسپیکر کوچک و یک تلفن همراه یا فلش به سادگی می‌توان با صدای بلند به موسیقی گوش داد.
از دیگر محصولات این گروه می‌توان به دوربین‌‌ها، ماشین‌های اداری، انواع فلش و هارد اکسترنال و جدیدترین محصولات آن یعنی مچبند و ساعت هوشمند اشاره کرد. </p>
<h4>انواع برند تولید کننده کالای دیجیتال</h4>
<p>شرکت‌های بسیاری در تولید محصولات دیجیتال دست دارند. بعضی از آن‌ها مانند سامسونگ samsung، ایسوس ASUS، شیائومی Xiaomi، برندهای به نامی در این حوزه هستند و طرفداران بسیاری هم دارند. اما شرکت‌هایی چون دبلیو یو دبلیو WUW، ماهوت Mahoot، ریمکس Remax هم در این حوزه فعالیت دارند. از سایر برندهای معروف در تولید کالای دیجیتال می‌توان به اپل Apple، نوکیا Nokia، تسکو Tesco، اچ پی HP و ... اشاره کرد.</p>
<h4>خرید انواع کالای دیجیتال از دیجی کالا (Digikala)</h4>
<p>تنوع در این محصولات و برند تولید کننده‌ی آن‌ها بسیار زیاد است. برای یک خرید هوشمندانه و مطمئن، به وب‌سایت دیجی کالا مراجعه کرده و انواع کالای دیجیتال مورد نظر را با توضیحات کامل و بهترین قیمت موجود در بازار مشاهده کنید. هم‌چنین می‌توانید از تخفیف‌ها و امکانات فروش قسطی بهره‌مند شوید</p>
</div>
</span>
<button onclick="myFunction()" class="text-info mr-5" id="myBtn" style="border: none;background-color: white;font-size: 20px;">مشاهده بیشتر</button>
<div>
<img class="ml-4 mt-5" src="https://www.digikala.com/statics/img/svg/digi.svg" width="115" height="30" alt=" دیجیکالا">
<p>تلفن پشتیبانی ۶۱۹۳۰۰۰۰ - ۰۲۱ | ۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم</p>
</div>
</div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "مشاهده بیشتر"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "مشاهده کمتر"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>
</html>