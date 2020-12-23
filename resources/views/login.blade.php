@extends('header')

@section('content')

<div class="container">
  
  <div class="row">
    <div class="col-md-12">

      <div class="card-header bg-danger">
        <h4 class="text-white mt-1">Login</h4>
      </div>

      <div class="card-body shadow">
        <form method="POST" action="/loginpost">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail" class="">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>

          <button type="submit" class="btn btn-primary">Login</button> <a class="ml-2" href="">Forgot your password?</a>
          
        </form>
      </div>

    </div>
  </div>
    
</div>
@endsection