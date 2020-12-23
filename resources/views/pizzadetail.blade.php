@extends('header')

@section('content')

    @guest
    <div class="container shadow p-3">
        <div class="row">
        <div class="p-2 bd-highlight col-md-5 text-center">
            <img class="img img-responsive" style="width:300px" src="{{asset("assets/$Data->pizzaimage")}}" alt="" srcset="" style="max-width: 100%">
        </div>
        <div class="p-2 bd-highlight col-md-7 my-4">
            <h4>{{$Data->pizzaname}}</h4><br>
            <p>{{$Data->pizzadescription}}</p>
            <p>Rp. {{$Data->pizzaprice}}</p>
        </div>
        </div>
    </div>

    @else
    @if(auth()->user()->role == 'Member')
    <div class="container shadow p-3">
        <div class="row">
            <div class="p-2 bd-highlight col-md-5 text-center">
                <img class="img img-responsive" style="width:300px" src="{{asset("assets/$Data->pizzaimage")}}" alt="" srcset="" style="max-width: 100%">
            </div>
            <div class="p-2 bd-highlight col-md-7 my-4">
                <h4>{{$Data->pizzaname}}</h4><br>
                <p>{{$Data->pizzadescription}}</p>
                <p>Rp. {{$Data->pizzaprice}}</p>

                <form action="/addtocart/{{$Data->id}}" method="POST" class="form-inline my-2">
                    @csrf
                    <label for="">Quantity: </label>
                    <input type="number" name="quantity" id="" class="form-control mx-2">
                    <button class="btn btn-primary" type="submit">Add to Cart</button>
                </form>
                
            </div>
        </div>
    </div>
    @endif
    
    @if(auth()->user()->role == 'Admin')
    <div class="container shadow p-3">
        <div class="row">
        <div class="p-2 bd-highlight col-md-5 text-center">
            <img class="img img-responsive" style="width:300px" src="{{asset("assets/$Data->pizzaimage")}}" alt="" srcset="" style="max-width: 100%">
        </div>
        <div class="p-2 bd-highlight col-md-7 my-4">
            <h4>{{$Data->pizzaname}}</h4><br>
            <p>{{$Data->pizzadescription}}</p>
            <p>Rp. {{$Data->pizzaprice}}</p>
        </div>
        </div>
    </div>
    @endif
    @endguest
        
    
@endsection