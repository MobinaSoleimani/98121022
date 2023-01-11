@extends('index')
@section('content')
<!-- <div class="d-block y-5 m-5">خرید بر اساس دسته‌بندی</div> -->
<div class="d-flex flex-row-reverse justify-content-around flex-wrap h-100"> 
@foreach ($goods as $good)
@if ( $good->id < 11)
<div class="">
<img src="$good->picture" width="130" height="100"/> 
    <p>{{$good->title}}</p>
</div>
   @endif
@endforeach
</div>

<div class="d-flex flex-row-reverse d-flex justify-content-around flex-wrap "> 
@foreach ($goods as $good)
@if ( $good->id > 10 & $good->id < 25)
<div class="d-flex flex-row-reverse justify-content-around flex-wrap">
    <img  src="{{url($good->picture)}}" width="130" height="100" alt="">
    <p>{{$good->title}}</p>
   </div>
   @endif
@endforeach
</div>


<div class="d-flex flex-column-reverse d-flex justify-content-around flex-wrap mt-5 py-5"> 
@foreach ($goods as $good)
@if ( $good->id > 24 & $good->id < 43)
<div class="d-flex flex-column-reverse justify-content-around flex-wrap">
    <img  src="{{url($good->picture)}}" width="130" height="100" alt="">
    <p>{{$good->title}}</p>
   </div>
   @endif
@endforeach
</div>
ddddddddddddddd
<div class="d-flex d-flex flex-column-reverse justify-content-around flex-wrap mt-5 py-5"> 
@foreach ($goods as $good)
@if ( $good->id > 42 & $good->id < 59)
<div class="d-flex flex-column-reverse justify-content-around flex-wrap">
    <img  src="{{url($good->picture)}}" width="130" height="100" alt="">
    <p>{{$good->title}}</p>
   </div>
   @endif
@endforeach
</div>

@endsection 