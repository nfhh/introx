@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="box">
            @foreach($vars as $k=>$v)
                @if($k===0)
                    <h1> {{ trans('nas.'.$v, [], $lan) }}</h1>
                @else
                    <p> {{ trans('nas.'.$v, [], $lan) }}</p>
                @endif
            @endforeach
            @if($img)
                <img src="{{ $img }}" alt="">
            @endif
        </div>
    </div>
@endsection
