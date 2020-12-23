@extends('header')

@section('content')

<div class="container">
    <div class="row">
       @foreach ($user as $item)
       <div class="col-md-4">
       <div class="card shadow mx-2 my-2">
           <div class="card-header bg-danger p-2">
           <span class="card-title text-white align-middle" >User ID : {{$item->id}}</span>
           </div>
           <div class="card-body p-4">
               <p class="card-text">Username : {{ $item->username }}</p>
               <p class="card-text">Email : {{ $item->email }}</p>
               <p class="card-text">Address : {{ $item->address }}</p>
               <p class="card-text">Phone Number : {{ $item->phonenumber }}</p>
               <p class="card-text">Gender : {{ $item->gender }}</p>
           </div>
       </div>
   </div>
       @endforeach
    </div>

</div>

@endsection
