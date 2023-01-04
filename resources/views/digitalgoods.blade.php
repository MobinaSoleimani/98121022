@extends('index')
@section('content')
<div> 
@foreach ($goods as $good)
<p>
    <p>{{$good->id}}</p>
   </p>
@endforeach
</div>
@endsection 