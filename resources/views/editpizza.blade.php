@extends('header')

@section('content')
<div class="container shadow p-3">
    <div class="row">
    <div class="p-2 bd-highlight col-md-4 text-center">
        <img class="img img-responsive" style="width:300px" src="{{asset("assets/$Data->pizzaimage")}}" alt="" srcset="" style="max-width: 100%">
    </div>
    <div class="p-2 bd-highlight col-md-8 my-4">
        <form action="/editpizza/{{ $Data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row my-2">
                <div class="col-md-4">
                    <label for="pizzaname" class="col-form-label">Pizza Name : </label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control @error('pizzaname') is-invalid @enderror" name="pizzaname">
                    @error('pizzaname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-row my-2">
                <div class="col-md-4">
                    <label for="pizzaprice" class="col-form-label">Pizza Price : </label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control @error('pizzaprice') is-invalid @enderror" name="pizzaprice">
                    @error('pizzaprice')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-row my-2">
                <div class="col-md-4">
                    <label for="pizzadescription" class="col-form-label">Pizza Description : </label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control @error('pizzadescription') is-invalid @enderror"
                        name="pizzadescription">
                    @error('pizzadescription')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-row my-2">
                <div class="col-md-4">
                    <label for="pizzaimage" class="col-from-label">Pizza Image : </label>
                </div>
                <div class="col-md-6">
                    <input type="file" class="form-control-file @error('pizzaimage') is-invalid @enderror" name="pizzaimage">
                    @error('pizzaimage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <button class="btn btn-primary" type="submit">Edit Pizza</button>
        </form>
    </div>
    </div>
</div>
@endsection