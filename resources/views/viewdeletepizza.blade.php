@extends('header')

@section('content')
<div class="container shadow p-3">
    <div class="row">
    <div class="p-2 bd-highlight col-md-5 text-center">
        <img class="img img-responsive" style="width:300px" src="{{asset("assets/$Data->pizzaimage")}}" alt="" srcset="" style="max-width: 100%">
    </div>
    <div class="p-2 bd-highlight col-md-7 my-4">
        <h4>{{$Data->pizzaname}}</h4><br>
        <p>{{$Data->pizzadescription}}</p>
        <p>Rp. {{$Data->pizzaprice}}</p>
        <a href="/deletepizza/{{ $Data->id }}" class="btn btn-danger">Delete Pizza</a>
    </div>
    </div>
</div>
@endsection