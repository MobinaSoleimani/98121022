@extends('index')
@section('content')
<div class="w-100 d-flex flex-column align-items-center"> 
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

</div>
@endsection 