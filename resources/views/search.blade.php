@extends('header')

@section('content')
    
    <div class="container">
        <h1 class="display-2 text-center">Our Freshly Made Pizza!</h1>
        <h2 class="display-4 text-center">order it now!</h2>

        
        <form action="/search" method="GET" class="form-inline justify-content-center">
            @csrf
            <label for="">Search Pizza:</label>
            <input type="search" name="search" id="" class="form-control mx-2">
            <button class="btn btn-primary">Search</button>
        </form>
        
        
        @guest
            <div class="row">
                @foreach ($Pizza as $item)
                    <div class="col-md-4">
                        <div class="card shadow p-2 mx-2 my-2">
                            <a href=""><img class="card-img-top" src="{{ asset("assets/$item->pizzaimage") }}" alt=""></a>
                            <div class="card-body">
                                <p class="card-title">{{ $item->pizzaname }}</p>
                                <p class="card-text">{{ $item->pizzaprice }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $Pizza->links() }}
        @else
            @if(auth()->user()->role == 'Member')
            <div class="row">
                @foreach ($Pizza as $item)
                <div class="col-md-4">
                    <div class="card shadow p-2 mx-2 my-2">
                        <a href=""><img class="card-img-top" src="{{ asset("assets/$item->pizzaimage") }}" alt=""></a>
                        <div class="card-body">
                            <p class="card-title">{{ $item->pizzaname }}</p>
                            <p class="card-text">{{ $item->pizzaprice }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $Pizza->links() }}
            @endif

            @if(auth()->user()->role == 'Admin')
            <div class="row">
                @foreach ($Pizza as $item)
                <div class="col-md-4">
                    <div class="card shadow mx-2 my-2">
                        <a href=""><img class="card-img-top" src="{{ asset("assets/$item->pizzaimage") }}" alt=""></a>
                        <div class="card-body">
                            <p class="card-title">{{ $item->pizzaname }}</p>
                            <p class="card-text">{{ $item->pizzaprice }}</p>
                        </div>
                        <div class="card-footer text-center">  
                            <a href="" class="btn btn-primary">Update Pizza</a>
                            <a href="" class="btn btn-danger">Delete Pizza</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $Pizza->links() }}
            @endif

        @endguest
    </div>

@endsection