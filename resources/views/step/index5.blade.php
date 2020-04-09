@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="box">
            @foreach($vars as $k=>$v)
                <p> {{ trans('nas.'.$v, [], $lan) }}</p>
            @endforeach
            @if($img)
                <img src="{{ $img }}" alt="">
            @endif
        </div>
    </div>
@endsection
