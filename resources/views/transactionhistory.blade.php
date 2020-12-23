@extends('header')

@section('content')

    <?php $count=0?>
    @foreach ($Data as $item)
        <?php $count+=1 ?>
        @if ($count % 2 ==  1)
        <a href="/transactiondetail/{{ $item->id }}">
            <div class="container form-inline border bg-danger text-light py-2">
                <p>Transaction at : </p>
                <p>{{$item->transactiondate}}</p>
            </div>
        </a>
        @endif
        @if ($count % 2 ==  0)
        <a href="/transactiondetail/{{ $item->id }}">
            <div class="container form-inline my-2 border text-danger py-2">
                <p>Transaction at : </p>
                <p>{{$item->transactiondate}}</p>
            </div> 
        </a>
        @endif
    @endforeach

@endsection