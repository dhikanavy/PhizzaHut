@extends('header')

@section('content')
    <div class="container shadow rounded pt-2 px-4">
        <div class="row">
            <div class="col-md-3">
                <img class="img img-fluid" src="{{ asset("assets/$Data->PizzaImage") }}" alt="">
            </div>
            <div class="col-md-9">
                <h3 class="mb-3">Edit Pizza Detail</h3>
                <form action="">
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <p>Pizza Name</p>
                        </div>
                        <div class="col-md-9 mb-2">
                            <input type="text" class="form-control" name="inputPizzaName" value="{{ $Data->PizzaName }}" required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <p>Pizza Price</p>
                        </div>
                        <div class="col-md-9 mb-2">
                            <input type="number" class="form-control" name="inputPizzaPrice" value="{{ $Data->PizzaPrice }}" required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <p>Pizza Description</p>
                        </div>
                        <div class="col-md-9 mb-2">
                            <input type="text" class="form-control" name="inputPizzaDescription" value="{{ $Data->PizzaDescription }}" required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <p>Pizza Image</p>
                        </div>
                        <div class="col-md-9 mb-2">
                            <input type="file" class="form-control" name="inputPizzaImage" required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <input type="submit" name="" id="" class="btn btn-primary" value="Edpit Pizza">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection