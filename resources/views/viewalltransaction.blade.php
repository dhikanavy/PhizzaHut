@extends('header')

@section('content')

    <?php $count=0?>
    @foreach ($transaction as $item)
        <?php $count+=1 ?>
        @if ($count % 2 ==  1)
            <div class="container border bg-danger text-light py-2">
                <p class="card-text">Transaction at : {{$item->transactiondate}}</p>
                <p class="card-text">User ID : {{ $item->userid }}</p>
                <p class="card-text">Username : {{ $item->user->username }}</p>
            </div>
        </a>
        @endif
        @if ($count % 2 ==  0)
            <div class="container border text-danger py-2">
                <p class="card-text">Transaction at : {{$item->transactiondate}}</p>
                <p class="card-text">User ID : {{ $item->userid }}</p>
                <p class="card-text">Username : {{ $item->user->username }}</p>
            </div> 
        </a>
        @endif
    @endforeach

@endsection