@extends('header')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card-header bg-danger">
                    <h4 class="text-white mt-1">Register</h4>
                </div>

                <div class="card-body shadow">
                    <form method="POST" action="/registerpost">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="username" class="">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                                aria-describedby="emailHelp">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                               >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control @error('confirmpassword') is-invalid @enderror" name="confirmpassword">
                            @error('confirmpassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phonenumber">Phone Number</label>
                            <input type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber">
                            @error('phonenumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label><br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label><br>
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>

                </div>



            </div>
        </div>


    </div>
@endsection
