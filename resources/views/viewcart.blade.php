@extends('header')

@section('content')
    <div class="container">
        <div class="">
            @foreach ($Data as $item)
            <div class="row border rounded my-3">
                <div class="p-2 bd-highlight col-md-4 text-center">
                    <?php $pizzaimage = $item->pizza->pizzaimage?>
                    <img alt="" class="" src="{{asset("assets/$pizzaimage")}}">
                </div>
                <div class="p-2 bd-highlight col-md-8">
                    <p>{{$item->pizza->pizzaname}}</p>
                    <p>Rp. {{$item->pizza->pizzaprice}}</p>
                    <p>{{ $item->quantity }}</p>

                    <form action="/update/{{$item->id}}" method="POST">
                        @csrf
                        <div class="form-inline">
                            <label for="">Quantity: </label>
                            <input type="number" name="quantity" id="" class="form-control mx-2 my-2">
                        </div>
                        <div class="">
                            <button class="btn btn-primary">Update Quantity</button>
                            <a href="/delete/{{$item->id}}" class="btn btn-danger">Delete from Cart</a>
                        </div>
                    </form>
                </div>
            </div>    
            @endforeach 
        </div>

        <form action="/checkout" class="text-center" method="POST">
            @csrf
            <button class="btn btn-dark">Checkout</button>
        </form>
    </div>
@endsection