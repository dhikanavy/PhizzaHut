@extends('header')

@section('content')
    @foreach ($Data as $item)
    <div class="container">
        <div class="row border">
            <div class="col-md-3">
                <?php $pizzaimage = $item->pizzatransaction->pizzaimage?>
                <img src="{{asset("assets/$pizzaimage")}}" alt="">
            </div>
            <div class="col-md-9 p-3">
                <h3 class="text-bold">{{$item->pizzatransaction->pizzaname}}</h3>
                <p>Rp. {{$item->pizzatransaction->pizzaprice}}</p>
                <p>{{ $item->quantity }}</p>
                <?php $totalprice = $item->pizzatransaction->pizzaprice * $item->quantity?>
                <p>Total Price : Rp. {{ $totalprice }}</p>
            </div>
        </div>
    </div>
    @endforeach
@endsection