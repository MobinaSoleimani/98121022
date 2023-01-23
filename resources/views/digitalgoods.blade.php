@extends('index')
@section('content')
<div class="w-100 d-flex flex-column align-items-center"> 

<div id="carouselExampleIndicators" class="carousel slide w-75 mt-2" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/ff965e730a834f6f6d8cdf50cc59cf1e13994115_1674045242.jpg?x-oss-process=image/quality,q_95"  width="480" height="270" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/51967f0d61af1a7d6f63b77d2e64fb996d7887e6_1667980677.jpg?x-oss-process=image/quality,q_95" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/88e7d7d654e6e5111e5d6098d84414c4a7fa341f_1667981540.jpg?x-oss-process=image/quality,q_95" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/ab7a194eb65c3c85854c82a9096c1aeb1d7420d5_1667982004.jpg?x-oss-process=image/quality,q_95" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/d49179fa3475f6d27a91e43e8e46e09e191bf2a1_1667980460.jpg?x-oss-process=image/quality,q_95" alt="Fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h3 class="mb-3 p-4">خرید بر اساس دسته‌ بندی</h3>
<div class="d-flex flex-row-reverse justify-content-around flex-wrap mb-5"> 
@foreach ($goods as $good)
@if ( $good->id < 11)
<div class="px-5">
<img src="{{ asset('/images/1a9e53cd390a8698ec880cb29ac054645f38dcc7_1636540872.jpg') }}" width="130" height="100" alt="img">
    <p>{{$good->title}}</p>
</div>
   @endif
@endforeach
</div>
<div class="row">
<div class="col">
<img class="rounded" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/1ff57cbb1c5344416f68e8ed8158e638be499ddd_1667984179.jpg?x-oss-process=image/quality,q_95" width="480" height="160" alt=" دیجیکالا">
</div>
<div class="col">
<img class="rounded" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/695893e3261ca853048cf745d653f0c83c27ba1a_1667982812.jpg?x-oss-process=image/quality,q_95" width="480" height="160" alt=" دیجیکالا">
</div>    
</div>
<div class="row py-4">
<div class="col">
<img class="rounded" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/e25fda8c9814b33e1c0a2ad20cacefe7858cd073_1667984553.jpg?x-oss-process=image/quality,q_95" width="480" height="160" alt=" دیجیکالا">
</div>
<div class="col">
<img class="rounded" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/775711c58208429373d949c24009a0d7d700fd54_1667984736.jpg?x-oss-process=image/quality,q_95" width="480" height="160" alt=" دیجیکالا">
</div>    
</div>     
<h3 class="mb-3 p-4">دسته‌ بندی‌های پیشنهادی</h3>
<div class="d-flex flex-row-reverse d-flex justify-content-around flex-wrap mb-5"> 
@foreach ($goods as $good)
@if ( $good->id > 10 & $good->id < 25)
<div class="px-5">
<img src="{{ asset('/images/'.$good->picture) }}" width="130" height="100" alt="img">
    <p>{{$good->title}}</p>
   </div>
   @endif
@endforeach
</div>
<div class="row m-2">
<div class="col-3">
<img class="rounded" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/78c2a7eda1f92f5f5761dd354a4e4bed0f0aa8c6_1667985688.jpg?x-oss-process=image/quality,q_95" width="300" height="150" alt=" دیجیکالا">
</div>
<div class="col-3">
<img class="rounded" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/155e754ef0366ae0e949941e39d0ffd3c225d72b_1667986088.jpg?x-oss-process=image/quality,q_95" width="300" height="150" alt=" دیجیکالا">
</div> 
<div class="col-3">
<img class="rounded" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/0b7832dbd10922d245dc421fc8f1d358a488cf3a_1667985480.jpg?x-oss-process=image/quality,q_95" width="300" height="150" alt=" دیجیکالا">
</div>
<div class="col-3">
<img class="rounded" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/0b7832dbd10922d245dc421fc8f1d358a488cf3a_1667985480.jpg?x-oss-process=image/quality,q_95" width="300" height="150" alt=" دیجیکالا">
</div>    
</div>
<h3 class="mb-3 p-4">پرفروش‌ ترین کالاها</h3>
<div class="d-flex flex-row-reverse d-flex justify-content-around flex-wrap mb-5"> 
@foreach ($goods as $good)
@if ( $good->id > 24 & $good->id < 43)
<div class="px-5">
<img src="{{ asset('/images/'.$good->picture) }}" width="130" height="100" alt="img">
    <p>{{$good->title}}</p>
   </div>
   @endif
@endforeach
</div>
<h3 class="mb-3 p-4">پرتکرارترین کالاها</h3>
<div class="d-flex d-flex flex-row-reverse justify-content-around flex-wrap mb-5"> 
@foreach ($goods as $good)
@if ( $good->id > 42 & $good->id < 59)
<div class="px-5">
<img src="{{ asset('/images/'.$good->picture) }}" width="130" height="100" alt="img">
    <p>{{$good->title}}</p>
   </div>
   @endif
@endforeach
</div> 
<div class="border border-secondary rounded">
<h3 class="mb-1 p-4">محبوب‌ترین برندها</h3>
<img class="rounded ml-2 mb-3" src="https://dkstatics-public.digikala.com/digikala-brands/1800.png?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80" width="120" height="90" alt=" دیجیکالا">
<img class="rounded ml-2 mb-3" src="https://dkstatics-public-2.digikala.com/digikala-brands/100008076.png?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80" width="120" height="90" alt=" دیجیکالا">
<img class="rounded ml-2 mb-3" src="https://dkstatics-public.digikala.com/digikala-brands/2994.png?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80" width="120" height="90" alt=" دیجیکالا">
<img class="rounded ml-2 mb-3" src="https://dkstatics-public.digikala.com/digikala-brands/5619.png?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80" width="120" height="90" alt=" دیجیکالا">
<img class="rounded ml-2 mb-3" src="https://dkstatics-public.digikala.com/digikala-brands/0e1f6d05d3fb89f9e6a3db923bbddf5e37b1680f_1628494036.png?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80" width="120" height="90" alt=" دیجیکالا">
<img class="rounded ml-2 mb-3" src="https://dkstatics-public.digikala.com/digikala-brands/b46a720b21296adc1c9d21b931c8d978d0f5f771_1621675109.jpg?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80" width="120" height="90" alt=" دیجیکالا">
<img class="rounded ml-2 mb-3" src="https://dkstatics-public.digikala.com/digikala-brands/5518.png?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80" width="120" height="90" alt=" دیجیکالا">
<img class="rounded mr-2 mb-3" src="https://dkstatics-public.digikala.com/digikala-brands/c672197e1b856916470b6b0f755063b10516fdfb_1642246341.jpg?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80" width="120" height="90" alt=" دیجیکالا">
</div>

<div class="mt-4 d-flex flex-row-reverse ">
<h5 class="" style="padding-left:960px;">مطالب مرتبط</h5>
<a class=""href="#"> مطالب بیشتر در دیجی‌کالا مگ </a>
</div>
<div class="row  mt-1">
<div class="col-3">
<img class="rounded" src="https://www.digikala.com/mag/wp-content/uploads/2023/01/10.22-22-610x380.jpg" width="280" height="150" alt=" دیجیکالا">
<p class=""style="font-size:12px;">بررسی ست میکروفن بی‌سیم کامیکا VDLive10  آچار فرانسه برای صدابرداری</p>
</div>
<div class="col-3">
<img class="rounded" src="https://www.digikala.com/mag/wp-content/uploads/2023/01/VRAM-1-610x380.jpg" width="280" height="150" alt=" دیجیکالا">
<p class="" style="font-size:12px;">چرا ظرفیت حافظه VRAM برای کارت گرافیک اهمیت بسیار زیادی دارد؟</p>
</div> 
<div class="col-3">
<img class="rounded" src="https://www.digikala.com/mag/wp-content/uploads/2023/01/Best-120-HZ-phones-3-610x380.jpg" width="280" height="150" alt=" دیجیکالا">
<p class="" style="font-size:12px;">راهنمای خرید بهترین گوشی با نمایشگر ۱۲۰ هرتزی</p>
</div>
<div class="col-3">
<img class="rounded" src="https://www.digikala.com/mag/wp-content/uploads/2023/01/10.22-8-610x380.jpg" width="280" height="150" alt=" دیجیکالا">
<p class="" style="font-size:12px;">بررسی هدفون بی‌سیم او ام تینگ AirFree EO002Bt؛ قیمت فوق‌العاده و بیس قوی</p>
</div>    
</div>
</div>
@endsection 